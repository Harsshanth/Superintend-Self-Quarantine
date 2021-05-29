<?php 

$conn=new mysqli('localhost','root','','patient_details');

 $slot_time=$_POST['slot_time'];
 $aadhar=$_COOKIE["aadhar_card"];
 $res = mysqli_query($conn, "UPDATE covid_test SET time='$slot_time' WHERE  aadhar='$aadhar'");
 
 header('Location: covid_test.php');
?>