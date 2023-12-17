<?php
session_start();
$con = mysqli_connect("localhost","root","","projectweb");
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($con,"select *from user where id ='$id'");
  $row = mysqli_fetch_assoc($result);
  if($row['id'] != $id){
     header("Location: login.php");
  }

$id=$_REQUEST['id'];
$query = "DELETE FROM product WHERE id='$id'"; 
$result = mysqli_query($con,$query) ;
header("Location: product_list.php"); 
exit();
}else{
  header("Location: login.php");
}
?>