<?php get_header(); ?>

        <div class="small-16 medium-16 large-12 left the-content">
          <?php
            /*
              Slide MENSAGENS
             */
            include_once 'includes/mensagens_slide.php';
          
            /*
              Slide principal da categoria DESTAQUES
             */
            include_once 'includes/main_slide.php';

            /*
              Últimas NOTÍCIAS
             */
            include_once 'includes/last_news.php';
          ?>
          
          <div class="small-16 columns show-for-medium-up">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <figure class="small-16 columns ads text-center">
            <?php 
              if(function_exists( 'wp_bannerize' ))
                wp_bannerize( 'group=Banner Destaques (728 x 90)&no_html_wrap=1&random=1&limit=1' ); 
            ?>
          </figure><!-- //publicidade -->
          
          <div class="small-16 columns mbt">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->
          
          <?php
            /*
              Box de notícias POLÍTICA
             */
            include_once 'includes/box_politica.php';
          ?>
          
          <div class="small-16 columns">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <figure class="large-5 medium-6 columns ads mbt">
            <?php 
              if(function_exists( 'wp_bannerize' ))
                wp_bannerize( 'group=Banner Policial (300 x 250)&no_html_wrap=1&random=1&limit=1' ); 
            ?>
          </figure><!-- //publicidade -->

          <?php
            /*
              Box de notícias POLICIAL
             */
            include_once 'includes/box_policial.php';
          ?>
          
          <div class="small-16 columns mbt">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              Box de noticias CAJAZEIRAS
             */
            include_once 'includes/box_cajazeiras.php';
          ?>
                
          <div class="small-16 columns mbt show-for-small-only">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              Box de notícias CIDADES
             */
            include_once 'includes/box_paraiba.php';
          ?>
          
          <div class="small-16 columns show-for-medium-up">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <figure class="small-16 columns ads text-center">
            <?php 
              if(function_exists( 'wp_bannerize' ))
                wp_bannerize( 'group=Banner Cajazeiras (728 x 90)&no_html_wrap=1&random=1&limit=1' ); 
            ?>
          </figure><!-- //publicidade -->
          
          <div class="small-16 columns mbt">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              Slide de VÍDEOS
             */
            include_once 'includes/videos_slide.php';
          ?>
          
          <div class="small-16 columns mbt show-for-small-only">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              Slide de FOTOS
             */
            include_once 'includes/fotos_slide.php';
          ?>
          
          <div class="small-16 columns mbt">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              Box de notícias ESPORTES
             */
            require_once 'includes/box_esportes.php';
          ?>
          
          <div class="small-16 columns mbt show-for-small-only">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              Box de notícias BRASIL
             */
            require_once 'includes/box_brasil.php';
          ?>

          <figure class="large-5 medium-16 medium-text-center columns ads float mbt">
            <?php 
              if(function_exists( 'wp_bannerize' ))
                wp_bannerize( 'group=Banner Brasil (300 x 250)&no_html_wrap=1&random=1&limit=1' ); 
            ?>
          </figure><!-- //publicidade -->

        </div><!-- //the-content -->
        
        <div class="small-16 columns mbt hide-for-large-up">
          <div class="hl small-16 left"></div>
        </div><!-- //hl -->
          
        <?php
          /*
            Home SIDEBAR
           */
          get_sidebar( 'home' );
        ?>

      </div><!-- //row -->
    </section><!-- //wrapper -->

<?php get_footer(); ?>
