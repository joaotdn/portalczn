          <section class="gallery-box small-16 medium-6 large-6 columns mbt">
            <header class="small-16 left box-header">
              <h3 class="top-header left">
                <a href="<?php echo_url_category('Fotos'); ?>" title="Fotos" class="red text-up"><span class="icon-pictures"></span> Fotos</a>
              </h3>
              <h4>
                <a href="<?php echo_url_category('Fotos'); ?>" class="see-more" title="Veja mais"><span class="right icon-list"></span></a>
              </h4>
            </header>

            <nav class="small-16 left list-fotos cycle-slideshow"
              data-cycle-fx="scrollHorz"
              data-cycle-swipe="true"
              data-cycle-swipe-fx="scrollHorz"
              data-cycle-timeout="8000"
              data-cycle-slides="> figure"
              data-cycle-pager=".pag-fotos"
              data-cycle-pager-template="<a href='#'></a>"
            >
            <?php       
              query_posts('showposts=3&category_name=fotos'); 
              if (have_posts()): while (have_posts()) : the_post();
            ?>
              <figure class="small-16 left foto-thumb">
                <a href="<?php the_permalink(); ?>" class="display-block small-7 medium-16 large-16 left th" title="<?php the_title() ?>">
                  <?php
                    if(has_post_thumbnail()) {
                      the_post_thumbnail( 'fotos-thumb' );
                    } else {
                      echo '<img src="'. get_template_directory_uri() .'/images/no-thumb-fotos.jpg">';
                    }
                  ?>
                </a>

                <figcaption class="small-9 medium-16 large-16 left small-ads-left box-td">
                  <h4><a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h4>
                </figcaption>
              </figure>
            <?php endwhile; else: endif; wp_reset_query(); ?>
            </nav>

            <div class="pag-fotos bullets small-16 left text-center box-td">
            </div>
          </section><!-- //fotos -->