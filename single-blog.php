<?php get_header(); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="small-16 medium-16 large-12 left the-content">
          <div class="small-16 columns">
            <header class="box-header small-16 left mbt cat-title blog-top-single">
              <figure class="icon-jfranca-small left"></figure>
              <h1 class="text-up red blog-title-single"><a href="<?php echo get_post_type_archive_link('blog'); ?>" title="Blog JFrança" class="red">Blog JFrança</a></h1><br>
              <h3 class="yellow blog-slogan-single"><?php echo get_option('nt_slogan'); ?></h3>
            </header>
          </div>

          <article class="post-content small-16 columns">
            <header class="small-16 left post-header">
              <small>Publicada em <?php the_time('d \d\e F \d\e Y') ?> - <?php the_time('G:i') ?></small>
              <h1><?php the_title(); ?></h1>
              
              <div class="small-16 show-for-medium-up">
                <div class="hl small-16 left"></div>
              </div><!-- //hl -->
              <h5 class="grey font-body"><?php the_excerpt(); ?></h5>
              <div class="share-buttons small-16 left">
                <div class="fb-share-button left" data-href="<?php the_permalink(); ?>" data-type="button_count"></div>
                <a href="<?php the_permalink(); ?>" class="twitter-share-button left" data-via="twitterapi" data-lang="en">Tweet</a>
                <a href="#comments" title="Comentários" class="color-body right font-header"><span class="icon-comment hack-icon"></span> <?php comments_number( 'Sem comentários', '1 comentário', '% comentários' ); ?></a>
              </div>
            </header>

            <?php
              //Se o post tiver video
              global $post;
              $video = get_field('czn_video',$post->ID);
              if($video != '') {
                ?>
                <div class="small-16 left">
                  <figure class="flex-video"><?php echo $video; ?></figure>
                </div>
                <?php
              }
            ?>
              
            <?php the_content(); ?>
          </article>

          <section class="mbt small-16 columns last-news-single rel">
            <header class="widget-header small-16 columns rel mbt">
              <h4 class="text-up red">Primeira página</h4>
              <div class="block-red abs"></div>
            </header>
            
            <nav class="small-16 left">
            <?php     
              query_posts('showposts=4'); 
              if (have_posts()): while (have_posts()) : the_post();
            ?>
              <article class="small-16 medium-4 large-4 columns">
                <small class="font-header red tag"><?php get_first_tag(); ?></small>
                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
              </article>
            <?php endwhile; else: endif; wp_reset_query(); ?>
            </nav>
          </section><!-- //ultimas noticias -->

          <nav id="comments" class="small-16 columns end">
            <?php comments_template( '/comments.php', true ); ?>
          </nav>
        </div><!-- //the-content -->
        <?php endwhile; else: ?>
          <p> <?php _e('Este post não foi encontrado.'); ?> </p>
        <?php endif; ?>

        <?php
          /*
            Home SIDEBAR
           */
          get_sidebar( 'blogpost' );
        ?>
      </div><!-- //row -->
    </section><!-- //wrapper -->

<?php get_footer(); ?>
