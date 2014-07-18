          <section class="small-16 medium-4 large-16 left medium-ads-left">
            <header class="widget-header small-16 left rel mbt">
              <h4 class="text-up red">Mais lidas</h4>
              <div class="block-red abs"></div>
            </header>

            <nav class="small-16 left mbt">
              <?php 
                  if (function_exists('wpp_get_mostpopular')) wpp_get_mostpopular(array(
                      "wpp_start" => '<ul class="no-bullet popular small-16 left">',
                      "wpp_end" => "</ul>",
                      "range" => "monthly",
                      "order_by"=> "views",
                      "limit" => 3,
                      "stats_views" => 0,
                      "stats_comments" => 0,
                      "post_type" => "post",
                      "post_html" => "<li><span class='display-tbc'><a href='{url}' title='{text_title}'>{text_title}</a></span></li>"
                  )); 
              ?>
            </nav>
          </section><!-- //Mais lidas -->