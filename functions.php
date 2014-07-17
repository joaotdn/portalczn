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

/*
    Chamadas AJAX
 */

//Requisitar videos na pagina principal
require_once ( get_stylesheet_directory() . '/functions/home_videos.php' );


?>