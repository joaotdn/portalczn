          <section class="videos small-16 medium-10 large-10 columns mbt">
            <header class="small-16 left box-header">
              <h3 class="top-header left">
                <a href="<?php echo_url_category('Videos'); ?>" title="Vídeos" class="red text-up"><span class="icon-video"></span> Vídeos</a>
              </h3>
              <h4>
                <a href="<?php echo_url_category('Videos'); ?>" class="see-more" title="Veja mais"><span class="right icon-list"></span></a>
              </h4>
            </header>

            <div class="video-list small-16 left box-td">
              <nav class="pag-videos small-3 left">
              </nav>

              <nav class="slide-video small-13 left cycle-slideshow"
                data-cycle-fx="scrollHorz"
                data-cycle-timeout="0"
                data-cycle-slides="> figure"
                data-cycle-pager=".pag-videos"
                data-cycle-pager-template='<a href="#" class="display-tb small-16 left text-center"><h4 class="display-tbc font-header red">{{slideNum}}</h4></a>'
                data-cycle-swipe="true"
                data-cycle-swipe-fx="scrollHorz"
              >
                <?php      
                  query_posts('showposts=3&category_name=videos'); 
                  if (have_posts()): while (have_posts()) : the_post();

                  global $post;
                ?>
                <figure class="small-16 left rel video-thumb" data-reveal-id="video-modal" data-postid="<?php echo $post->ID; ?>">
                  <a href="#" class="display-block left small-16" title="<?php the_title(); ?>">
                    <?php
                      if(has_post_thumbnail()) {
                        the_post_thumbnail( 'videos-thumb' );
                      } else {
                        echo '<img src="'. get_template_directory_uri() .'/images/no-thumb-videos.jpg">';
                      }
                    ?>
                  </a>

                  <figcaption class="small-16 abs">
                    <div class="abs play-video small-16">
                      <h5 class="red display-tb no-mbt"><span class="icon-play display-tbc no"></span> Assistir</h4>
                      <h4 class="white columns"><?php the_title(); ?></h3>
                    </div>
                  </figcaption>
                </figure>
                <?php endwhile; else: endif; wp_reset_query(); ?>
              </nav>
            </div>
          </section><!-- //videos -->