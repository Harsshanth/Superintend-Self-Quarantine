<?php
 $conn=new mysqli('localhost','root','','patient_details');
 if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);

 }
 else{
    $hospital_id=$_POST['username'];
    $dob=$_POST['password'];
    echo "$hospital_id";
    echo "$dob";


    $sql = "SELECT * FROM doctor_login";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
            if($row['hospital_name']==$hospital_id){


            if( $row['password']==$dob ){
                header('Location: patient_list.php');
            }
        }
        }
        echo "<script>alert('Incorrect login credentials');</script>";
              
 }
}
?>