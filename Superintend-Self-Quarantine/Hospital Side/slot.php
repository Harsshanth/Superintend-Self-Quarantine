<?php
 $conn=new mysqli('localhost','root','','patient_details');
 if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);

 }

    else{
     $aadhar=$_COOKIE["aadhar_card"];
    // echo  $aadhar;
  
      $array=array();
      $sql = "SELECT * FROM covid_test";
      $result = $conn->query($sql);
      
  
      if ($result->num_rows > 0) {
      
          while($row = $result->fetch_assoc()) {
              if($row['aadhar']==$aadhar){
                  $array['hospital_name']=$row['hospital_name'];
             
                  $array['date']=$row['date']; 
                  //$sq="insert into covid_status(time)values('10:00')";                 
              }
          }
        }
        $conn->close();
          
        }
       
       // echo "<script>alert('Incorrect login credentials');</script>";
        //header('Location: http://localhost:8080/patient_details/patient_list.php');     
    

?>