          <section class="small-16 medium-6 large-6 columns last-news mbt">
            <nav class="small-16 left nav-news">
              <header class="small-16 left box-header">
                <h4 class="text-up red top-header"><span class="icon-history"></span> Mais recentes</h4>
              </header>
              
              <ul class="no-bullet cycle-slideshow small-16 left"
                data-cycle-fx="scrollHorz"
                data-cycle-timeout="0"
                data-cycle-slides="> li"
                data-cycle-pager=".pag-news"
                data-cycle-pager-template="<a href='#'></a>"
                data-cycle-swipe="true"
                data-cycle-swipe-fx="scrollHorz"
              >
                <?php
                  $exclude = get_cat_ID( 'Destaques');       
                  query_posts('showposts=4&cat=-'.$exclude); 
                  if (have_posts()): while (have_posts()) : the_post();
                ?>
                <li class="small-16 left">
                  <small class="font-header tag red"><?php get_first_tag(); ?></small>
                  <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                  <p class="text-except show-for-medium-up"><?php get_excerpt(100); ?></p>
                  <p><a href="<?php the_permalink(); ?>#comments" title="" class="font-header color-body"><span class="icon-comment hack-icon"></span> <?php comments_number( 'Sem comentários', '1 comentário', '% comentários' ); ?></a></p>
                </li>
                <?php endwhile; else: endif; wp_reset_query(); ?>
              </ul>  
              <div class="pag-news bullets small-16 left text-center">
              </div>
            </nav>
          </section><!-- //Ultimas notícias -->