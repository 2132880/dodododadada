$(document).ready(function(){
	//$('#cart-badge').text($('#cart-badge').text()*1+1);
	//console.log($('#cart-badge').text($('#cart-badge').text()*1+1));
	$('button.btn.btn-primary').on('click', function(){
		console.log('!');
		var prod_id = $(this).attr('id');
		var prod_name = $('#name-'+prod_id).val();
		var prod_image_dir = $('#image_dir-'+prod_id).val();
		var prod_price = $('#price-'+prod_id).val();
		var prod_qty = $('#qty-'+prod_id).val();
		
		$.ajax({
			url: './cart/add_to_cart.php',
			type:'POST',
			dataType: "json",
			data: {
				id: prod_id,
				name: prod_name,
				image_dir: prod_image_dir,
				price: prod_price,
				qty: prod_qty
			},
			success: function(response){
				console.log(response);
				$('#cart-badge').text($('#cart-badge').text()*1+1);
			}
		});
	});


	
});