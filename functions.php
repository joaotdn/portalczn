<?php
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

//Gera novos formatos de miniaturas
if ( function_exists( 'add_image_size' ) ) { 
  add_image_size( 'slide-small-thumb', 70, 70, true ); //miniaturas do slide
  add_image_size( 'slide-thumb', 471, 392, true ); //imagens do slide
  add_image_size( 'politica-thumb', 197, 197, true ); //imagens do box politica
  add_image_size( 'cidades-thumb', 140, 140, true ); //imagens do box cidades
  add_image_size( 'policial-thumb', 156, 156, true ); //imagens do box policial
  add_image_size( 'videos-thumb', 471, 300, true ); //imagens do box videos
  add_image_size( 'fotos-thumb', 350, 180, true ); //imagens do box fotos
  add_image_size( 'classificados-thumb', 84, 84, true ); //imagens do box classificados
  add_image_size( 'category-thumb', 460, 240, true ); //imagens para category
  add_image_size( 'blog-thumb', 960, 340, true ); //imagens para o blog
}

//Listar Editorias
function listar_editorias() {
    $args = array(
        'hide_empty'    => 0,
        'title_li'      => '',
        'hierarchical'  => 0,
    );
    //Lista categorias fora das editorias
    wp_list_categories( $args );
}

//Incluir Jquery
function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

//Nome da 1a categoria de uma postagem em um loop
function get_first_category_name() {
    $category = get_the_category(); 
    if($category[0]){
        echo $category[0]->cat_name;
    }
}

//Link da 1a categoria de uma postagem em um loop
function get_first_category_link() {
    $category = get_the_category(); 
    if($category[0]){
        echo get_category_link( $category[0]->term_id );
    }
}

//Pega a primeira tag de uma postagem em um loop 
function get_first_tag() {
    $posttags = get_the_tags();
    $count=0;
    if ($posttags) {
        foreach($posttags as $tag) {
            $count++;
            if (1 == $count) {
                echo $tag->name . ' ';
            }
        }
    } else {
        get_first_category_name();
    }
}

//Gerar resumo com limite de caracteres
remove_filter('the_excerpt', 'wpautop');

function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function get_excerpt($l) {
  $e = substr(the_excerpt(), 0,$l);
  return $e;
}

//Pegar url da categoria pelo nome
function echo_url_category($cat_name) {
    $category_id = get_cat_ID( $cat_name );
    $category_link = get_category_link( $category_id );
    echo esc_url( $category_link );
}

//Alterar saída padrão das galerias
add_filter('post_gallery', 'my_post_gallery', 10, 2);
function my_post_gallery($output, $attr) {
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';

    // Here's your actual output, you may customize it to your need
    $output = "<div class=\"slideshow-wrapper small-10 medium-8 large-5 mbt rel\">\n";
    $output .= "<span class=\"small-16 abs gallery-anchor display-block font-header text-up\"><span class=\"icon-pictures\"></span> Galeria</span>";
    $output .= "<ul class=\"clearing-thumbs clearing-feature list-gallery\" data-clearing>\n";

    // Now you loop through each attachment
    foreach ($attachments as $id => $attachment) {
        // Fetch the thumbnail (or full image, it's up to you)
        $img = wp_get_attachment_image_src($id, 'medium');
        $full = wp_get_attachment_image_src($id, 'full');

        $output .= "<li>\n";
        $output .= "<a href=\"{$full[0]}\"><img src=\"{$img[0]}\" width=\"{$img[1]}\" height=\"{$img[2]}\" alt=\"\" /></a>\n";
        $output .= "</li>\n";
    }

    $output .= "</ul>\n";
    $output .= "</div>\n";

    return $output;
}

//Correção para contagem de comentarios
// Disqus: Prevent from replacing comment count
remove_filter('comments_number', 'dsq_comments_text');
remove_filter('get_comments_number', 'dsq_comments_number');
remove_action('loop_end', 'dsq_loop_end');

//Imprime linha horizontal padrao do site
function show_hl() {
    echo "<div class=\"small-16 left clearfix\"><div class=\"hl small-16 left\"></div></div><!-- //hl -->";
}


/*
    Chamadas AJAX
    ============================
 */

//Requisitar videos na pagina principal
require_once ( get_stylesheet_directory() . '/functions/home_videos.php' );

/*
    Post Types
    ============================
 */

//BLOG
require_once ( get_stylesheet_directory() . '/post-types/blog.php' );

//CLASSIFICADOS
require_once ( get_stylesheet_directory() . '/post-types/classificados.php' );

//RÁDIOS
require_once ( get_stylesheet_directory() . '/post-types/radios.php' );

/*
    Opçoes do tema
    ============================
 */
require_once ( get_stylesheet_directory() . '/theme-options.php' );

?>