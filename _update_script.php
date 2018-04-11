<?php

error_reporting(0);
session_start();

if(isset($_POST["uid"]) && isset($_POST["v_num"]) && isset($_POST["dl_num"]) && isset($_POST["dob"]) && isset($_POST["city"]) && isset($_POST["state"]) && isset($_POST["phone"])){

$id=$_SESSION["id"];
$uid=$_POST["uid"];
$vnum=$_POST["v_num"];
$dlnum=$_POST["dl_num"];
$dob=$_POST["dob"];
$city=$_POST["city"];
$state=$_POST["state"];
$phone=$_POST["phone"];


$conn=mysqli_connect('localhost','root','','tolldb');

 if(!$conn) {
      die('Could not connect');
   }
   


    $sql2 = "UPDATE user SET updated=1 WHERE id='$id'";
    $retval2 = mysqli_query( $conn, $sql2 );
   


   $sql = "INSERT INTO details VALUES ('$id','$uid','$vnum','$dlnum','$city','$state','$phone','$dob')";



   $retval = mysqli_query( $conn, $sql);
   
   if(!$retval) {
      die('Could not enter data');
   }
   
  
   
   mysqli_close($conn);

   header("Location: dashboard.php");
   die();
   }
   header("Location: dashboard.php");

?>