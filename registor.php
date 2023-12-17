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
        <div class="">
          <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
            <form action="" method="POST" class="rounded bg-white shadow p-5">
           <div class="bg-warning"> 
            
  <?php 
  $con = mysqli_connect("localhost","root","","projectweb");
  if(isset($_POST['submit'])){
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $gender =$_POST['gender'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $confirm =$_POST['confirm'];
    $dublicate = mysqli_query($con,"select *from user where email='$email' ");
    if(mysqli_num_rows($dublicate) > 0){
      echo "<p>Email Already Registor</p>";
      
    }
    else{
      if($password==$confirm){
    $query ="insert into user  values('','$fname','$lname','$gender','$email','$password')";
    $result = mysqli_query($con,$query);
    if($result){
      header("location: login.php");
    }
  }
  else{
      echo"Password is Not Match";
    }  
  
   
    }
   
  }
  ?> 
  </div>
              <div>
                <h1 class="text-dark fw-bolder fs-4 mb-3">Registor</h1>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="fname" id="floatingfname" >
                <label for="floatingfname">Frist Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="lname" id="floatinglname" >
                <label for="floatinglname">Last Name</label>
              </div>
              <div class="form-floating md-3 text-left">
              <div class="form-check ">
                <input class="form-check-input" type="radio" value="Male" name="gender" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                  Male
                </label>
                
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" value="Female" name="gender" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Female
                </label>
              </div>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="confirm" placeholder="Password">
                <label for="floatingPassword">Confirm Password</label>
              </div>
              
              <div>
                <input type="submit" value="Registor" name="submit" class="btn btn-primary submit_btn w-100 mb-3 ">
              </div>
              <div class="fw-normal text-muted mb-4">
                Already account? <a href="login.php" class="text-primay fw-bold text-decoration-none">Sign</a>
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