<?php get_header(); ?>
        <div class="small-16 medium-16 large-12 left the-content">
          <div class="small-16 columns">
            <header class="box-header small-16 left mbt cat-title">
              <h1 class="top-header left blue"><span class="icon-search"></span> <?php printf( __( 'Resultados para: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </header>
          </div>


        </div><!-- //the-content -->
        

        <?php
          /*
            Home SIDEBAR
           */
          get_sidebar( 'home' );
        ?>
      </div><!-- //row -->
    </section><!-- //wrapper -->

<?php get_footer(); ?>
