<?php


error_reporting(0);
session_start();

if(isset($_GET["id"])){


$id=$_GET["id"];

$conn=mysqli_connect('localhost','root','','tolldb');

 if(!$conn ) {
      die('Could not connect');
   }
   
 $sql2 = "UPDATE user SET verified=1 WHERE id='$id'";
    $retval2 = mysqli_query( $conn, $sql2 );
   
   if(! $retval2) {
      die('Could not update data');
   }
   
    
mysqli_close($conn);



}

header("Location: _admin.php");

?>