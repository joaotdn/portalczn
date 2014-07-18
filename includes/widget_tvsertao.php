          <?php
            $ativar = get_option('nt_tvds');
            if($ativar == 'Sim'):
          ?>
          <section class="medium-ads-left small-16 medium-6 large-16 left">
            <header class="widget-header small-16 left rel mbt">
              <h4 class="text-up red">Tv Diário do Sertão</h4>
              <div class="block-red abs"></div>
            </header>

            <figure class="small-16 left">
              <?php
                $link = get_option('nt_tvdslink');
              ?>
              <a href="<?php if($link) { echo $link; } else { echo '#'; } ?>" class="display-block small-8 medium-16 large-16 left mbt th click-tv" target="_blank">
                <?php $image = get_option('nt_tvdsimg'); if($image): ?>
                <img src="<?php echo $image; ?>" alt="">
                <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/tv.jpg" alt="">
                <?php endif; ?>
              </a>

              <figcaption class="small-8 medium-16 large-16 left mbt small-ads-left">
                <h4 class="no-mbt">
                  <a href="<?php if($link) { echo $link; } else { echo '#'; } ?>">
                  <?php $txt = get_option('nt_tvdstxt'); if($txt) { echo $txt; } ?>
                  </a>
                </h4>
              </figcaption>
            </figure>
          </section><!-- //tv diario do sertão -->

          <div class="small-16 left mbt hide-for-medium">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->
         <?php endif; ?>