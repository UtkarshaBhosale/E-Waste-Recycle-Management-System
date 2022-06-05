<?php
$conn = new mysqli('localhost','root','','ewaste');
if($conn->connect_error) {
	die('connection Failed : '.$conn->connect_error);
}
else{
	if(isset($_POST['submit'])){
		$pname = $_POST['product_name'];
		$ptype = $_POST['product_type'];
		$pspecifications = $_POST['product_specifications'];
		$pimage = $_POST['product_image']; 
		
			
	$stmt = "INSERT INTO `recycle_info`(`product_name`, `product_type`, `product_specifications`,`product_image`) VALUES ('$pname','$ptype','$pspecifications','$pimage')";
	
	if (mysqli_query($conn ,$stmt)) {
		echo "<script>alert('Thanks for using our service')</script>";
	  } else {
		echo "Error: " . $stmt . "<br>" . $conn->error;
	  }
	  
	  $conn->close();
	// if(mysqli_query($conn ,$stmt)) {
	// 	echo "<script>alert('Thanks for using our service')</script>";
	// }
	}
	
}
?> 