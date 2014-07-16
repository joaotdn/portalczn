<!doctype html>
<html class="no-js off-canvas-wrap" lang="pt-br" data-offcanvas>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
    
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/vnd.microsoft.icon"/>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-ico"/>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>

    <?php wp_head(); ?>
  </head>
  <body class="inner-wrap">

  <!-- Off Canvas Menu Left -->
  <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list font-header">
        <li><label>Editorias</label></li>
        <?php listar_editorias(); ?>
      </ul>
  </aside>

  <!-- Off Canvas Menu Right -->
  <aside class="right-off-canvas-menu">
      <ul class="off-canvas-list font-header">
        <?php
          /*
            Redes sociais
           */
          $twitter = get_field('czn_twitter');
          $facebook = get_field('czn_facebook');
        ?>
        <li><label>Seguir</label></li>
        <?php if($twitter): ?>
          <li><a href="<?php echo $twitter; ?>" title="Seguir no Twitter"><span class="icon-twitter"></span> Twitter</a></li>
        <?php 
          endif;
          if($facebook): 
        ?>
          <li><a href="<?php echo $facebook; ?>" title="Seguir no Facebook"><span class="icon-facebook3"></span> Facebook</a></li>
        <?php endif; ?>

        <li><label>Fale conosco</label></li>
        <?php
          /*
            Paginas de contato
           */
          $contato = get_page_by_title('Fale conosco');
          $anunciar = get_page_by_title('Como anunciar');

          if($contato):
        ?>
        <li><a href="<?php echo get_page_link($contato->ID); ?>"><span class="icon-mail"></span> Mande um email</a></li>
        <?php 
          endif;
          if($anunciar):
        ?>
        <li><a href="<?php echo get_page_link($anunciar->ID); ?>"><span class="icon-megaphone"></span> Anuncie no site</a></li>
        <?php endif; ?>
      </ul>
  </aside>

  <!-- close the off-canvas menu -->
  <a class="exit-off-canvas"></a>

    <section class="small-16 top-bar" data-topbar>
      <div class="row">
        <nav class="top-bar-section">
          <a class="left-off-canvas-toggle left show-for-small-only" href="#"><span class="icon-menu"></span></a>
          <a class="right-off-canvas-toggle right show-for-small-only" href="#"><span class="icon-share"></span></a>

          <ul class="left text-up font-header">
            <li class="has-dropdown">
              <a href="#" title="" class="active">Editorias</a>
              <ul class="dropdown">
                <?php listar_editorias(); ?>
              </ul>
            </li>
            <?php 
              $classificados = get_post_type_archive_link('classificados');
              if($classificados):
            ?>
            <li><a href="<?php echo $classificados; ?>" title="Classificados">Classificados</a></li>
            <?php
              endif;
              $videos_id = get_cat_ID( 'Videos' );
              $videos_link = get_category_link( $category_id );

              if($videos_link):
            ?>
            <li><a href="<?php echo esc_url( $videos_link ); ?>">Vídeos</a></li>
            <?php endif; ?>
          </ul>

          <ul class="right">
            <?php if($facebook): ?>
            <li><a href="<?php echo $facebook; ?>" title="Seguir no Facebook" data-tooltip data-options="disable_for_touch:true" class="has-tip tip-bottom radius"><span class="icon-facebook3"></span></a></li>
            <?php endif; ?>

            <?php if($twitter): ?>
            <li><a href="<?php echo $twitter; ?>" title="Seguir no Twitter" data-tooltip data-options="disable_for_touch:true" class="has-tip tip-bottom radius"><span class="icon-twitter"></span></a></li>
            <?php endif; ?>

            <?php if($anunciar): ?>
            <li><a href="<?php echo get_page_link($anunciar->ID); ?>" title="Anunciar no site" data-tooltip data-options="disable_for_touch:true" class="has-tip tip-bottom radius"><span class="icon-megaphone"></span></a></li>
            <?php endif; ?>

            <?php if($contato): ?>
            <li><a href="<?php echo get_page_link($contato->ID); ?>" title="Contato" data-tooltip data-options="disable_for_touch:true" class="has-tip tip-bottom radius"><span class="icon-mail"></span></a></li>
            <?php endif; ?>
          </ul>
        </nav>

      </div><!-- //row -->
    </section><!-- //top-bar -->

    <section id="header" class="small-16">
      <div class="row">
        <figure class="large-4 small-16 columns">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Página principal" class="display-block icon-logo show-for-medium-up"></a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Página principal" class="display-block icon-logo-small hide-for-medium-up"></a>
        </figure>

        <figure class="large-10 small-16 columns ads-top show-for-medium-up">
          <a href="#" class="display-block text-right medium-only-text-center">
            <img src="media/ads1.png" alt="">
          </a>
        </figure>
      </div><!-- //row -->
    </section><!-- //header -->