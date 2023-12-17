<?php
   session_start();
   $display = 0;
    $con = mysqli_connect("localhost","root","","projectweb");
   if(!empty($_SESSION["id"])){
      $id = $_SESSION["id"];
      $result = mysqli_query($con,"select *from user where id ='$id'");
      $row = mysqli_fetch_assoc($result);
      if($row['id'] == $id){
        $display = 1;
      }else{
        header("Location: login.php");
      }
      
   }
   else{
      header("Location: login.php");
   }
    
    
    ?>

<html>
 <head>
         <title>Product Add</title>
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
               <a href="loginhome.php"> <img id="logo" src="imege/logo.png"></img> </a>
          
         
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
         
          <div class="wrapper">
      <div class="container">
        <div class="">
          <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
            <form action="" method="POST" class="rounded bg-white shadow p-5" enctype="multipart/form-data">
           <div class="bg-warning"> 
            
           <?php




if(isset($_POST['submit'])){
   
$image= $_FILES['image']['name'];
$name=$_POST['name'];
$price = $_POST['price'];
$code = $_POST['p_code'];
$stock = $_POST['stock'];
$discount = $_POST['discount'];
$size = $_POST['size'];
$detail = $_POST['detail'];

$dublicate=mysqli_query($con,"select *from product where p_code ='$code'");

if(mysqli_num_rows($dublicate) > 0){
   echo"The Product is Already added";
  
}
else{
$query="insert into product values('','$image','$name','$price','$code','$stock','$discount','$size','$detail')";
$ins = mysqli_query($con,$query);

$path= "upload/".basename($image);
move_uploaded_file($_FILES['image']['tmp_name'],$path);
	

if($ins)
echo "Product is Added";
else
echo "Product is Not Added";

}


}
?>
  </div>
              <div>
                <h1 class="text-dark fw-bolder fs-4 mb-3">Add Product</h1>
              </div>
              <div class=" mb-3">
               <label for="image">Select Product Image</label>
                <input type="file" class="form-control" name="image"  >
                
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="floatingInput" placeholder="">
                <label for="floatingInput">Product Name</label>
              </div>
              <div class="form-floating md-3 text-left">
              <div class="form-check ">
                <input class="form-check-input" type="radio" value="Y" name="stock" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                in Stock (Y)
                </label>
                
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="N"  name="stock" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                in Stock (N)
                </label>
              </div>
              </div>
              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingprice" name="price" placeholder="">
                <label for="floatingprice">Price</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingcode" name="p_code" placeholder="" >
                <label for="floatingcode">Product Code</label>
              </div>
              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingdiscount" name="discount" placeholder="">
                <label for="floatingdiscount">Product Discount </label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingsize" name="size"placeholder="" >
                <label for="floatingsize">Product Size </label>
              </div class="form-floating mb-3">
              <textarea name="detail" id="" cols="30" rows="10" placeholder="Enter Product Detail"></textarea>
              <div>
                <input type="submit" value="Add Product" name="submit" class="btn btn-primary submit_btn w-100 mb-3 ">
              </div>
             
            </form>
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

