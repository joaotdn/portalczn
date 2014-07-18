<?php
  /*
    * Post type para Classificados
    * Última alteração: 18 de julho de 2014
   */
  
function classificados_init() {
  $labels = array(
    'name'               => 'Classificados',
    'singular_name'      => 'Classificado',
    'add_new'            => 'Adicionar Novo',
    'add_new_item'       => 'Adicionar novo classificado',
    'edit_item'          => 'Editar Classificado',
    'new_item'           => 'Novo Classificado',
    'all_items'          => 'Todos os Classificados',
    'view_item'          => 'Ver Classificado',
    'search_items'       => 'Buscar Classificados',
    'not_found'          => 'N&atilde;o encontrado',
    'not_found_in_trash' => 'N&atilde;o encontrado',
    'parent_item_colon'  => '',
    'menu_name'          => 'Classificados'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'classificados' ),
    'capability_type'    => 'post',
    'menu_position'      => 1,
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' )
  );

  register_post_type( 'classificados', $args );

  $labels = array(
    'name'              => __( 'Categorias'),
    'singular_name'     => __( 'Categoria'),
    'search_items'      =>  __( 'Buscar' ),
    'popular_items'     => __( 'Mais usadas' ),
    'all_items'         => __( 'Todos as categorias' ),
    'parent_item'       => null,
    'parent_item_colon' => null,
    'edit_item'         => __( 'Adicionar nova' ),
    'update_item'       => __( 'Atualizar' ),
    'add_new_item'      => __( 'Adicionar nova categoria' ),
    'new_item_name'     => __( 'Nova' )
    );

  register_taxonomy("anuncios", array("classificados"), array(
    "hierarchical"      => true, 
    "labels"            => $labels, 
    "singular_label"    => "Categoria", 
    "rewrite"           => true,
    "add_new_item"      => "Adicionar nova categoria",
    "new_item_name"     => "Nova categoria",
  ));
}
add_action( 'init', 'classificados_init' );

?>