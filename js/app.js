// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

/*
  Configuração geral para chamadas AJAX
 */
$.ajaxSetup({
    url : getData.ajaxDir,
    type : 'GET',
    dataType : 'html',
    error: function(e) {
      alert('Error: ' + e.statusText);
    }
});

/*
	Config. Slide de destaques 
	na página principal com jquery.cycle.plugin
 */

var progress = $('#progress'),
    slideshow = $( '.main-slideshow' );

slideshow.on( 'cycle-initialized cycle-before', function( e, opts ) {
    progress.stop(true).css( 'width', 0 );
});

slideshow.on( 'cycle-initialized cycle-after', function( e, opts ) {
    if ( ! slideshow.is('.cycle-paused') )
        progress.animate({ width: '100%' }, opts.timeout, 'linear' );
});

slideshow.on( 'cycle-paused', function( e, opts ) {
   progress.stop(); 
});

slideshow.on( 'cycle-resumed', function( e, opts, timeoutRemaining ) {
    progress.animate({ width: '100%' }, timeoutRemaining, 'linear' );
});

/*
	Config. menu off-canvas (Foundation)
 */
$(document)
	.on('open.fndtn.offcanvas', '[data-offcanvas]', function() {
  		$('.right-off-canvas-menu').css('display', 'block');
  		$('.off-canvas-wrap').css('overflow','hidden');
	})
	.on('close.fndtn.offcanvas', '[data-offcanvas]', function() {
  		$('.right-off-canvas-menu').css('display', 'none');
  		$('.off-canvas-wrap').css('overflow','auto');
	});

/*
  Enumera as mais lidas
 */
$('span','.popular').each(function(i) {
  $(this).text(i + 1);
});

/*
  VIDEOS
 */

//Fazer chamada de video na pagina principal
$('.video-thumb').on('click touchstart', function() {
  var postid = $(this).data('postid');

  $.ajax({
    data: {
      action: 'CZN_request_videos_home',
      postid: postid
    },
    beforeSend: function() {
      $('.ajax-loader').show();
      $('.flex-video').hide();
    },
    complete: function() {
      $('.ajax-loader').hide(100,function() {
        $('.flex-video').fadeIn('fast');
      });
    },
    success: function(data) {
      $('.flex-video').html(data);
    }
  });
});

//Apaga o video ao fechar modal
$(document).on('closed.fndtn.reveal', '[data-reveal]', function () {
  $('iframe, object', '.flex-video').remove();
});