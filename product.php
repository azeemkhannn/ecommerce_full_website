

<html>
 <head>
         <title>Product</title>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="style1.css">


   
 
 </head>

 <body>
 <?php
   session_start();
    $con = mysqli_connect("localhost","root","","projectweb");
    $display = 0;
   if(!empty($_SESSION["id"])){
      $id = $_SESSION["id"];
      $result = mysqli_query($con,"select *from user where id ='$id'");
      $row = mysqli_fetch_assoc($result);
      
      if($row['id'] == $id){
         $display = 1;
      } 
      
   }

  
   ?>
   
         <header  >
               <a href="home.php"> <img id="logo" src="imege/logo.png"></img> </a>
          
         
          <nav>
              <div class="topnav">
                 <a href="home.php">Home</a>
                 <a href="product.php">Product</a>
                 <a href="contact.php">Contact</a>
                 <a href="about.php">About</a>
                 <?php if($display){ ?>
                 <a href="logout.php">Logout</a>
                 <a href="Product_list.php" style="width: 50%;">Product List</a>
                 <a href="add_product.php" style="width: 50%;">Add Product</a>
                  <?php }else{ ?>
                  <a href="login.php">Sign</a>
                  <?php } ?>
                 </div>
             
             </nav> 
          </header> 
         

          
          <div class="container ">
                <h1> Our Products </h1> 
                <!--Product 1st line-->
                <div class="row ">
                  <div class="col">
                <div class="card-deck">
          
         <?php 
         $result1 = mysqli_query($con,"select *from product");
         while($row=mysqli_fetch_assoc($result1)){ 
            if($row['p_stock'] == 'Y'){
            ?>
         
         <div class="col-md-3 mb-3">
          <div class="card"style="width: 14rem;">
            <img src="upload/<?php echo $row['image'];?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['name'];?></h5>
              <h5> RS:<?php echo $row['price']?> </h5>
              <p class="card-text"><?php echo $row['detail']?></p>
              <a href="product_page1.php?id=<?php echo $row['id']?>" class="btn btn-primary sticky-footer">Add to cart</a>
            </div>
          </div>
         </div> 
                
        <?php }}?>
        </div>
        </div>
        </div>
        </div>
 <footer class="sticky-footer topnav d-none  d-sm-block ">
    <div class="row ">
      
         <div class="hopnav">
                <a  href="home.php">Care</a>
                 <a href="about.php">About</a>
                 <a href="#">+9231-1000999</a>
                 <a href="#">143-E Iqbal town</a>
            </div>
      
            </div>
            <div style="clear: both;"><p class="text-center font-weight-light" style="color: #ddd;">copyright@ 2023</p></div>
 </footer>
 <!--Mobile screen-->
 <footer class="sticky-footer hopnav d-block  d-sm-none ">
  <div class="container">
    <div class="row ">
      
         <div class="mob-hopnav col-6 text-right">
                 <a href="home.php">Care</a>
         </div>
              <div class="col-6 text-left">
                 <a href="about.php">About</a> 
                </div>
         <div class="row">        
                 <div class="col-6 mob-hopnav d-inline text-light">
                 <p >+9231-1000999</p>
                </div>
                 <div class="col-6 text-light">
                 <p >143E Iqbal town</p>
            </div>
         </div>
            </div>
            <div style="clear: both;"><p class="text-center font-weight-light" style="color: #ddd; font-size: 70%;">copyright@ 2023</p></div>
  </div>
          </footer>


 </body>


</html>

