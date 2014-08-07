<?php get_header(); ?>
      </div><!-- //row -->

      <figure class="small-16 left last-video">
        <figcaption class="small-16 left">
          <div class="row">
            <h4 class="small-16 columns video-title"><?php the_title(); ?></h4>
          </div>
        </figcaption>

        <div class="ajax-loader small-16 left text-center hide">
          <img src="<?php echo get_template_directory_uri(); ?>/ajax-loader.gif" alt="">
        </div>
        <?php      
          query_posts('showposts=1&category_name=videos'); 
          if (have_posts()): while (have_posts()) : the_post();

          global $post;
        ?>
        <div class="row">
          <div class="small-16 large-12 medium-12 medium-push-2 large-push-2 columns video-object">
            <?php
              $video = get_field('czn_video',$post->ID);
              echo $video;
            ?>
          </div>
        </div><!-- //row -->
        <?php endwhile; else: endif; wp_reset_query(); ?>
      </figure><!-- //Ultimo video -->

      <div class="row">
        <div class="small-16 medium-16 large-12 left the-content">
          <div class="small-16 columns">
            <header class="box-header small-16 left mbt cat-title">
              <h1 class="top-header left blue"><span class="icon-folder"></span> <?php echo single_cat_title( '', false ); ?></h1>
            </header>
          </div>
        
          <nav id="nav-posts" class="small-16 left">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="small-8 medium-4 large-4 columns post post-video mbt">
              <figure class="small-16 left">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="display-block small-16 left th mbt cat-thumb" data-postid="<?php echo $post->ID; ?>">
                  <?php
                    if(has_post_thumbnail()) {
                      the_post_thumbnail( 'politica-thumb' );
                    }
                  ?>
                </a>

                <figcaption class="small-16 left">
                  <small class="font-header red tag"><?php get_first_tag(); ?></small>
                  <h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" data-postid="<?php echo $post->ID; ?>"><?php the_title(); ?></a></h5>
                </figcaption>
              </figure>
              <?php show_hl(); ?>
            </article>
          <?php endwhile; else: ?>
            <p> <?php _e('Este post não foi encontrado.'); ?> </p>
          <?php endif; ?>  
          </nav>
          
          <div class="small-16 columns">
            <div class="post-loader small-16 left text-center hide">
              <img src="<?php echo get_template_directory_uri(); ?>/ajax-loader.gif" alt="">
            </div>
            <button class="small-16 left text-upp radius secondary get-more-results" data-category="videos">Mais resultados</button>
          </div>
        </div><!-- //the-content -->
        <?php
          /*
            Home SIDEBAR
           */
          get_sidebar( 'videos' );
        ?>
      </div><!-- //row -->
    </section><!-- //wrapper -->

<?php get_footer(); ?>
