<?php
	include('config.php')
?>

<?php 

	$msg = "";
 	if (isset($_POST['submit'])) {


	$productname = $_POST['productname'];
	$price = $_POST['price'];
	$discount = ($_POST['discount']);
	$filename = basename($_FILES['uploadfile']["name"]);
    $tempname = ($_FILES['uploadfile']["tmp_name"]);
    $folder = "./image/" . $filename;

	$sql = "INSERT INTO categories ( productname, price,discount,image)
   VALUES ( '$productname', '$price','$discount','$filename')";
	$result = mysqli_query($conn, $sql);
	if (!$result) {
		echo 'query failed' .mysql_error();
		} 

	else{

		if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
		 echo "<script>alert('Record inserted')</script>";
		 
	}


	}
    
		


  ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert</title>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
	<div class="container-fluid p-3 " style="width:600px; height: 450px;">
		<h2 style="align-items: center; text-align: center;">Insert Record</h2>
		 <form action="" method="POST" class="border border-3 border-dark" action="update.php?new_id = <?php echo $id; ?>" enctype="multipart/form-data">
			<div class="input-group">
				<input type="text" placeholder="productname" name="productname" class="form-control m-2"  required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="price" name="price" class="form-control m-2" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="discount" name="discount" class="form-control m-2" required>
            </div>
            <div class="input-group"> 
          	<input class="form-control" type="file" name="uploadfile" value="">
          	
          </div>
            
			<div class="input-group" style="align-items: center; text-align: center; justify-content: center;">
				<button name="submit" class="btn btn-success m-2 a ">Insert</button>
			</div>
			<p id="msg"></p>
			
		</form>	
		
	</div>

</body>
</html>