    <footer id="footer" class="small-16">
      <div class="row">
        <figure class="small-16 columns text-center mbt">
          <a href="#" title="Página principal" class="display-ib icon-logo-footer centered"></a>
        </figure>

        <nav class="small-16 columns text-center mbt nav-footer">
          <?php
            $editorias_id = get_cat_ID( 'Editorias' );
            $editorias_link = get_category_link( $editorias_id );
          ?>
          <a href="<?php echo $editorias_link; ?>" title="Notícias"><span class="icon-list"></span> Notícias</a>
          <a href="<?php echo get_post_type_archive_link('classificados'); ?>" title="Classificados"><span class="icon-suitcase"></span> Classificados</a>
          <?php
            $videos_id = get_cat_ID( 'Videos' );
            $videos_link = get_category_link( $videos_id );
          ?>
          <a href="<?php echo $videos_link; ?>" title="Vídeos"><span class="icon-video"></span> Vídeos</a>
        </nav>

        <p class="small-16 columns text-center mbt">&copy; 2014. Portal CZN - O Sertão em Notícias. Todos os direitos reservados.</p>
        <h5 class="small-16 columns text-center mbt">
          <a href="http://about.me/jteodoro" title="Design e desenvolvimento" target="_blank">JT</a>
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
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <script>
     $('a','.post-video').on('click',function(e) {
  e.preventDefault();
  $('body, html').animate({scrollTop: '220px'},500);

  $('.video-title').text($(this).attr('title'));

  $.ajax({
    data: {
      action: 'CZN_request_videos_home',
      postid: $(this).data('postid')
    },
    beforeSend: function() {
      $('.ajax-loader','.last-video').show();
      $('.video-object','.last-video').hide();
    },
    complete: function() {
      $('.ajax-loader','.last-video').hide(100,function() {
        $('.video-object','.last-video').fadeIn('fast');
      });
    },
    success: function(data) {
      $('.video-object','.last-video').html(data);
    }
  });
});
    </script>
    <?php
      if(!is_home() && !is_page()) {
        ?>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53cbfca91e288a23"></script>
        <?php
      }
    ?>
    <?php wp_footer(); ?>
  </body>
</html>