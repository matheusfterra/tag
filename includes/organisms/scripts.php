<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/slick-carousel/slick/slick.min.js"></script>
	<script>
		$(window).scroll(function() {
  		if ($(document).scrollTop() > 250) {
   			$('.barra').addClass('navbar navbar-inverse navbar-fixed-top teste');
   			$('.menu-responsivo').addClass('top');
  		} else {
  			$('.barra').removeClass('navbar navbar-inverse navbar-fixed-top teste');
  			$('.menu-responsivo').removeClass('top');

 		}
		});
	$(function(){
	$('.toggle').click(function(){
		$('.layout').toggleClass('ativo')
		$('.menu-responsivo').toggleClass('ativo')
		$(this).toggleClass('ativo');
	});
})
	</script>
	<script>
		var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
if (width > 991){
	$('.categoria').slick({
  		slidesToShow: 3,
 		slidesToScroll: 1,
 		autoplay: true,
 		dots: true,
 		autoplaySpeed: 2000,
	});
}else if(width < 440){
	$('.categoria').slick({
  		slidesToShow: 1,
 		slidesToScroll: 1,
 		autoplay: true,
 		dots: true,
 		autoplaySpeed: 2000,
	});
}else{
	$('.categoria').slick({
  		slidesToShow: 2,
 		slidesToScroll: 1,
 		autoplay: true,
 		dots: true,
 		autoplaySpeed: 2000,
	});

}
	</script>