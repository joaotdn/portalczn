<?php get_header(); ?>
        <div class="small-16 medium-16 large-12 left the-content">
          <div class="small-16 columns">
            <header class="box-header small-16 left mbt cat-title">
              <h1 class="top-header left blue"><span class="icon-search"></span> <?php printf( __( 'Resultados para: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
              <h2 class="right">
                <a href="#" class="see-more left in-list" title="Lista"><span class="right icon-list2"></span></a>
                <a href="#" class="see-more left in-grid" title="Grade"><span class="right icon-layout"></span></a>
              </h2>
            </header>
          </div>
        
          <nav id="nav-posts" class="small-16 left">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="small-16 columns post mbt">
              <figure class="small-16 left">
                <figcaption class="small-16 left">
                  <small class="small-16 left mbt">Publicada em <?php the_time('d \d\e F \d\e Y') ?> - <?php the_time('G:i') ?></small><br>
                  <small class="font-header red tag"><?php get_first_tag(); ?></small>
                  <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                  <p class="text-except show-for-medium-only"><?php get_excerpt(5); ?></p>
                  <p><a href="<?php the_permalink(); ?>#comments" title="<?php the_title(); ?>" class="color-body font-header"><span class="icon-comment hack-icon"></span> <?php comments_number( 'Sem comentários', '1 comentário', '% comentários' ); ?></a></p>
                </figcaption>
              </figure>
            </article>
          <?php endwhile; else: ?>
            <p> <?php _e('Este post não foi encontrado.'); ?> </p>
          <?php endif; ?>  
          </nav>
          
          <div class="small-16 columns">
            <div class="post-loader small-16 left text-center hide">
              <img src="<?php echo get_template_directory_uri(); ?>/ajax-loader.gif" alt="">
            </div>
            <?php
              $numposts = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_status = 'publish'");
              if (0 < $numposts) $numposts = number_format($numposts); 
            ?>
            <button class="small-16 left text-upp radius secondary get-more-results" data-keyword="<?php echo get_search_query(); ?>" data-count="<?php echo $numposts; ?>">Mais resultados</button>
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
