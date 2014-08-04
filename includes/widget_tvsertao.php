          <?php
            $ativar = get_option('nt_tvds');
            if($ativar == 'Sim'):
          ?>
          <section class="medium-ads-left small-16 medium-6 large-16 left">
            <header class="widget-header small-16 left rel mbt">
              <h4 class="text-up red">Tv Diário do Sertão</h4>
              <div class="block-red abs"></div>
            </header>

            <div class="small-16 left">
              <?php
                $link = get_option('nt_htmltv');
                if($link != '') {
                  echo stripslashes($link);
                }
              ?>
            </div>
          </section><!-- //tv diario do sertão -->

          <div class="small-16 left mbt hide-for-medium">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->
         <?php endif; ?>