<script>
    $(document).on('click', '.addTobag', function (e){
			var p_id = $(this).data('id');
			var mode = $(this).data('mode'); // 24 // cart
			var quantity = $("#test").val();			
			//alert(quantity);
			$.ajax({
				type: 'post',
				url: '<?php echo base_url('action/add_to_cart');?>',
				data: {p_id:p_id,mode:mode,quantity:quantity, csrf_test_name : csrf_token()},
				dataType: "text", // json
				 success: function (status) {
					if(status.sucess == ''){
						location.reload(true);
					}
				 }
			});
		});
</script>