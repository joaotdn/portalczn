<?php get_header(); ?>

        <div class="small-16 medium-16 large-12 left the-content">

          <?php
            /*
              Slide principal da categoria DESTAQUES
             */
            include_once 'includes/main_slide.php';

            /*
              Últimas NOTÍCIAS
             */
            include_once 'includes/last_news.php';
          ?>
          
          <div class="small-16 columns show-for-medium-up">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <figure class="small-16 columns ads text-center show-for-medium-up">
            <a href="#">
              <img src="media/ads2.jpg" alt="">
            </a>
          </figure><!-- //publicidade -->
          
          <div class="small-16 columns mbt">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->
          
          <?php
            /*
              Box de notícias POLÍTICA
             */
            include_once 'includes/box_politica.php';
          ?>
          
          <div class="small-16 columns">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <figure class="large-5 medium-6 columns ads show-for-medium-up mbt">
            <a href="#">
              <img src="media/ads3.jpg" alt="">
            </a>
          </figure><!-- //publicidade -->

          <?php
            /*
              Box de notícias POLICIAL
             */
            include_once 'includes/box_policial.php';
          ?>
          
          <div class="small-16 columns mbt">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              Box de noticias CAJAZEIRAS
             */
            include_once 'includes/box_cajazeiras.php';
          ?>
                
          <div class="small-16 columns mbt show-for-small-only">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              Box de notícias CIDADES
             */
            include_once 'includes/box_paraiba.php';
          ?>
          
          <div class="small-16 columns show-for-medium-up">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <figure class="small-16 columns ads text-center show-for-medium-up">
            <a href="#">
              <img src="media/ads4.jpg" alt="">
            </a>
          </figure><!-- //publicidade -->
          
          <div class="small-16 columns mbt">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              Slide de VÍDEOS
             */
            include_once 'includes/videos_slide.php';
          ?>
          
          <div class="small-16 columns mbt show-for-small-only">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              Slide de FOTOS
             */
            include_once 'includes/fotos_slide.php';
          ?>
          
          <div class="small-16 columns mbt">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              Box de notícias ESPORTES
             */
            require_once 'includes/box_esportes.php';
          ?>
          
          <div class="small-16 columns mbt show-for-small-only">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <?php
            /*
              Box de notícias BRASIL
             */
            require_once 'includes/box_brasil.php';
          ?>

          <figure class="large-5 medium-6 columns ads float show-for-large-up mbt">
            <a href="#">
              <img src="media/ads5.jpg" alt="">
            </a>
          </figure><!-- //publicidade -->

        </div><!-- //the-content -->
        
        <div class="small-16 columns mbt hide-for-large-up">
          <div class="hl small-16 left"></div>
        </div><!-- //hl -->
          
        <aside id="sidebar" class="small-16 medium-16 large-4 columns">

          <section class="small-16 medium-6 large-16 left">
            <figure class="small-3 medium-4 large-5 left mbt th">
              <a href="#" title="">
                <img src="media/franca.jpg" alt="">
              </a>
            </figure>

            <article class="small-13 medium-12 large-11 left ads-in-left">
              <header class="small-16 left blog-header">
                <h4 class="text-up large-text-center"><a href="#" title="">Blog J. França</a></h4>
              </header>
              <p class="large-text-center box-td left"><a href="#" title="" class="color-body">Lorem ipsum dolor sit amet</a></p>
            </article>

            <div class="small-16 left mbt">
              <div class="hl small-16 left"></div>
            </div><!-- //hl -->

            <figure class="small-16 left show-for-medium-up mbt">
              <a href="#">
                <img src="media/ads6.jpg" alt="">
              </a>
            </figure><!-- //publicidade -->
          </section><!-- //Ultimas do Blog -->
          
          <div class="small-16 left mbt show-for-large-up">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <section class="medium-ads-left small-16 medium-6 large-16 left">
            <header class="widget-header small-16 left rel mbt">
              <h4 class="text-up red">Tv Diário do Sertão</h4>
              <div class="block-red abs"></div>
            </header>

            <figure class="small-16 left">
              <a href="http://diariodosertao.com.br/artigos/view/ds/midia/De%20segunda%20%C3%A1%20sexta%20das%2014h%20%C3%A1s%2021h%20se%20ligue%20na%20programa%C3%A7%C3%A3o%20da%20Tv%20Di%C3%A1rio%20do%20Sert%C3%A3o/1" class="display-block small-8 medium-16 large-16 left mbt th click-tv" target="_blank">
                <img src="media/tv.jpg" alt="">
              </a>

              <figcaption class="small-8 medium-16 large-16 left mbt small-ads-left">
                <h4 class="no-mbt"><a href="http://diariodosertao.com.br/artigos/view/ds/midia/De%20segunda%20%C3%A1%20sexta%20das%2014h%20%C3%A1s%2021h%20se%20ligue%20na%20programa%C3%A7%C3%A3o%20da%20Tv%20Di%C3%A1rio%20do%20Sert%C3%A3o/1" title="TV Diário do Sertão" target="_blank" class="font-header color-body">De segunda á sexta das 14h ás 21h se ligue na programação da Tv Diário do Sertão</a></h4>
              </figcaption>
            </figure>
          </section><!-- //tv diario do sertão -->

          <div class="small-16 left mbt hide-for-medium">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <section class="small-16 medium-4 large-16 left medium-ads-left">
            <header class="widget-header small-16 left rel mbt">
              <h4 class="text-up red">Mais lidas</h4>
              <div class="block-red abs"></div>
            </header>

            <nav class="small-16 left mbt">
              <ul class="no-bullet popular small-16 left">
                <li>
                  <span class="display-tbc"></span>
                  <h5><a href="#" title="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, dignissimos</a></h5>
                </li>

                <li>
                  <span class="display-tbc"></span>
                  <h5><a href="#" title="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, dignissimos</a></h5>
                </li>

                <li>
                  <span class="display-tbc"></span>
                  <h5><a href="#" title="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, dignissimos</a></h5>
                </li>
              </ul>
            </nav>
          </section><!-- //Mais lidas -->

          <div class="small-16 left mbt">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <figure class="medium-6 large-16 left show-for-medium-up mbt">
            <a href="#">
              <img src="media/ads7.jpg" alt="">
            </a>
          </figure><!-- //publicidade -->

          <div class="small-16 left mbt show-for-large-up">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <section class="small-16 medium-10 large-16 left medium-ads-left mbt">
            <header class="widget-header small-16 left rel mbt">
              <h4 class="text-up red">Classificados</h4>
              <div class="block-red abs"></div>
            </header>

            <nav class="nav-ads small-16 left">
              <a href="#" title="" class="display-block small-16 left text-center next-ads"><span class="icon-arrow-up3"></span></a>
              <ul class="no-bullet ads-list small-16 left cycle-slideshow"
                data-cycle-pause-on-hover="true"
                data-cycle-speed="500"
                data-cycle-slides="> li"
                data-cycle-timeout="10000"
                data-cycle-swipe="true"
                data-cycle-swipe-fx="scrollHorz"
                data-cycle-prev=".prev-ads"
                data-cycle-next=".next-ads"
                data-cycle-fx="scrollVert"
              >
                <li>
                  <figure class="small-16 columns">
                    <a href="#" title="" class="ads-thumb left small-4 medium-3 large-5 left th">
                      <img src="media/cla1.jpg" alt="">
                    </a>
                    <figcaption class="small-12 medium-13 large-11 left ads-in-left">
                      <h5><a href="#" title="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, molestiae, quos, optio, praesentium voluptatem</a></h5>
                    </figcaption>
                  </figure>
                </li>

                <li>
                  <figure class="small-16 columns">
                    <a href="#" title="" class="ads-thumb left small-4 medium-3 large-5 left th">
                      <img src="media/cla2.jpg" alt="">
                    </a>
                    <figcaption class="small-12 medium-13 large-11 left ads-in-left">
                      <h5><a href="#" title="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, molestiae, quos, optio, praesentium voluptatem</a></h5>
                    </figcaption>
                  </figure>
                </li>

                <li>
                  <figure class="small-16 columns">
                    <a href="#" title="" class="ads-thumb left small-4 medium-3 large-5 left th">
                      <img src="media/cla1.jpg" alt="">
                    </a>
                    <figcaption class="small-12 medium-13 large-11 left ads-in-left">
                      <h5><a href="#" title="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, molestiae, quos, optio, praesentium voluptatem</a></h5>
                    </figcaption>
                  </figure>
                </li>

                <li>
                  <figure class="small-16 columns">
                    <a href="#" title="" class="ads-thumb left small-4 medium-3 large-5 left th">
                      <img src="media/cla2.jpg" alt="">
                    </a>
                    <figcaption class="small-12 medium-13 large-11 left ads-in-left">
                      <h5><a href="#" title="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, molestiae, quos, optio, praesentium voluptatem</a></h5>
                    </figcaption>
                  </figure>
                </li>
              </ul>
              <a href="#" title="" class="display-block small-16 left text-center prev-ads"><span class="icon-arrow-down4"></span></a>
            </nav>
          </section><!-- //classificados -->

          <div class="small-16 left mbt">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <section class="small-16 left">
            <header class="widget-header small-16 left rel mbt">
              <h4 class="text-up red">Encontre-nos no Facebook</h4>
              <div class="block-red abs"></div>
            </header>

            <div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="300" data-height="300" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
          </section><!-- //facebook -->

          <div class="small-16 left mbt show-for-large-up clearfix">
            <div class="hl small-16 left"></div>
          </div><!-- //hl -->

          <section class="small-16 left show-for-large-up">
            <header class="widget-header small-16 left rel mbt">
              <h4 class="text-up red">Rádios on-line</h4>
              <div class="block-red abs"></div>
            </header>

            <a href="#" data-options="align:top" data-dropdown="drop" class="button small-16 left radius">Selecionar Rádio</a>
            <ul id="drop" class="small f-dropdown" data-dropdown-content>
              <li><a href="#"><span class="icon-sound"></span> Difusora AM</a></li>
              <li><a href="#"><span class="icon-sound"></span> Patamuté FM</a></li>
              <li><a href="#"><span class="icon-sound"></span> Rádio Alto Piranhas</a></li>
            </ul>
          </section>
        </aside><!-- //sidebar -->

      </div><!-- //row -->
    </section><!-- //wrapper -->

<?php get_footer(); ?>
