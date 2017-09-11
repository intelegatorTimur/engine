


/*$('.dfrom').keyup(function() {
	
	var from = $(this).val();

   $('.dto').val(from);
});
*/



$(".product_image img").on("click",function(){

	var clImg = $(this).clone();
	$('.light_box div').html(clImg);
	$('.light_box').addClass('open_light_box');

	$('.light_box .box_close').click(function(){

		
		$('.light_box').removeClass('open_light_box');
        $('.light_box div').find('img').detach();
	});

});





$('#right_line').mouseenter(function(){

	$(this).addClass('open_menu');

	setTimeout(function() {
		$('#right_line .logo').css('visibility','visible').addClass('animated fadeIn');
	}, 700);

	setTimeout(function() {
	$('#right_line ul').css('visibility','visible').addClass('animated fadeIn');
}, 1000);

});

$('#right_line').mouseleave(function(){
    setTimeout(function() {
    $('#right_line .logo').css('visibility','hidden').removeClass('animated fadeIn');
    },350);

	setTimeout(function() {
	$('#right_line ul').css('visibility','hidden').removeClass('animated fadeIn');
    },350);

     setTimeout(function() {
	$('#right_line').removeClass('open_menu');
    },500);

    



});

