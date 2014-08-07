<?php

add_action( 'wp_ajax_nopriv_get_more_results', 'get_more_results' );
add_action( 'wp_ajax_get_more_results', 'get_more_results' );

function get_more_results() {
    $offset = $_GET['offset'];
    $keyword = $_GET['keyword'];
    $category = $_GET['category'];
    $term = $_GET['term'];

    if(isset($keyword)) {

    	$query = new WP_Query('s='.$keyword.'&offset='.$offset.'&orderby=date&posts_per_page=4');
    	while ( $query->have_posts() ) {
		$query->the_post();
    	?>
		<article class="small-16 columns post mbt">
          <figure class="small-16 left">
            <figcaption class="small-16 left">
              <small class="small-16 left mbt">Publicada em <?php the_time('d \d\e F \d\e Y') ?> - <?php the_time('G:i') ?></small><br>
              <small class="font-header red tag"><?php get_first_tag(); ?></small>
              <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
              <p class="text-except show-for-medium-only"><?php get_excerpt(5); ?></p>
              <p><a href="<?php the_permalink(); ?>#comments" title="<?php the_title(); ?>" class="color-body font-header"><span class="icon-comment hack-icon"></span> <?php comments_number( 'Sem comentários', '1 comentário', '% comentários' ); ?></a></p>
            </figcaption>
          </figure>
          <?php show_hl(); ?>
        </article>
    	<?php
    	} wp_reset_postdata();

    } 

    elseif(isset($category)) {

    	$query = new WP_Query('orderby=date&posts_per_page=4&category_name='.$category.'&offset='.$offset);
    	while ( $query->have_posts() ) {
		$query->the_post();
			?>
			<article class="small-16 columns post mbt">
              <figure class="small-16 left">
                <a href="<?php the_permalink(); ?>" title="" class="display-block small-6 left th mbt cat-thumb">
                  <?php
                    if(has_post_thumbnail()) {
                      the_post_thumbnail( 'category-thumb' );
                    } else {
                      echo '<img src="'. get_template_directory_uri() .'/images/no-thumb-category.jpg">';
                    }
                  ?>
                </a>

                <figcaption class="small-10 left small-ads-left ads-in-left">
                  <small class="small-16 left mbt">Publicada em <?php the_time('d \d\e F \d\e Y') ?> - <?php the_time('G:i') ?></small><br>
                  <small class="font-header red tag"><?php get_first_tag(); ?></small>
                  <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                  <p class="text-except show-for-medium-up"><?php get_excerpt(5); ?></p>
                  <p><a href="<?php the_permalink(); ?>#comments" title="<?php the_title(); ?>" class="color-body font-header"><span class="icon-comment hack-icon"></span> <?php comments_number( 'Sem comentários', '1 comentário', '% comentários' ); ?></a></p>
                </figcaption>
              </figure>
              <?php show_hl(); ?>
            </article>
			<?php
			} wp_reset_postdata();
    } 

    elseif (isset($term)) {

    	$query = new WP_Query('orderby=date&posts_per_page=4&post_type='.$term.'&offset='.$offset);
    	while ( $query->have_posts() ) {
		$query->the_post();
    	?>
		<article class="small-16 columns post mbt">
              <header class="small-16 left post-blog-header">
                <small class="small-16 left">Publicada em <?php the_time('d \d\e F \d\e Y') ?> - <?php the_time('G:i') ?></small><br>
                <h2 class="small-16 left"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
              </header>

              <figure class="small-16 left mbt rel post-blog">
                <a href="#" class="display-block small-16 left blog-thumb th">
                  <?php
                    if(has_post_thumbnail()) {
                      the_post_thumbnail( 'blog-thumb' );
                    }
                  ?>
                </a>

                <figcaption class="small-16 abs show-for-medium-up">
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php get_excerpt(5); ?></a>
                </figcaption>
              </figure>

              <div class="share-buttons small-16 left mbt">
                <div class="fb-share-button left" data-href="<?php the_permalink(); ?>" data-type="button_count"></div>
                <a href="<?php the_permalink(); ?>" class="twitter-share-button left" data-via="twitterapi" data-lang="en">Tweet</a>
                <a href="#comments" title="Comentários" class="color-body right font-header"><span class="icon-comment hack-icon"></span> <?php comments_number( 'Sem comentários', '1 comentário', '% comentários' ); ?></a>
              </div>
              <?php show_hl(); ?>
        </article>
    	<?php
    	} wp_reset_postdata();

    } else {

    	echo "<h2>Sem resultados. Tente novamente.</h2>";
    	exit();

    }

    exit();
}

?>