
<?php
 $conn=new mysqli('localhost','root','','patient_details');
 if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);

 }
 else{
   $prescription=$_POST['prescription'];
    $aadhar=$_COOKIE["aadhar_card"];
  

   $sq="SELECT * FROM prescription where AADHAR='$aadhar'";
   $result = $conn->query($sq);

   if ($result->num_rows > 0) {
  
     $sql = "UPDATE prescription SET prescription='$prescription' WHERE AADHAR='$aadhar'";
   }
     else{
      $sql="insert into prescription(aadhar,prescription) values('$aadhar','$prescription')";   
     }
     


    if ($conn->query($sql) === TRUE) {
     
      echo "<script>alert('Record updated successfully');</script>";
       header('Location: prescription.html');
     
    } else {
      echo "<script>alert('Error updating record.Try again after sometime');</script>";
    }
    
    $conn->close();
    
 
 }
?>