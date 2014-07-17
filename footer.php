    <footer id="footer" class="small-16">
      <div class="row">
        <figure class="small-16 columns text-center mbt">
          <a href="#" title="Página principal" class="display-ib icon-logo-footer centered"></a>
        </figure>

        <nav class="small-16 columns text-center mbt nav-footer">
          <a href="#" title="Notícias"><span class="icon-list"></span> Notícias</a>
          <a href="#" title="Classificados"><span class="icon-suitcase"></span> Classificados</a>
          <a href="#" title="Vídeos"><span class="icon-video"></span> Vídeos</a>
        </nav>

        <p class="small-16 columns text-center mbt">&copy; 2014. Portal CZN - O Sertão em Notícias. Todos os direitos reservados.</p>
        <h5 class="small-16 columns text-center mbt">
          <a href="#" title="Design e desenvolvimento">JT</a>
        </h5>
      </div><!-- //row -->
    </footer><!-- //footer -->
    
    <div id="video-modal" class="reveal-modal medium" data-reveal>
      <div class="ajax-loader small-16 left text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/ajax-loader.gif" alt="">
      </div>
      <div class="flex-video">
      </div>
      <a class="close-reveal-modal">&#215;</a>
    </div>
    
    <script src="<?php echo get_template_directory_uri(); ?>/scripts.js"></script>
    <script>
      $(document).ready(function() {
        $('body').jpreLoader({
          showPercentage: false,
          closeBtnText: '',
          loaderVPos: '45px'
        });
      });
    </script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=285518124940152&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <?php wp_footer(); ?>
  </body>
</html>