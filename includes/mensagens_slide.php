        <?php
          $msg = get_option('nt_msg');
          $datas = get_option('nt_msgloop');
          $term = get_term_by('name', $datas, 'datas');

          if($msg == 'Sim') {
            ?>
              <nav class="box-container small-16 left rel">
                <div class="small-16 columns mbt">
                  <header class="small-16 left box-header">
                    <h3 class="top-header left red">
                      <span class="icon-quote"></span> Mensagens <?php if($datas != '') echo '- '.$datas; ?>
                     </h3>
                  </header>
                </div>
                
                <div class="carousel">
                  <ul class="inline-list list-msg">
                    <?php
                      $args = array( 'term' => $term->slug , 'taxonomy' => 'datas', 'posts_per_page' => -1, 'orderby' => 'rand' ); 
                      $loop = new WP_Query( $args );
                      while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <li>
                      <figure>
                        <a href="<?php the_permalink(); ?>" class="display-block small-6 left th" title="<?php the_title(); ?>">
                          <?php
                            if(has_post_thumbnail()) {
                              the_post_thumbnail( 'cidades-thumb' );
                            } else {
                              echo '<img src="'. get_template_directory_uri() .'/images/no-thumb-politica.jpg">';
                            }
                          ?>
                        </a>
                        <figcaption class="ads-in-left small-10 left">
                          <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                        </figcaption>
                      </figure>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                  </ul>
                </div><!--//jcarousel -->

                <!-- controles carrossel -->
                <a href="#" title="Anterior" class="display-block abs next-msg button white radius"><span class="icon-arrow-left5"></span></a>
                <a href="#" title="Próximo" class="display-block abs prev-msg button white radius"><span class="icon-arrow-right5"></span></a>
              </nav>
            <?php
            }
          ?>