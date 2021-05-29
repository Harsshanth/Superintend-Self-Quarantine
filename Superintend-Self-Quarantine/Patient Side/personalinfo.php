<!DOCTYPE html>
<html>
<?php
include_once("connection.php");
$aadhar=$_COOKIE["user_name"];
$sql = "SELECT * FROM Users;";
$result = $conn->query($sql);
            
if ($result->num_rows > 0) {
  $array=array();

  // echo "$aadhar";
  while($row = $result->fetch_assoc()) {
    if($row['AADHAR']==$aadhar){
      $array['aadhar']=$row['AADHAR'];
      $array['name']=$row['NAME'];
      $array['address']=$row['ADDRESS'];
      $array['age']=$row['AGE'];
      $array['mobile_num']=$row['MOBILE_NUMBER'];
      $array['dob']=$row['DOB'];
    }
  }
}
?>

<head>
        <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous">
        </script>
        <script> 
            $(function(){
            $("#header").load("dashboard.html"); 
            });
        </script> 
        <meta charset="UTF-8">
        <title>Personal Info</title>
        <link rel="stylesheet" href="/Patient Side/css/personalstyle.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
</head>

<body>
    <header id="header"></header>
    <h1> Personal Info</h1>
        <div class="container">
          <div>
            <label> <b> Aadhar Number : </b> </label>
            <label> <?php echo $array["aadhar"]; ?> </label> 
          </div>
                  
          <div>
            <label> <b> Name : </b></label> 
            <label> <?php echo $array['name']; ?> </label> 
          </div>
                  
          <div> 
            <label> <b> Date of Birth : </b></label>
            <label> <?php echo $array['dob']; ?> </label>  
          </div>
      
          <div>
            <label> <b> Age : </b></label>
            <label> <?php echo $array['age']; ?> </label> 
          </div> 
      
          <div>
            <label> <b> Address : </b></label>
            <label> <?php echo $array['address']; ?> </label> 
          </div>
                  
          <div>
            <label> <b> Mobile No : </b></label> 
            <label> <?php echo $array['mobile_num']; ?> </label>  
          </div>
        </div>
    </form>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>
</html>
