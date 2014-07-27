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

/*
  Posts
 */


/*
  Requisitar dados sobre o clima
 */
jQuery(document).ready(function($) {
  $.ajax({
  url : "http://api.wunderground.com/api/2285935769616035/geolookup/conditions/q/BR/Cajazeiras.json",
  dataType : "jsonp",
  success : function(parsed_json) {
  var location = parsed_json['location']['city'];
  var temp_c = parsed_json['current_observation']['temp_c'];
  var feelslike_c = parsed_json['current_observation']['feelslike_c'];
  $('.red','.weather-container').html('<i class="icon-thermometer"></i>'+temp_c);
  $('.blue','.weather-container').html('<i class="icon-thermometer"></i>'+feelslike_c);
  }
  });
});

$('li > a','.weather-choose').on('click', function(e) {
  
  e.preventDefault();
  var city = $(this).data('city');
  var city_name = $(this).text();
  $('a[data-dropdown]','.weather-container').text(city_name);

  $.ajax({
  url : "http://api.wunderground.com/api/2285935769616035/geolookup/conditions/q/BR/"+ city +".json",
  dataType : "jsonp",
  success : function(parsed_json) {
  var location = parsed_json['location']['city'];
  var temp_c = parsed_json['current_observation']['temp_c'];
  var feelslike_c = parsed_json['current_observation']['feelslike_c'];
  $('.red','.weather-container').html('<i class="icon-thermometer"></i>'+temp_c);
  $('.blue','.weather-container').html('<i class="icon-thermometer"></i>'+feelslike_c);
  }
  });
});

/*
  Organiza a lista de categorias
 */
$('.in-list').on('click',function(e) {
  e.preventDefault();
  $('article','#nav-posts').removeClass('medium-8 large-8')
  .find('.cat-thumb').removeClass('medium-16 large-16')
  .end()
  .find('figcaption').removeClass('medium-16 large-16').addClass('ads-in-left');
});

$('.in-grid').on('click',function(e) {
  e.preventDefault();
  $('article','#nav-posts').addClass('medium-8 large-8')
  .find('.cat-thumb').addClass('medium-16 large-16')
  .end()
  .find('figcaption').addClass('medium-16 large-16').removeClass('ads-in-left');
});

/*
  Videos
 */

//requisita video na categoria videos
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

/*
  Radios
*/
$('a','.list-radios').on('click',function(e) {
  e.preventDefault();
  var stream = $(this).data('stream'),
      title = $(this).attr('title')
      url = getData.urlDir,
      myWindow = window.open("", "", "width=400, height=350, scrollbars=no, resizable=no, menubar=no, location=no, fullscreen=no, directories=no, toolbar=no, top=0, left=0", true);
  //Contruir html    
  var html = "<html>\n<body>\n<header>\n<title>"+title+"</title>\n<link rel=\"stylesheet\" href=\""+url+"/style.css\"></header><body class=\"radios-wrap\">";
      html += "<section class=\"row\">";
      html += "<div class=\"small-16 columns text-center\"><figure class=\"icon-logo-small\"></figure></div>\n<h2 class=\"text-center blue\">"+title+"</h2>";
      html += '<div class="small-16 columns text-center"><embed type="application/x-mplayer2" ID="MediaPlayer" Name="WMPlay" src="'+ stream +'" autostart="1" showcontrols="1" showstatusbar="1" width="301" height="70" /></div>';
      html += "</section>\n</body>\n</html>";

  myWindow.document.writeln(html);  
});

/*
  Galerias
 */
$('li:first','.list-gallery').addClass('clearing-featured-img');


