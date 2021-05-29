<?php
include_once("connection.php");
          
// Taking all 5 values from the form data(input)
$aadhar = $_COOKIE["user_name"];
$data = $_POST["date"];
$height = $_REQUEST['height'];
$weight =  $_REQUEST['weight'];
$breathing_trouble = $_REQUEST['breathing'];
$fever = $_REQUEST['fever'];
$temp = $_REQUEST['temp'];
$cough = $_REQUEST['cough'];
$head_ache = $_REQUEST['head'];
$cold = $_REQUEST['cold'];


$sq="SELECT * FROM health where AADHAR='$aadhar'";
   $result = $conn->query($sq);

   if ($result->num_rows > 0) {
        $sql="update health SET DATE='$data' ,HEIGHT='$height' ,WEIGHT='$weight' , BREATHING_TROUBLE='$breathing_trouble',FEVER ='$fever',TEMPERATURE='$temp' ,COUGH='$cough' , HEADACHE='$head_ache', COLD = '$cold' where AADHAR='$aadhar'";
   }
   else {
        $sql = "INSERT INTO health  VALUES ('$aadhar','$data','$height','$weight','$breathing_trouble','$fever','$temp','$cough','$head_ache','$cold')";
   }


if(mysqli_query($conn, $sql)){
    header("Location: main.html");
}
mysqli_close($conn);
?>