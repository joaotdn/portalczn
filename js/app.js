// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

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