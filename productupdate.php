<?php 

include 'config.php'
 ?>

 <?php 

    if (isset($_GET['id'])) {
    	$id = $_GET['id'];
    }

    $sql = "SELECT * FROM categories WHERE id='$id' " ;
	$result = mysqli_query($conn, $sql);
	if (!$result) {
		echo 'query failed' .mysql_error();
		} 
	else{
		$row = mysqli_fetch_assoc($result);
		
	}
		


  ?>

   <?php 


 	if (isset($_POST['submit'])) {


	$productname = $_POST['productname'];
	$price = $_POST['price'];
	$discount = ($_POST['discount']);

	$sql = " UPDATE `categories` SET `productname` = '
	$productname', `price` = '$price' ,`discount`= '$discount' WHERE `categories`.`id` = '$id'";

	$result = mysqli_query($conn, $sql);
	if (!$result) {
		echo 'query failed' .mysql_error();
		} 
	else{
		 echo "<script>alert('Details updated')</script>";
		 header('Location:admin.php');
	}


	}
    
		


  ?>
	


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update</title>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
	<div class="container-fluid p-3 " style="width:600px; height: 450px;">
		<h2 style="align-items: center; text-align: center;">Update details</h2>
		 <form action="" method="POST" class="border border-3 border-dark" action="update.php?new_id = <?php echo $id; ?>">
			<div class="input-group">
				<input type="text" placeholder="productname" name="productname" class="form-control m-2" value="<?php echo $row['productname'];?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="price" name="price" class="form-control m-2" value="<?php echo $row['price'];?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="discount" name="discount" class="form-control m-2" value="<?php echo $row['discount'];?>" required>
            </div>

          
            
			<div class="input-group" style="align-items: center; text-align: center; justify-content: center;">
				<button name="submit" class="btn btn-success m-2 a ">Update</button>
			</div>
			<p id="msg"></p>
			
		</form>	
		
	</div>

</body>
</html>