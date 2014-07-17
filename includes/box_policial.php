          <section class="small-16 medium-10 large-11 columns mbt mtp">
            <header class="small-16 left box-header">
              <h3 class="top-header left">
                <a href="<?php echo_url_category('Policial'); ?>" title="Policial" class="red text-up"><span class="icon-folder"></span> Policial</a>
              </h3>
              <h4>
                <a href="<?php echo_url_category('Policial'); ?>" class="see-more" title="Veja mais"><span class="right icon-list"></span></a>
              </h4>
            </header>
            
            <div class="box-td left small-16">
              <?php
                $exclude = get_cat_ID( 'Destaques');       
                query_posts('showposts=1&category_name=policial&cat=-'.$exclude); 
                if (have_posts()): while (have_posts()) : the_post();
              ?>
              <figure class="th small-4 left mbt">
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                  <?php
                    if(has_post_thumbnail()) {
                      the_post_thumbnail( 'policial-thumb' );
                    } else {
                      echo '<img src="'. get_template_directory_uri() .'/images/no-thumb-politica.jpg">';
                    }
                  ?>
                </a>
              </figure>

              <article class="small-12 left ads-in-left">
                <small class="font-header red tag"><?php get_first_tag(); ?></small>
                <h4><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                <p class="text-except show-for-large-up"><?php get_excerpt(5); ?></p>
                <p class="font-header"><a href="<?php the_permalink() ?>#comments" title="Comentários" class="color-body"><span class="icon-comment hack-icon"></span> <?php comments_number( 'Sem comentários', '1 comentário', '% comentários' ); ?></a></p>
              </article>
              <?php endwhile; else: endif; wp_reset_query(); ?>

              <article class="small-16 left box-list">
                <?php
                  $exclude = get_cat_ID( 'Destaques');       
                  query_posts('showposts=1&category_name=policial&offset=1&cat=-'.$exclude); 
                  if (have_posts()): while (have_posts()) : the_post();
                ?>
                <h5>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="font-header display-tb">
                    <span class="icon-text red display-tbc"></span>
                    <span class="pl display-tbc"><?php the_title(); ?></span>
                  </a>
                </h5>
                <?php endwhile; else: endif; wp_reset_query(); ?>
              </article> 
            </div>
          </section><!-- //box conteudo -->