        <?php
          /**
           * Barra lateral da página principal
           * Última alteração: 18 de julho de 2014
           */
        ?>
        <aside id="sidebar" class="small-16 medium-16 large-4 columns">

          <figure class="small-16 left show-for-large-up mbt">
            <?php 
              if(function_exists( 'wp_bannerize' ))
                wp_bannerize( 'group=Banner lateral topo (300 x 250)&no_html_wrap=1&random=1&limit=1' ); 
            ?>
          </figure><!-- //publicidade -->
          
          <div class="small-16 show-for-large-up left mbt show-for-large-up">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              Noticias da mesma categoria
             */
            require_once ( get_stylesheet_directory() . '/includes/widget_related.php' );
          ?>

          <div class="small-16 left mbt">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              TV Diario do Sertao
             */
            $ativar = get_option('nt_tvds');
            if($ativar == 'Sim'):
          ?>
          <section class="small-16 medium-6 large-16 left">
            <header class="widget-header small-16 left rel mbt">
              <h4 class="text-up red">Tv Diário do Sertão</h4>
              <div class="block-red abs"></div>
            </header>

            <figure class="small-16 left">
              <?php
                $link = get_option('nt_tvdslink');
              ?>
              <a href="<?php if($link) { echo $link; } else { echo '#'; } ?>" class="display-block small-8 medium-16 large-16 left mbt th click-tv" target="_blank">
                <?php $image = get_option('nt_tvdsimg'); if($image): ?>
                <img src="<?php echo $image; ?>" alt="">
                <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/tv.jpg" alt="">
                <?php endif; ?>
              </a>

              <figcaption class="small-8 medium-16 large-16 left mbt small-ads-left">
                <h4 class="no-mbt">
                  <a href="<?php if($link) { echo $link; } else { echo '#'; } ?>">
                  <?php $txt = get_option('nt_tvdstxt'); if($txt) { echo $txt; } ?>
                  </a>
                </h4>
              </figcaption>
            </figure>
          </section><!-- //tv diario do sertão -->

          <div class="small-16 left mbt hide-for-medium">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->
          <?php endif; ?>

          <figure class="medium-6 large-16 left show-for-large-up mbt">
            <?php 
              if(function_exists( 'wp_bannerize' ))
                wp_bannerize( 'group=Banner Classificados (300 x 250)&no_html_wrap=1&random=1&limit=1' ); 
            ?>
          </figure><!-- //publicidade -->

          <div class="small-16 left mbt show-for-large-up">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              Classificados
             */
            require_once ( get_stylesheet_directory() . '/includes/widget_classificados.php' );
          ?>

          <div class="small-16 left mbt">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              Like Box Facebook
             */
            require_once ( get_stylesheet_directory() . '/includes/widget_facebook.php' );

            /*
              Menu de rádios
             */
            require_once ( get_stylesheet_directory() . '/includes/widget_radios.php' );
          ?>

          
        </aside><!-- //sidebar -->