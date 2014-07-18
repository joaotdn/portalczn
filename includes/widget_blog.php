          <section class="small-16 medium-6 large-16 left">
            <figure class="small-3 medium-4 large-5 left mbt th">
              <a href="<?php echo get_post_type_archive_link('blog'); ?>" title="Blog J.França">
                <img src="<?php echo get_template_directory_uri(); ?>/images/franca.jpg" alt="">
              </a>
            </figure>

            <article class="small-13 medium-12 large-11 left ads-in-left">
              <header class="small-16 left blog-header">
                <h4 class="text-up large-text-center"><a href="<?php echo get_post_type_archive_link('blog'); ?>" title="Blog J.França">Blog J. França</a></h4>
              </header>
              <?php
                $args = array( 'post_type' => 'blog', 'posts_per_page' => 1, 'orderby' => 'date' ); 
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
              ?>
              <p class="large-text-center box-td left"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="color-body"><?php the_title(); ?></a></p>
              <?php endwhile; wp_reset_query(); ?>
            </article>

            <div class="small-16 left mbt">
              <div class="hl small-16 left"></div>
            </div><!-- //hl -->

            <figure class="small-16 left show-for-medium-up mbt">
              <a href="#">
                <img src="media/ads6.jpg" alt="">
              </a>
            </figure><!-- //publicidade -->

          </section><!-- //Ultimas do Blog -->