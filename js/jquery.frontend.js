
$(document).ready(function(){


$('a#top').click(function() {
	$('html:not(:animated),body:not(:animated)').animate({ scrollTop: 0}, 500);
	return false;
});

$('a#bottom').click(function() {
	$('html:not(:animated),body:not(:animated)').animate({ scrollTop: 800}, 500);
	return false;
});

$('a#saltar').click(function() {
	$('#opacidad').fadeOut(300);
});

$(window).scroll(function(){
	$('#opacidad').fadeOut(300);
});

	
/******************************************************************************************************************************************/
/* SLIDER */

var images = ['Parque_Satelite_sld_1.jpg', 'Parque_Satelite_sld_2.jpg', 'Parque_Satelite_sld_3.jpg', 'Parque_Satelite_sld_4.jpg', 'Parque_Satelite_sld_5.jpg'];
var count = 0;
var limit = 0;

function slider (){
	/*if(count==0){$('div#slogan').fadeOut(300);}*/
	count++;
	if(count>=images.length) { count=0; }
	limit++;
	if (limit<5) {
		$('div.preloader').fadeIn(600);	
		var loadImg = 'images/' + images[count];
		var img = new Image();
		$(img).load(function () {	
			$('div.preloader').fadeOut();
			$('div.images').append(this);	
			var ancho = $(window).width();	
			$('div.images img').css({'width': ancho});
			var alto = $('div.images img').css('height');
			$('div.slider').css({'height': alto});
			var ubi = '-' + (100*count) + '%';
			$('div.images').animate({'left': ubi}, 800);
		}).attr('src', loadImg);
		
	} else {
		clearInterval(timer);
		$('div#slogan').fadeIn(200, function(){
			$('html:not(:animated),body:not(:animated)').animate({ scrollTop: 800}, 500);
		});	
	}
}

var loadImg = 'images/' + images[count];
var img = new Image();
$(img).load(function () {	
	$('div.preloader').fadeOut();
	$('div.images').append(this);	
	var ancho = $(window).width();	
	$('div.images img').css({'width': ancho});
	var alto = $('div.images img').css('height');
	$('div.slider').css({'height': alto});
	timer = setInterval(slider, 9000);
}).attr('src', loadImg);


$('a.prev').click(function(){
	
	if (count<=1) { 
	count=5;
	} else { count=count-2; }
	
	clearInterval(timer);
/*	$('div#slogan').fadeOut(300);*/
	limit=0;
	slider();
});

$('a.next').click(function(){
	clearInterval(timer);
/*	$('div#slogan').fadeOut(300);*/
	limit=0;
	slider();
});










/******************************************************************************************************************************************/
/* AMENITIES */
/********************************************************************/

$('div.AM').hide();

$('ul#spaces li a, a.lAm').click(function(){
	bol = 1;	
	var doc = $(this).attr('rel');
	$('div#gris_claro').load(doc);
	
	$('div#footer').hide();
	
	$('div.AM').fadeIn(500, function(){	
		var destination = $('.AM').offset().top;
		$('html:not(:animated),body:not(:animated)').animate({ scrollTop: destination}, 500);
		$('div#footer').css({'position': 'static', 'width': '100%'});
		$('div#footer').show();
	});
});







}); /* / document ready */



