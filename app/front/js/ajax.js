$('.toCart').click(function() {
	var id = $(this).attr('data-uid');

	$.ajax({
		url:'http://engine.loc/helpers/ajax.php',
		type: 'POST',
		data: 'id='+id,
		success: function(get_ajax){
            var obj = JSON.parse(get_ajax);
            $('#one').html(obj.en_hash);
		}
	})
});

$(document).ready(function(){
    
    $('.product').each(function() {

    var pprice =  $(this).find('.pprice').html();
    $(this).find('.pprice').addClass('active');
    	
	$.ajax({
		url:'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5',
		type: 'POST',
		data: 'id=1',
		success: function(data){
			$.each(data,function(key,value){
				if(value.ccy == 'USD'){

					var price = pprice / value.buy;

					price = price.toFixed();

					 $('.product').find('span.active').html(price+'.00$');
					 $('.pprice').removeClass('active');


				}
				

			});
		}



    });

    });

});