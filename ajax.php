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
				<div class="form-group">
					<label for="fname">Enter your name:</label>
					<input type="text" name="fname" class="form-control" placeholder="Enter fname" id="fname">
				</div>
				<div class="form-group">
					<label for="lname">Enter your surname:</label>
					<input type="text" name="lname" class="form-control" placeholder="Enter lname" id="lname">
				</div>
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script>
			//(function)(jQuery);
			(function(){
				//alert('jQuery loaded succesfully');
				$('#myForm').submit(function(e){
					e.preventDefault();
					let fn = $("#fname").val();
					let ln = $("#lname").val();
					alert("my name is "+fn+" "+ln+"");
					
				});
			})(jQuery);
			
		
		</script>
	</body>
</html>
