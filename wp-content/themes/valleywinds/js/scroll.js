$(document).ready(function(){
  
jQuery('.scroll-hero').on('click touchstart', function () {
   //optionally remove the 500 (which is time in milliseconds) of the
   //scrolling animation to remove the animation and make it instant
   
   jQuery.scrollTo('div#project', 800, {axis:'y'});
   
});
	
	jQuery('.scroll-content').on('click touchstart', function () {
   //optionally remove the 500 (which is time in milliseconds) of the
   //scrolling animation to remove the animation and make it instant
   
   jQuery.scrollTo('.content-wrap', 800, {axis:'y'});
   
});
	
		jQuery('.btn-cont').on('click touchstart', function () {
   //optionally remove the 500 (which is time in milliseconds) of the
   //scrolling animation to remove the animation and make it instant
   
   jQuery.scrollTo('.contact-wrap', 800, {axis:'y'});
   
});
	
	jQuery('.scroll-news').on('click touchstart', function () {
   //optionally remove the 500 (which is time in milliseconds) of the
   //scrolling animation to remove the animation and make it instant
   
   jQuery.scrollTo('div.news-panel', 800, {axis:'y'});
   
});
	
	jQuery('.btn-proj').on('click touchstart', function () {
   //optionally remove the 500 (which is time in milliseconds) of the
   //scrolling animation to remove the animation and make it instant
   
   jQuery.scrollTo('div.project-wrap', 800, {axis:'y'});
   
});
	
		jQuery('.btn-comm').on('click touchstart', function () {
   //optionally remove the 500 (which is time in milliseconds) of the
   //scrolling animation to remove the animation and make it instant
   
   jQuery.scrollTo('div.community-wrap', 800, {axis:'y'});
   
});
	
		jQuery('.btn-loc').on('click touchstart', function () {
   //optionally remove the 500 (which is time in milliseconds) of the
   //scrolling animation to remove the animation and make it instant
   
   jQuery.scrollTo('div.location-wrap', 800, {axis:'y'});
   
});
	
		jQuery('.btn-news-scroll').on('click touchstart', function () {
   //optionally remove the 500 (which is time in milliseconds) of the
   //scrolling animation to remove the animation and make it instant
   
   jQuery.scrollTo('div.news-wrap', 800, {axis:'y'});
   
});


jQuery(function($){{$(window).scroll(function(){if($(window).scrollTop()>150)$('#scroll-to-top').addClass('displayed');else $('#scroll-to-top').removeClass('displayed');});$('#scroll-to-top').click(function(){$("html, body").animate({scrollTop:"0px"});return false;});}

});
	
});

