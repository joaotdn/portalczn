          <section class="small-16 medium-10 large-10 columns home-slide mbt">
            <nav class="slide-thumbs small-3 left show-for-large-up">
              <ul class="no-bullet pag-slide">
                <?php       
                  query_posts('showposts=4&category_name=destaques'); 
                  if (have_posts()): while (have_posts()) : the_post();
                ?>
                <li class="cycle-pager-active">
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php
                      if(has_post_thumbnail()) {
                          the_post_thumbnail( 'slide-small-thumb' );
                      }
                    ?>
                  </a>
                </li>
                <?php endwhile; else: endif; wp_reset_query(); ?>
              </ul>
            </nav>

            <nav class="slide-content small-16 large-13 left rel">
              <div id="progress"></div>
              <div class="nav-slides small-16 abs hide-for-large-up">
                <a href="#" class="display-block prev-slide left"><span class="icon-arrow-left7"></span></a>  
                <a href="#" class="display-block next-slide right"><span class="icon-uniE6D9"></span></a>  
              </div>
              <ul class="no-bullet cycle-slideshow main-slideshow"
                data-cycle-pause-on-hover="true"
                data-cycle-speed="500"
                data-cycle-slides="> li"
                data-cycle-timeout="8000"
                data-cycle-pager=".pag-slide"
                data-cycle-pager-template=""
                data-cycle-pager-event="mouseover"
                data-cycle-swipe="true"
                data-cycle-swipe-fx="scrollHorz"
                data-cycle-prev=".prev-slide"
                data-cycle-next=".next-slide"
              >
                <?php       
                  query_posts('showposts=4&category_name=destaques'); 
                  if (have_posts()): while (have_posts()) : the_post();
                ?>
                <li>
                  <figure class="small-16 left">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="trs slide-img">
                      <?php
                        if(has_post_thumbnail()) {
                          the_post_thumbnail( 'slide-thumb' );
                        }
                      ?>
                    </a>

                    <figcaption class="abs small-16 columns">
                      <h5 class="small-16">
                        <span class="left yellow"><?php get_first_tag(); ?></span>
                        <span class="right">
                          <a href="<?php the_permalink(); ?>#comments" class="icon-comment white display-block has-tip tip-bottom radius" title="<?php comments_number( 'Ninguém comentou', '1 comentário', '% comentários' ); ?>" data-tooltip data-options="disable_for_touch:true"></a>
                        </span>
                      </h5>

                      <h3 class="small-16 left"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="white"><?php the_title(); ?></a></h3>
                    </figcaption>
                  </figure>
                </li>
                <?php endwhile; else: endif; wp_reset_query(); ?>
              </ul>
            </nav>
          </section><!--//slide principal -->