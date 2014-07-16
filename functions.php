<?php
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

//Gera novos formatos de miniaturas
if ( function_exists( 'add_image_size' ) ) { 
  add_image_size( 'piollin-thumb', 400, 400, true );
  add_image_size( 'clipping', 660, 420, true );
}

//Listar Editorias
function listar_editorias() {
    $editorias = get_cat_ID( 'Editorias');
    $args = array(
        'hide_empty'    => 0,
        'child_of'      => $editorias,
        'title_li'      => ''
    );

    if($editorias) {
        wp_list_categories( $args );
    }

    $args = array(
        'hide_empty'    => 0,
        'title_li'      => ''
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


?>