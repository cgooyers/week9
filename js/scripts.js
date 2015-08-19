$(function(){
	$('.hamburger').on('click', function(){
		$('.header-container').toggleClass('show')
		$(this).find('i').toggleClass('fa-bars fa-times')
	});
});