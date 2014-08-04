<?php
  /*
    * Post type para Mensagens
    * Última alteração: 18 de julho de 2014
   */
  
function mensagens_init() {
  $labels = array(
    'name'               => 'Mensagens',
    'singular_name'      => 'Mensagem',
    'add_new'            => 'Adicionar Nova',
    'add_new_item'       => 'Adicionar nova Mensagem',
    'edit_item'          => 'Editar Mensagem',
    'new_item'           => 'Nova Mensagem',
    'all_items'          => 'Todas as Mensagens',
    'view_item'          => 'Ver Mensagem',
    'search_items'       => 'Buscar Mensagens',
    'not_found'          => 'N&atilde;o encontrada',
    'not_found_in_trash' => 'N&atilde;o encontrada',
    'parent_item_colon'  => '',
    'menu_name'          => 'Mensagens'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'mensagens' ),
    'capability_type'    => 'post',
    'menu_position'      => 1,
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' )
  );

  register_post_type( 'mensagens', $args );

  $labels = array(
    'name'              => __( 'Datas'),
    'singular_name'     => __( 'Data'),
    'search_items'      =>  __( 'Buscar' ),
    'popular_items'     => __( 'Mais usadas' ),
    'all_items'         => __( 'Todas as Datas' ),
    'parent_item'       => null,
    'parent_item_colon' => null,
    'edit_item'         => __( 'Adicionar nova' ),
    'update_item'       => __( 'Atualizar' ),
    'add_new_item'      => __( 'Adicionar nova Data' ),
    'new_item_name'     => __( 'Nova' )
    );

  register_taxonomy("datas", array("mensagens"), array(
    "hierarchical"      => true, 
    "labels"            => $labels, 
    "singular_label"    => "Data", 
    "rewrite"           => true,
    "add_new_item"      => "Adicionar nova Data",
    "new_item_name"     => "Nova Data",
  ));
}
add_action( 'init', 'mensagens_init' );

?>