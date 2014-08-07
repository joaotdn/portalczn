<?php get_header(); ?>
        <div class="small-16 medium-16 large-12 left the-content">
          <div class="small-16 columns">
            <header class="box-header small-16 left mbt cat-title blog-top">
              <figure class="icon-jfranca left show-for-medium-up"></figure>
              <figure class="icon-jfranca-small left show-for-small-only"></figure>
              <h1 class="text-up red blog-title">Blog JFrança</h1><br>
              <h3 class="yellow blog-slogan"><?php echo get_option('nt_slogan'); ?></h3>
            </header>
          </div>
        
          <nav id="nav-posts" class="small-16 left">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="small-16 columns post mbt">
              <header class="small-16 left post-blog-header">
                <small class="small-16 left">Publicada em <?php the_time('d \d\e F \d\e Y') ?> - <?php the_time('G:i') ?></small><br>
                <h2 class="small-16 left"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
              </header>

              <figure class="small-16 left mbt rel post-blog">
                <a href="#" class="display-block small-16 left blog-thumb th">
                  <?php
                    if(has_post_thumbnail()) {
                      the_post_thumbnail( 'blog-thumb' );
                    }
                  ?>
                </a>

                <figcaption class="small-16 abs show-for-medium-up">
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php get_excerpt(5); ?></a>
                </figcaption>
              </figure>

              <div class="share-buttons small-16 left mbt">
                <div class="fb-share-button left" data-href="<?php the_permalink(); ?>" data-type="button_count"></div>
                <a href="<?php the_permalink(); ?>" class="twitter-share-button left" data-via="twitterapi" data-lang="en">Tweet</a>
                <a href="#comments" title="Comentários" class="color-body right font-header"><span class="icon-comment hack-icon"></span> <?php comments_number( 'Sem comentários', '1 comentário', '% comentários' ); ?></a>
              </div>
              <?php show_hl(); ?>
            </article>
          <?php endwhile; else: ?>
            <p class="small-16 columns"> <?php _e('Aguardem...'); ?> </p>
          <?php endif; ?>  
          </nav>
          
          <div class="small-16 columns">
            <div class="post-loader small-16 left text-center hide">
              <img src="<?php echo get_template_directory_uri(); ?>/ajax-loader.gif" alt="">
            </div>
            <button class="small-16 left text-upp radius secondary get-more-results" data-term="blog">Mais resultados</button>
          </div>
        </div><!-- //the-content -->
        

        <?php
          /*
            Home SIDEBAR
           */
          get_sidebar( 'blog' );
        ?>
      </div><!-- //row -->
    </section><!-- //wrapper -->

<?php get_footer(); ?>
