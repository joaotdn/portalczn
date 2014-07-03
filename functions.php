<?php

//API Clima e Tempo
class Climatempo {

    private $cidadesJson;

    function __construct() {
        $raw_file = file_get_contents(dirname(__FILE__) . "/cidades.json");
        $this->cidadesJson = json_decode($raw_file);
    }

    public function search($search, $limit = 10) {
        $matches = 0;
        $results = array();
        $str_busca = $this->remover_caracter($search);

        if (empty($str_busca)) {
            throw new Exception("Digite uma palavra parar busca as cidades");
            return false;
        }

        foreach ($this->cidadesJson as $estado) {
            foreach ($estado->c as $cidade) {
                if (strpos($this->remover_caracter($cidade->n), $str_busca) !== false) {
                    $matches++;
                    array_push($results, array("id" => $cidade->i, "nome" => $cidade->n, "uf" => $estado->u));
                }

                if ($matches >= $limit) {
                    break 2;
                }
            }
        }

        return $results;
    }

    public function get_time($id_cidade) {
        $results = array();
        $nome_cidade = "";
        $nome_estado = "";

        foreach ($this->cidadesJson as $estado) {
            foreach ($estado->c as $cidade) {
                if ($cidade->i == $id_cidade) {
                    $nome_cidade = $this->remover_caracter($cidade->n);
                    $nome_estado = strtolower($estado->u);
                }
            }
        }

        if ($nome_cidade == "" || $nome_estado == "") {
            throw new Exception("Cidade não encontrada");
        }

        $url = "http://www.climatempo.com.br/previsao-do-tempo/cidade/{$id_cidade}/{$nome_cidade}-{$nome_estado}";

        try {
            $html = $this->google_curl($url);
        } catch (Exception $e) {
            throw new Exception("Erro acessando site climatempo. Erro: " . $e);
        }

        $dom = new DomDocument();

        // Retorna varios erros de html
        @$dom->loadHTML($html);
        $wrapperDivs = $this->get_all_by_class($dom, "box-prev-completa");

        foreach ($wrapperDivs as $node) {
            $max = $this->get_one_by_class($node, "max");
            $min = $this->get_one_by_class($node, "min");
            $data = $this->get_one_by_class($node, "data-prev");
            $resumo = $this->get_one_by_class($node, "fraseologia-prev");

            array_push($results, array(
                "dia" => trim($data->nodeValue),
                "tempo" => $this->get_previsao_horarios($node),
                "tempMax" => trim($max->nodeValue),
                "tempMin" => trim($min->nodeValue),
                "resumo" => trim($resumo->nodeValue)
            ));
        }

        return $results;
    }

    /*
     * Retorna os horários - Manhã, Tarde, Noite - Com a previsão correspondente
     */

    private function get_previsao_horarios($node) {
        $return = array();

        $tmp_dom = new DOMDocument();
        $tmp_dom->appendChild($tmp_dom->importNode($node, true));

        $previsoes = $this->get_all_by_class($tmp_dom, "ico-sprite-prev-span");

        $i = 0;
        $tipos = array("Manhã", "Tarde", "Noite");

        foreach ($previsoes as $previsao) {
            $classes = explode(" ", $previsao->getAttribute("class"));
            $codigo = str_replace("sprite-prev-45px-", "", $classes[2]);

            // O codigo vem com um "n" quando é à noite, transforma em int
            $codigo = intval($codigo);

            array_push($return, array(
                "horario" => $tipos[$i],
                "tempo" => $this->codigo_para_tempo($codigo)
            ));

            $i++;
        }

        return $return;
    }

    /*
     * Transforma o código - Vai de 1 à 9 - em nome da previsão
     */

    private function codigo_para_tempo($codigo) {
        $tempos = array("Ensolarado", "Nublado", "Chuvisco", "Chuvas Isoladas", "Chuvoso", "Chuva com trovoadas", "Ensolarado", "Neve", "Sol com poucas nuvens");
        return $tempos[$codigo - 1];
    }

    /*
     * Remove acentos para comparar strings
     */

    private function remover_caracter($str, $remove_spaces = false) {
        $clean = $this->replaceAccents($str);
        $clean = preg_replace("/[^a-zA-Z0-9\/_| -]/", '', $clean);
        $clean = strtolower(trim($clean));
        $clean = htmlspecialchars(strip_tags($clean));
        $clean = $remove_spaces ? preg_replace("/[\/_| -]+/", '', $clean) : $clean;

        return $clean;
    }

    private function replaceAccents($str) {
        $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');
        $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
        return str_replace($a, $b, $str);
    }

    /*
     * Função curl
     */

    private function google_curl($url) {
        $userAgent = 'Googlebot/2.1 (http://www.googlebot.com/bot.html)';

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
        curl_setopt($curl, CURLOPT_AUTOREFERER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 2);

        $html = curl_exec($curl);

        $html = @mb_convert_encoding($html, 'HTML-ENTITIES', 'utf-8');

        if (curl_errno($curl)) {
            throw new Exception('error:' . curl_error($curl));
            return false;
        }

        curl_close($curl);

        return $html;
    }

    /*
     * Pega o primeiro children com a classe passada pela função
     */

    private function get_one_by_class($node, $class) {
        // $node é do tipo DomElement, precisa de um tipo DomDocument pra usar a classe DomXPath
        $tmp_dom = new DOMDocument();
        $tmp_dom->appendChild($tmp_dom->importNode($node, true));

        $finder2 = new DomXPath($tmp_dom);
        $nodes2 = $finder2->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $class ')]");
        foreach ($nodes2 as $node) {
            $firstNode = $node;
            break;
        }
        return $firstNode;
    }

    /*
     * Pega todos elementos com a classe passada pela função
     */

    private function get_all_by_class($tmp_dom, $class) {
        $finder2 = new DomXPath($tmp_dom);
        $nodes2 = $finder2->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $class ')]");
        return $nodes2;
    }

}

?>