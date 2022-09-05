<?php 

	include('config.php')
 ?>
 <?php 

 	if(isset($_GET['id'])){
 		$id=$_GET['id'];
 	}

 		$sql = "DELETE FROM `categories` WHERE `id`='$id'";
		$result = mysqli_query($conn, $sql);
		if (!$result) {
			echo 'query failed' .mysql_error();
		} 
		else{
			header('location:admin.php');
		}

 	




?>