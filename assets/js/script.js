// event pada saat link diklik
$('.page-scroll').on('click', function(e){

	// ambil isi href
	var tujuan = $(this).attr('href');
	// tangkap elemen yang bersangkutan
	var elemenTujuan = $(tujuan);

	// pindahkan scrool
	$('html,body').animate({
		scrollTop: elemenTujuan.offset().top -50
	}, 1050, 'easeInOutExpo');

	e.preventDefault();

});


// paralax
$(window).scroll(function() {
	var wScroll = $(this).scrollTop();

	$('.jumbotron img').css({
		'transform' : 'tranlate(0px, '+ wScroll +'%)'
	});

});





























