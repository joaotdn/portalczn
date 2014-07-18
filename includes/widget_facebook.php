		<?php $fb = get_option('nt_fb'); if($fb != ''): ?>
		<section class="small-16 left">
            <header class="widget-header small-16 left rel mbt">
              <h4 class="text-up red">Encontre-nos no Facebook</h4>
              <div class="block-red abs"></div>
            </header>
            <div class="fb-like-box" data-href="<?php echo $fb; ?>" data-width="300" data-height="300" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
        </section><!-- //facebook -->

        <div class="small-16 left mbt show-for-large-up clearfix">
            <div class="hl small-16 left"></div>
        </div><!-- //hl -->
        <?php endif; ?>