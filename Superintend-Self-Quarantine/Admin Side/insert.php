
<?php
 $conn=new mysqli('localhost','root','','patient_details');
 if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);

 }
 else{
   $aadhar=$_POST['aadhar_entry'];
    $stm=$conn->prepare("insert into patient_login (USERNAME) values (?);");
    
    $stm->bind_param("s",$aadhar);
    $stm->execute();
    $stm->close();
    header("Location:index.html");
 }
 
?>



