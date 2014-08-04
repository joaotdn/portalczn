          <section class="small-16 left">
            <header class="widget-header small-16 left rel mbt">
              <h4 class="text-up red"><span class="icon-plus"></span> Outras mensagens</h4>
              <div class="block-red abs"></div>
            </header>

            <nav class="small-16 left primary-list mbt">
                    <?php
                        $args = array( 'post_type' => 'mensagens', 'posts_per_page' => 8, 'orderby' => 'date', 'post__not_in' => array($post->ID) ); 
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
            <?php $contato = get_page_by_title('Fale conosco'); ?>
            <a href="<?php echo $contato->ID; ?>" title="Envie sua mensagem" class="button radius small-16 left">Envie sua mensagem</a>
          </section><!-- //Noticias na mesma categoria -->