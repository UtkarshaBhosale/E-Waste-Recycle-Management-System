<!DOCTYPE html>
<html>

<head>
	<title>RECYCLE WITH US!</title>
	<link rel="stylesheet" type="text/css" href="recycleform.css">

</head>

	<body>
		<div class="container">
			<div class="header">
				<h2>RECYCLE HERE!</h2>
			</div>
			<form action="recycle.php" method="post" class="form" id="form">
				


				<div class="form-control">
					<label><b>Product Name:</b></label>
					<input type="text" name="product_name" id="product_name" placeholder="Enter your Product Name:" autocomplete="off" required>

				</div>

				<div class="form-control">
					<label><b>Product Category:</b></label>
					<input type="text" name="product_type" id="product_type" placeholder="Enter your Product Category:" autocomplete="off" required>
				</div>

				<div class="form-control">
					<label><b>Product Specifications:</b></label>
					<br>
					<input type="text" name="product_specifications" id="product_specifications" placeholder="Enter your Product Specifications:" autocomplete="off" required>
				</div>

				

				<div class="form-control">
					<label><b>Product Image:</b></label>
					<input type="file" id="product_image" name="product_image" placeholder="Product image:" required>
				</div>
				
				
				
			

				<input type="submit" value="submit" class="btn" name="submit">
			</form>

			




	</body>

</html>