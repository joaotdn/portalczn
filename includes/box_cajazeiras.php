          <section class="small-16 medium-8 large-8 columns mbt">
            <header class="small-16 left box-header">
              <h3 class="top-header left">
                <a href="<?php echo_url_category('Cajazeiras'); ?>" title="Cajazeiras" class="red text-up"><span class="icon-folder"></span> Cajazeiras</a>
              </h3>
              <h4>
                <a href="<?php echo_url_category('Cajazeiras'); ?>" class="see-more" title="Veja mais"><span class="right icon-list"></span></a>
              </h4>
            </header>
            
            <?php
              $exclude = get_cat_ID( 'Destaques');       
              query_posts('showposts=1&category_name=cajazeiras&cat=-'.$exclude); 
              if (have_posts()): while (have_posts()) : the_post();
            ?>
            <figure class="small-5 medium-7 large-7 left box-thumb th mbt">
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

            <article class="small-11 medium-9 large-9 left ads-in-left box-td">
              <small class="font-header red tag"><?php get_first_tag(); ?></small>
              <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
              <p class="font-header"><a href="<?php the_permalink(); ?>" title="<?php comments_number( 'Sem comentários', '1 comentário', '% comentários' ); ?>" class="color-body"><span class="icon-comment hack-icon"></span> <?php comments_number( 'Sem comentários', '1 comentário', '% comentários' ); ?></a></p>
            </article>
            <?php endwhile; else: endif; wp_reset_query(); ?>
            
            <?php
              $exclude = get_cat_ID( 'Destaques');       
              query_posts('showposts=2&category_name=cajazeiras&offset=1&cat=-'.$exclude); 
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