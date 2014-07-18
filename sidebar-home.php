        <?php
          /**
           * Barra lateral da página principal
           * Última alteração: 18 de julho de 2014
           */
        ?>
        <aside id="sidebar" class="small-16 medium-16 large-4 columns">

          <?php
            /*
              Últimas postagens do BLOG
             */
            require_once ( get_stylesheet_directory() . '/includes/widget_blog.php' );
          ?>
          
          <div class="small-16 left mbt show-for-large-up">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              TV Diario do Sertao
             */
            require_once ( get_stylesheet_directory() . '/includes/widget_tvsertao.php' );
          ?>

          <?php
            /*
              Mais lidas
             */
            require_once ( get_stylesheet_directory() . '/includes/widget_popular.php' );
          ?>

          <div class="small-16 left mbt">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <figure class="medium-6 large-16 left show-for-medium-up mbt">
            <a href="#">
              <img src="media/ads7.jpg" alt="">
            </a>
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