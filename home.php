<?php

    include('config.php')
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Shopping</title>
        <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     
    </head>
    <style>
 .card-img-top {
 width: 100%;
 height: 200px;
 }
 body{

 }
 </style>
    <body class="container-fluid">
        <header>
            
        </header>
        <section>
            <div class="row bg-danger text-white text-center">
                <div class="col">
                Amazon Shopping - Online Store
                </div>
            </div>
                <div class="row mt-3" style="height: 700px;">
                    <div class="col-3 border border-">
                        <ul class="t">
                            <li><a class="bi bi-house-fill btn btn-warning m-2">Home</a></li>
                            <li><a class="bi bi-phone  btn btn-warning m-2">Electronics</a></li>
                            <li><a class="bi bi-house-fill  btn btn-warning m-2">Fashnon</a></li>
                        </ul>
                    </div>
                <div class="col-9">
                    <h2 style="align-items:center; text-align:center;">Home Page</h2>
                    <?php
            
            $sql = "SELECT * FROM categories";
            $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));          
            while( $record = mysqli_fetch_assoc($resultset) ) {
            ?>
           
            <div class="card-deck">
                     <!--Card-1-->
                        <div class="card" s>
                             <div class="card-header">
                                <h3 class="card-title"><?php echo $record['productname']; ?></h3>
                                 <h5 class="card-subtitle"><?php echo $record['price'].'/-'; ?></h5>
                        </div>
                     <div class="card-body">
                        <p><b><?php echo $record['discount']; ?><span class="bi bi-percent"></span></b></p>
                            
                     <div>
                        
                     </div>
                     </div>
                     <div class="card-footer">
                        <button class="btn btn-danger btn-block"> <span class="bi bi-cart3"></span> Add to Cart</button>
                     </div>
                     </div>



            <?php } ?>
                       
                </div>
        </section>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>
