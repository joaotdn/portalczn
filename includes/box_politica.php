          <section class="box-container small-16 left">
            <div class="small-16 columns">
              <header class="box-header small-16 left">
                <h3 class="top-header left"><a href="<?php echo_url_category('Politica'); ?>" title="Política" class="red text-up"><span class="icon-folder"></span> Política</a></h3>
                <h4>
                  <a href="<?php echo_url_category('Politica'); ?>" class="see-more" title="Veja mais"><span class="right icon-list"></span></a>
                </h4>
              </header>
            </div>
            
            <?php
              $exclude = get_cat_ID( 'Destaques');       
              query_posts('showposts=2&category_name=politica&cat=-'.$exclude); 
              if (have_posts()): while (have_posts()) : the_post();
            ?>
            <div class="small-16 medium-8 large-8 columns box-td">
              <figure class="small-5 medium-5 large-7 left th mbt">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php
                    if(has_post_thumbnail()) {
                      the_post_thumbnail( 'politica-thumb' );
                    } else {
                      echo '<img src="'. get_template_directory_uri() .'/images/no-thumb-politica.jpg">';
                    }
                  ?>
                </a>
              </figure>

              <article class="small-11 medium-11 large-9 left ads-in-left">
                <small class="font-header red tag"><?php get_first_tag(); ?></small>
                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                <p class="text-except show-for-medium-only"><?php get_excerpt(5); ?></p>
                <p><a href="<?php the_permalink(); ?>#comments" title="<?php the_title(); ?>" class="color-body font-header"><span class="icon-comment hack-icon"></span> <?php comments_number( 'Sem comentários', '1 comentário', '% comentários' ); ?></a></p>
              </article>
            </div>
            <?php endwhile; else: endif; wp_reset_query(); ?>
          </section><!-- //box conteudo -->