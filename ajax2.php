<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Bootstrap 4 Example</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
	</head>
	<body>

		<div class="container">
			<form id="myForm">
				<div id="a">Hello</div>
				<div id="b"> </div>
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script>
			(function(){
				//alert('ok');
				
				$('#myForm').submit(function(e){
					e.preventDefault();
					let x = $("#a").html();
					let y = $("#b").html("Hello");
					
					
				});
			})(jQuery);
		</script>
	</body>
</html>