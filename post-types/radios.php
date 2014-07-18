<?php
  /*
    * Post type para Rádios J. França
    * Última alteração: 18 de julho de 2014
   */
  
function radios_init() {
  $labels = array(
    'name'               => 'Rádios',
    'singular_name'      => 'Rádios',
    'add_new'            => 'Adicionar Nova',
    'add_new_item'       => 'Adicionar nova rádio',
    'edit_item'          => 'Editar rádio',
    'new_item'           => 'Nova rádio',
    'all_items'          => 'Todas as rádio',
    'view_item'          => 'Ver rádio',
    'search_items'       => 'Buscar rádio',
    'not_found'          => 'N&atilde;o encontrada',
    'not_found_in_trash' => 'N&atilde;o encontrada',
    'parent_item_colon'  => '',
    'menu_name'          => 'Rádios'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'radios' ),
    //'menu_icon'           => get_stylesheet_directory_uri() . '/images/works.png',
    'capability_type'    => 'post',
    'menu_position'      => 1,
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title' )
  );

  register_post_type( 'radios', $args );
}

add_action( 'init', 'radios_init' );

?>