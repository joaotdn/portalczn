<?php get_header(); ?>
        <div class="small-16 medium-16 large-12 left the-content">
          <div class="small-16 columns">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <header class="box-header small-16 left mbt cat-title">
              <h1 class="top-header left blue">
                <?php
                  if(is_page('fale-conosco')) {
                    echo '<span class="icon-mail hack-icon"></span> ';
                  } elseif (is_page('como-anunciar')) {
                    echo '<span class="icon-megaphone hack-icon"></span> ';
                  }
                ?>
                <?php the_title(); ?>
              </h1>
            </header>
            
             <?php
              if(is_page('fale-conosco') || is_page('como-anunciar')) {
                $contato = get_page_by_title('Fale conosco');
                ?>
                  <section class="small-16 medium-6 large-6 left mbt">
                    <?php
                      if(is_page('como-anunciar')):
                        echo '<p>Para anunciar no portal envie-no um email completando o formulario contendo a solicitação para anunciar e aguarde nossa resposta ou entre em contato através dos dados seguintes:</p>';
                      endif;
                    ?>
                    <hgroup>
                      <?php
                        $email = get_field('czn_email',$contato->ID);
                        $facebook = get_field('czn_facebook',$contato->ID);
                        $twitter = get_field('czn_twitter',$contato->ID);
                        $endereco = get_field('czn_endereco',$contato->ID);
                        $telefone = get_field('czn_telefone',$contato->ID);
                        if($email) {
                          echo '<h3 class="red"><span class="icon-mail"></span> E-mail de contato</h1>';
                          echo '<h5>'. $email .'</h5>';
                        }

                        if($facebook) {
                          echo '<h3 class="red"><span class="icon-facebook2"></span> Facebook</h1>';
                          echo '<h5><a href="'. $facebook .'" target="_blank">'. $facebook .'</a></h5>';
                        }

                        if($twitter) {
                          echo '<h3 class="red"><span class="icon-twitter2"></span> Twitter</h1>';
                          echo '<h5><a href="'. $twitter .'" target="_blank">'. $twitter .'</a></h5>';
                        }

                        if($telefone) {
                          echo '<h3 class="red"><span class="icon-phone"></span> Telefone</h1>';
                          echo '<h5>'. $telefone .'</h5>';
                        }

                        if($endereco) {
                          echo '<h3 class="red"><span class="icon-location"></span> Endereço</h1>';
                          echo '<h5>'. $endereco .'</h5>';
                        }
                      ?>
                    </hgroup>
                  </section>
                  <section class="small-16 medium-10 large-10 left ads-in-left">
                <?php
                  echo do_shortcode('[contact-form-7 id="21671" title="Formulário de contato 1"]');
                ?>
                  </section>
                <?php
              } else {
                the_content();
              }
            ?>
            
            <?php endwhile; else: ?>
              <p><?php _e('Página não encontrada.'); ?> </p>
            <?php endif; ?>
          </div>
 
        </div><!-- //the-content -->      

        <?php
          /*
            Home SIDEBAR
           */
          get_sidebar( 'home' );
        ?>
      </div><!-- //row -->
    </section><!-- //wrapper -->

<?php get_footer(); ?>
