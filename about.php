
<html>
 <head>
         <title>About us</title>
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
  <header>
    <a href="home.php"> <img id="logo" src="imege/logo.png"></img> </a>
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
             <div class="container">
              <div>
                <h2 class="fot-weight-bold text-center">Welcome to Safe Care</h2>
                <p class="font-weight-light text-lift">Health Safe Care Karachi is an organization founded almost 19 years back by Mr. Muhammad Ismail. It is an innovative sourcing and distribution cum Franchising Company involved in both exclusive representation and global supply of a wide range of quality Pharmaceutical & Nutraceuticals. Beside our core pharmaceutical business in Pakistan, we are an integrated suppliers in Afghanistan & more neighbouring countries as well.</p>
                <p class="font-weight-light text-lift">At present, we are dealing with over 500 clients and more than 1000 products within Pakistan. Since the last 3 years we have been manufacturing our own range of nutraceutical with over 65+ products that are running successfully all over. All our products are enlisted and registered in Form 6 & 7.</p>
                <p class="font-weight-light text-lift">At present, we are dealing with over 500 clients and more than 1000 products within Pakistan. Since the last 3 years we have been manufacturing our own range of nutraceutical with over 65+ products that are running successfully all over. All our products are enlisted and registered in Form 6 & 7.</p>
                <p class="font-weight-light text-lift">At present, we are dealing with over 500 clients and more than 1000 products within Pakistan. Since the last 3 years we have been manufacturing our own range of nutraceutical with over 65+ products that are running successfully all over. All our products are enlisted and registered in Form 6 & 7.</p>
                <p class="font-weight-light text-lift">At present, we are dealing with over 500 clients and more than 1000 products within Pakistan. Since the last 3 years we have been manufacturing our own range of nutraceutical with over 65+ products that are running successfully all over. All our products are enlisted and registered in Form 6 & 7.
                  At present, we are dealing with over 500 clients and more than 1000 products within Pakistan. Since the last 3 years we have been manufacturing our own range of nutraceutical with over 65+ products that are running successfully all over. All our products are enlisted and registered in Form 6 & 7.
                  At present, we are dealing with over 500 clients and more than 1000 products within Pakistan. Since the last 3 years we have been manufacturing our own range of nutraceutical with over 65+ products that are running successfully all over. All our products are enlisted and registered in Form 6 & 7.
                </p>
                <p class="font-weight-light text-lift">At present, we are dealing with over 500 clients and more than 1000 products within Pakistan. Since the last 3 years we have been manufacturing our own range of nutraceutical with over 65+ products that are running successfully all over. All our products are enlisted and registered in Form 6 & 7.</p>
                <p class="font-weight-light text-lift">At present, we are dealing with over 500 clients and more than 1000 products within Pakistan. Since the last 3 years we have been manufacturing our own range of nutraceutical with over 65+ products that are running successfully all over. All our products are enlisted and registered in Form 6 & 7.</p>
              </div>
             </div>




             <footer class="sticky-footer topnav d-none  d-sm-block ">
              <div class="row ">
                
                   <div class="hopnav">
                          <a  href="loginhome.php">Care</a>
                           <a href="about.php">About</a>
                           <a href="#">+9231-1000999</a>
                           <a href="">143-E Iqbal town</a>
                      </div>
                
                      </div>
                      <div style="clear: both;"><p class="text-center font-weight-light" style="color: #ddd;">copyright@ 2023</p></div>
           </footer>
           <!--Mobile screen-->
           <footer class="sticky-footer topnav d-block  d-sm-none ">
            <div class="container">
              <div class="row ">
                
                   <div class="mob-hopnav col-6 text-right">
                           <a href="loginhome.php">Care</a>
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



