<?php  

$conn=new mysqli('localhost','root','','patient_details');
 if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);

 }
 else{
        
         $aadhar=$_POST['aadhar1'];
        setcookie("aadhar_card", $aadhar, time() + (86000), "/");
       // echo  $aadhar;
        header('Location: patient_info.php');
        


      
 }

  ?>
