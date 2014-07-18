<?php get_header(); ?>

        <div class="small-16 medium-16 large-12 left the-content">

          <?php
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

          <figure class="small-16 columns ads text-center show-for-medium-up">
            <a href="#">
              <img src="media/ads2.jpg" alt="">
            </a>
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

          <figure class="large-5 medium-6 columns ads show-for-medium-up mbt">
            <a href="#">
              <img src="media/ads3.jpg" alt="">
            </a>
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

          <figure class="small-16 columns ads text-center show-for-medium-up">
            <a href="#">
              <img src="media/ads4.jpg" alt="">
            </a>
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

          <figure class="large-5 medium-6 columns ads float show-for-large-up mbt">
            <a href="#">
              <img src="media/ads5.jpg" alt="">
            </a>
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
