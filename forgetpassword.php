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
        <a href="Home.html"> <img id="logo" src="imege/logo.png"></img> </a>
   
  
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
        <div class="">
          <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
            <form action="" method="POST" class="rounded bg-white shadow p-5">
           <div class="bg-warning"> 
            
  <?php 

$con = mysqli_connect("localhost","root","","projectweb");

  
  if(isset($_POST['submit'])){
    $email1 =$_POST['email'];
    $query="select *from user where email='$email1'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){
    
    
      $fname = $row['fname'];
      $lname = $row['lname'];
      
      
     
      }
    
    $fname1 =$_POST['fname'];
    $lname1 =$_POST['lname'];
    $password =$_POST['password'];
    $confirm =$_POST['confirm'];

      if( $fname1 == $fname){
        if( $lname1 == $lname){
          if($password==$confirm){
            $query ="update user set password='$password' where email='$email1'";
            $result = mysqli_query($con,$query);
            if($result){
              echo"Password is Change Now Sign in";
             
            }
              }
              else{
                  echo"Password is Not Match";
                  header("Refresh:2");
                  
                } 
      }
      else{
        echo"Last name Wrong";
        header("Refresh:2");
      }
    }
      else{
        echo"Frist Name Wrong";
        header("Refresh:2");
      } 
    
   
  }
  else{
    echo"Email is Not Registor";
    header("Refresh:2");
  }
  }
  ?> 
  </div>
              <div>
                <h1 class="text-dark fw-bolder fs-4 mb-3">Change Your password</h1>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="fname" id="floatingfname" placeholder="">
                <label for="floatingfname">Enter Your Frist Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="lname" id="floatinglname" placeholder="">
                <label for="floatinglname">Enter Your Last Name</label>
              </div>
          
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">New Password</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="confirm" placeholder="Password">
                <label for="floatingPassword">Confirm Password</label>
              </div>
              
              <div>
                <input type="submit" value="Change Now" name="submit" class="btn btn-primary submit_btn w-100 mb-3 ">
              </div>
              <div class="fw-normal text-muted mb-4">
                Already Change? <a href="login.php" class="text-primay fw-bold text-decoration-none">Sign</a>
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