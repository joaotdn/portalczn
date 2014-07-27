          <section class="small-16 left show-for-large-up">
            <header class="widget-header small-16 left rel mbt">
              <h4 class="text-up red">Rádios on-line</h4>
              <div class="block-red abs"></div>
            </header>

            <a href="#" data-options="align:top" data-dropdown="drop" class="button small-16 left radius">Selecionar Rádio</a>
            <ul id="drop" class="small f-dropdown list-radios" data-dropdown-content>
              <?php
                $args = array( 'post_type' => 'radios', 'posts_per_page' => -1, 'orderby' => 'name' ); 
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                $stream = get_field('radio_stream');
              ?>
              <li><a href="#" data-stream="<?php echo $stream; ?>" title="<?php the_title(); ?>"><span class="icon-sound"></span> <?php the_title(); ?></a></li>
              <?php endwhile; wp_reset_query(); ?>
            </ul>
          </section>