          <section class="small-16 left">
            <header class="widget-header small-16 left rel mbt">
              <h4 class="text-up red"><span class="icon-plus"></span> Blog JFrança</h4>
              <div class="block-red abs"></div>
            </header>

            <nav class="small-16 left primary-list">
                    <?php
                      $args = array( 'post_type' => 'blog', 'posts_per_page' => 1, 'orderby' => 'date', 'post__not_in' => array($post->ID) ); 
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                      ?>
                      <article class="small-16 left box-list">
                        <h5>
                          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="font-header display-tb">
                            <span class="icon-text red display-tbc"></span>
                            <span class="pl display-tbc"><?php the_title(); ?></span>
                          </a>
                        </h5>
                      </article>
                    <?php endwhile; wp_reset_query(); ?>
            </nav>
          </section><!-- //Noticias na mesma categoria -->