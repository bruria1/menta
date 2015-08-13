/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

$('#widget_pager_bottom_joe_-block_2').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
 });


$('.prev').on('click', function() {
	var video = $(".ie #popup-youtube-player").attr("src");
	$(".ie #popup-youtube-player").attr("src","");
	$(".ie #popup-youtube-player").attr("src",video);
	var video = $(".safari #popup-youtube-player").attr("src");
	$(".safari #popup-youtube-player").attr("src","");
	$(".safari #popup-youtube-player").attr("src",video);
	var video = $(".chrome #popup-youtube-player").attr("src");
	$(".chrome #popup-youtube-player").attr("src","");
	$(".chrome #popup-youtube-player").attr("src",video);
});

$('.next').on('click', function() {
	var video = $(".ie #popup-youtube-player").attr("src");
	$(".ie #popup-youtube-player").attr("src","");
	$(".ie #popup-youtube-player").attr("src",video);
	var video = $(".safari #popup-youtube-player").attr("src");
	$(".safari #popup-youtube-player").attr("src","");
	$(".safari #popup-youtube-player").attr("src",video);
	var video = $(".chrome #popup-youtube-player").attr("src");
	$(".chrome #popup-youtube-player").attr("src","");
	$(".chrome #popup-youtube-player").attr("src",video);
});

$('body').addClass("menu-close");

$('.navbar-toggle').on('click', function() {
   if ( $( "body" ).hasClass( "menu-close" ) ) {
      $('body').removeClass('menu-close').addClass('menu-open');
  }
  else{
      $('body').removeClass('menu-open').addClass('menu-close');
  }
});

  }
};





})(jQuery, Drupal, this, this.document);
