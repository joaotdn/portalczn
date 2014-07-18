<?php
  /*
    * Post type para Blog J. França
    * Última alteração: 18 de julho de 2014
   */
  
function blog_init() {
  $labels = array(
    'name'               => 'Blog',
    'singular_name'      => 'Blog',
    'add_new'            => 'Adicionar Novo',
    'add_new_item'       => 'Adicionar novo post',
    'edit_item'          => 'Editar post',
    'new_item'           => 'Novo post',
    'all_items'          => 'Todos os post',
    'view_item'          => 'Ver post',
    'search_items'       => 'Buscar post',
    'not_found'          => 'N&atilde;o encontrado',
    'not_found_in_trash' => 'N&atilde;o encontrado',
    'parent_item_colon'  => '',
    'menu_name'          => 'Blog'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'jfranca' ),
    //'menu_icon'           => get_stylesheet_directory_uri() . '/images/works.png',
    'capability_type'    => 'post',
    'menu_position'      => 1,
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title','thumbnail','excerpt','editor','comments' )
  );

  register_post_type( 'blog', $args );
}

add_action( 'init', 'blog_init' );

?>