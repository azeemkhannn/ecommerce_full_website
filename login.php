<?php
   session_start();
    $con = mysqli_connect("localhost","root","","projectweb");
   if(!empty($_SESSION["id"])){
      $id = $_SESSION["id"];
      $result = mysqli_query($con,"select *from user where id ='$id'");
      $row = mysqli_fetch_assoc($result);
      
      if($row['id'] == $id){
         header("Location: home.php");
      } 
      
   }
  
   ?>

<html>
    <head>
        <title></title>
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
   
  
   <nav>
       <div class="topnav">
          <a  href="home.php">Home</a>
          <a href="product.php">Products</a>
          <a href="Contact.php">Contact</a>
          <a href="about.php">About</a>
          <a href="login.php">Sign</a>

          </div>
      
      </nav> 
      </header> 

      <div class="wrapper">
      <div class="container">

          <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
            <form  method="POST" class="rounded bg-white shadow p-5">
              <div class="bg-warning">
<?php
$forget_button = 0;
$con = mysqli_connect("localhost","root","","projectweb");
if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];
$result = mysqli_query($con, "select * from user where email ='$email'");
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) > 0){
  if($password == $row['password']){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $row['id'];
    header("Location: home.php");
  }
  else{
    echo"Wrong Password";
    header("Refresh:2");
    
  }
}
else{
  echo"User Not Registor";
  header("Refresh:2");
}

}

?>

</div>           


              <div>
                <h1 class="text-dark fw-bolder fs-4 mb-2">Sign In</h1>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="mt-2 text-end">
                
                <a href="forgetpassword.php" class="text-primary fw-bold text-decoration-none">Forget Passwoed</a>
               
                </div>
              <div>
                <input type="submit" value="Sign In" name="submit" class="btn btn-primary submit_btn w-100 mb-3 ">
              </div>
              <div class="fw-normal text-muted mb-4">
                New Here? <a href="registor.php" class="text-primay fw-bold text-decoration-none">Registor</a>
              </div> 
            </form>
          </div>

        
      </div>
      </div>

     <footer class="sticky-footer topnav d-none  d-sm-block ">
        <div class="row ">
          
             <div class="hopnav">
                    <a  href="home.php">Care</a>
                     <a href="about.php">About</a>
                     <a href="#">+9231-1000999</a>
                     <a href="Contact.php">143-E Iqbal town</a>
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