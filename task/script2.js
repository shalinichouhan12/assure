<script>
	$(document).ready(function(){
		$("#submit").click(function(){
			var inp = {name1:$('#name').val(),class1:$('#class').val(),email1:$('#email').val()};
			$.ajax({
				type:"POST",
				url:"next.php",
				data:inp,
				success:function(data){
					alert(data);
				},
			});
			
		});

	});
</script>