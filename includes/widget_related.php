          <section class="small-16 left">
            <header class="widget-header small-16 left rel mbt">
              <h4 class="text-up red"><span class="icon-plus"></span> <?php get_first_category_name(); ?></h4>
              <div class="block-red abs"></div>
            </header>

            <nav class="small-16 left primary-list">
              <?php
                $categories = get_the_category($post->ID);
                if ($categories) {
                  $category_ids = array();
                  foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                    $args=array(
                      'category__in' => $category_ids,
                      'post__not_in' => array($post->ID),
                      'showposts'=> 6, // Number of related posts that will be shown.
                      'caller_get_posts'=>1
                    );
                    $my_query = new wp_query($args);
                    if( $my_query->have_posts() ) {
                      while ($my_query->have_posts()) {
                        $my_query->the_post();
                    ?>
                      <article class="small-16 left box-list">
                        <h5>
                          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="font-header display-tb">
                            <span class="icon-text red display-tbc"></span>
                            <span class="pl display-tbc"><?php the_title(); ?></span>
                          </a>
                        </h5>
                      </article>
                    <?php
                    }
                    }
                  } 
              ?>
            </nav>
          </section><!-- //Noticias na mesma categoria -->