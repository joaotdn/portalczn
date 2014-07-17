          <section class="small-16 medium-8 large-5 columns">
            <header class="small-16 left box-header">
              <h3 class="top-header left">
                <a href="<?php echo_url_category('Brasil'); ?>" title="Brasil" class="red text-up"><span class="icon-folder"></span> Brasil</a>
              </h3>
              <h4>
                <a href="<?php echo_url_category('Brasil'); ?>" class="see-more" title="Veja mais"><span class="right icon-list"></span></a>
              </h4>
            </header>
            
            <?php
              $exclude = get_cat_ID( 'Destaques');       
              query_posts('showposts=1&category_name=brasil&cat=-'.$exclude); 
              if (have_posts()): while (have_posts()) : the_post();
            ?>
            <figure class="small-16 left box-thumb">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="display-block small-3 medium-6 large-5 left th mbt">
                <?php
                  if(has_post_thumbnail()) {
                    the_post_thumbnail( 'cidades-thumb' );
                  } else {
                    echo '<img src="'. get_template_directory_uri() .'/images/no-thumb-politica.jpg">';
                  }
                ?>
              </a>

              <figcaption class="small-13 medium-10 large-11 left ads-in-left">
                <small class="font-header red tag"><?php get_first_tag(); ?></small>
                <h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
              </figcaption>
            </figure>
            <?php endwhile; else: endif; wp_reset_query(); ?>
            
            <?php
              $exclude = get_cat_ID( 'Destaques');       
              query_posts('showposts=1&category_name=brasil&offset=1&cat=-'.$exclude); 
              if (have_posts()): while (have_posts()) : the_post();
            ?>
            <article class="small-16 left box-list">
              <h5>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="font-header display-tb">
                  <span class="icon-text red display-tbc"></span>
                  <span class="pl display-tbc"><?php the_title(); ?></span>
                </a>
              </h5>
            </article>
            <?php endwhile; else: endif; wp_reset_query(); ?>

          </section><!-- //box conteudo -->