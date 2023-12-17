<html>
 <head>
         <title>Contact us</title>
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
  <header class="bg-white">
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


  <div class="container form1">
    <div class="row ">
      <div class="col-md-6 formbg">
        <form action="" method="post"  >
        <div >
          <h2>Contact Us Here</h2>
        </div>
        <div class="form-group">
          <input type="text" placeholder="Name" class="form-control">
          </div>
        <div class="form-group">
          <input type="email" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
          <input type="text" placeholder="Phone" class="form-control">
          
        </div>

        <div>
         <label for="" class="text-dark font-weight-bold">Select Your Country</label>
        <select name="country" id="" class="form-control">
          <option value="">Pakistan</option>
          <option value="">India</option>
          <option value="">Afghanistan</option>
          <option value="">Other</option>
          
        </select>
        
        </div>
        <div class="form-group " style="padding-top: 10px;">
          <textarea name="Message" class="form-control"  rows="5" placeholder="Message"></textarea>
        </div>
        <div class="form-group submitB">
          
          <button class="form-control ">Submit</button>
        </div>
      </div>
    </form>
      <div class="col-md-6">
        <div>
          <img src="imege/img-6.png" alt="" style="width: 100%;height: 100%;">
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
                 <a href="contact.php">143-E Iqbal town</a>
            </div>
      
            </div>
            <div style="clear: both;"><p class="text-center font-weight-light" style="color: #ddd;">copyright@ 2023</p></div>
 </footer>
 <!--Mobile screen-->
 <footer class="sticky-footer topnav d-block  d-sm-none ">
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

