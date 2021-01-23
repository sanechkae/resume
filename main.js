$(document).ready(function(){
    $('.header').height($(window).height());
})


$(window).scroll(function() {
	$('#navbarSupportedContent').collapse('hide');
  });
$('#navbarSupportedContent a').click(function() {
	$('#navbarSupportedContent').collapse('hide');
  });


$(".navbar a").click(function(){
    $("body,html").animate({
     scrollTop:$("#" + $(this).data('value')).offset().top
    },1000)
    
})

var header = $('.navbar'),
		scrollPrev = 0;

$(window).scroll(function() {
	var scrolled = $(window).scrollTop();
 
	if ( scrolled > 100 && scrolled > scrollPrev ) {
		header.addClass('out');
	} else {
		header.removeClass('out');
	}
	scrollPrev = scrolled;
});





