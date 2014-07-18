          <section class="small-16 medium-10 large-16 left medium-ads-left mbt">
            <header class="widget-header small-16 left rel mbt">
              <h4 class="text-up red">Classificados</h4>
              <div class="block-red abs"></div>
            </header>

            <nav class="nav-ads small-16 left">
              <a href="#" title="" class="display-block small-16 left text-center next-ads"><span class="icon-arrow-up3"></span></a>
              <ul class="no-bullet ads-list small-16 left cycle-slideshow"
                data-cycle-pause-on-hover="true"
                data-cycle-speed="500"
                data-cycle-slides="> li"
                data-cycle-timeout="10000"
                data-cycle-swipe="true"
                data-cycle-swipe-fx="scrollHorz"
                data-cycle-prev=".prev-ads"
                data-cycle-next=".next-ads"
                data-cycle-fx="scrollVert"
              >
                <?php
                  $args = array( 'post_type' => 'classificados', 'taxonomy' => 'anuncios', 'posts_per_page' => 5, 'orderby' => 'date' ); 
                  $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <li>
                  <?php
                    if(has_post_thumbnail()) {
                      ?>
                        <figure class="small-16 columns">
                          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="ads-thumb left small-4 medium-3 large-5 left th">
                            <?php the_post_thumbnail( 'classificados-thumb' ); ?>
                          </a>
                          <figcaption class="small-12 medium-13 large-11 left ads-in-left">
                            <h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
                          </figcaption>
                        </figure>
                      <?php
                    } else {
                      ?>
                      <figure class="small-16 columns">
                          <figcaption class="small-16 left ads-in-left">
                            <h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
                          </figcaption>
                      </figure>
                      <?php
                    }
                  ?>
                </li>
                <?php endwhile; wp_reset_query(); ?>
              </ul>
              <a href="#" title="" class="display-block small-16 left text-center prev-ads"><span class="icon-arrow-down4"></span></a>
            </nav>
          </section><!-- //classificados -->