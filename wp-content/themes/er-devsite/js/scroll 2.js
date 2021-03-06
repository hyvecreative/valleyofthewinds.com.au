$(document).ready(function(){
  
jQuery('.scroll-dowm-arrow').on('click touchstart', function () {
   //optionally remove the 500 (which is time in milliseconds) of the
   //scrolling animation to remove the animation and make it instant
   
   jQuery.scrollTo('div.campaign-row', 800, {axis:'y'});
   
});

    jQuery('.scroll-down-ser').on('click touchstart', function () {
        //optionally remove the 500 (which is time in milliseconds) of the
        //scrolling animation to remove the animation and make it instant

        jQuery.scrollTo('div.page-news-wrap', 800, {axis:'y'});

    });

    jQuery('.scroll-down-cat').on('click touchstart', function () {
        //optionally remove the 500 (which is time in milliseconds) of the
        //scrolling animation to remove the animation and make it instant

        jQuery.scrollTo('div.services-wrap', 1200, {axis:'y'});

    });


jQuery(function($){{$(window).scroll(function(){if($(window).scrollTop()>150)$('#scroll-to-top').addClass('displayed');else $('#scroll-to-top').removeClass('displayed');});$('#scroll-to-top').click(function(){$("html, body").animate({scrollTop:"0px"});return false;});}

});
	
// text rotate
	
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};

	
	
});

