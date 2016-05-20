/*!
 * Start Bootstrap - Agency Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin

$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

/*var windowWidth = $('body').width();
function resizeImgDestaqueContrataServe(){
	var containerWidth = $('.container').width();
	var containerMargin = ((windowWidth - containerWidth ) / 2);
	var destImgMargin = containerMargin + (containerWidth / 4 );
	var destImgWidth = ((containerWidth / 4) * 3) + containerMargin;
	var destimgHeight = (destImgWidth / 100) * 46.2177;
	var bottomMargin = (destimgHeight /100) * 28;
	$('.q-c-foto-header-wrap img').css({
										'width': destImgWidth + 'px',
										'height': destimgHeight + 'px'});
	$('.txt-principal-wrap-q-c').css('line-height', destimgHeight + 'px');
	$('.q-c-main-title-container').css('margin-bottom', '-' + bottomMargin + 'px');
	$('.links-soc-wrap').css('margin-top', '-' + (bottomMargin / 2) + 'px');
}

/* Para alinhar as setas customizadas no slide feito pelo bootstrap 
function containerFix(){
	if(windowWidth > 768 && windowWidth < 1200 ){
		$('.navbar.navbar-default div:first-child').removeClass('container'). addClass('wider-navbar-d');
	}
}
function alinhaSetasSliderBootstrap(){
	var sliderHeight = $('.como-funciona-carousel').height();
	var textWrapHeight = $('.c-f-txt-wrap').height();
	var carInnerHeight = $('.c-f-img-wrap').height();
	var textWrapToMargim = (carInnerHeight / 2) - textWrapHeight;
	$('.como-f-prev, .como-f-next').css('line-height', sliderHeight + 'px');
	$('.c-f-txt-wrap').css('margin-top', textWrapToMargim + 'px');
}

$(window).load(function(){
	if (windowWidth > 992){
		resizeImgDestaqueContrataServe();
	}
	
	alinhaSetasSliderBootstrap();
});*/
$(document).ready(function(){
	$('.como-funciona-carousel').carousel({
		interval: 5000
	});
	$('#na-midia-slide').carousel(
		interval: 10000
	);
	
	$('.carousel .item').each(function(){
		  var next = $(this).next();
		  if (!next.length) {
		    next = $(this).siblings(':first');
		  }
		  next.children(':first-child').clone().appendTo($(this));
		  
		  if (next.next().length>0) {
		    next.next().children(':first-child').clone().appendTo($(this));
		  }
		  else {
		  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
		  }
	});
});
