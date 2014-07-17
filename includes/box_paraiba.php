          <section class="small-16 medium-8 large-8 columns box-in-list">
            <header class="small-16 left box-header">
              <h3 class="top-header left">
                <a href="<?php echo_url_category('Paraiba'); ?>" title="Paraíba" class="red text-up"><span class="icon-folder"></span> Paraíba</a>
              </h3>
              <h4>
                <a href="<?php echo_url_category('Paraiba'); ?>" class="see-more" title="Veja mais"><span class="right icon-list"></span></a>
              </h4>
            </header>
            
            <?php
              $exclude = get_cat_ID( 'Destaques');       
              query_posts('showposts=2&category_name=paraiba&cat=-'.$exclude); 
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
                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                <p class="font-header"><a href="<?php the_permalink(); ?>#comments" title="<?php comments_number( 'Sem comentários', '1 comentário', '% comentários' ); ?>" class="color-body"><span class="icon-comment hack-icon"></span> <?php comments_number( 'Sem comentários', '1 comentário', '% comentários' ); ?></a></p>
              </figcaption>
            </figure>
            <?php endwhile; else: endif; wp_reset_query(); ?>

          </section><!-- //box conteudo -->