<!DOCTYPE html>
<html lang="en">
    <?php
include_once("connection.php");
$aadhar=$_COOKIE["user_name"];
$sql = "SELECT * FROM covid_test;";
$result = $conn->query($sql);
            
if ($result->num_rows > 0) {
  $array=array();

  // echo "$aadhar";
  while($row = $result->fetch_assoc()) {
    if($row['aadhar']==$aadhar){
      $array['hospital_name']=$row['hospital_name'];
      $array['date']=$row['date'];
      $array['time']=$row['time'];
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
    <title>Covid Test</title>
    <link rel="stylesheet" href="/Patient Side/css/timestyle.css"> 

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
</head>

<body>

    <header id="header"></header>
    <div class="container">
        <div class="container-time">
            <h2 class="heading">Time Slot</h2>
            
            <div class="form-field">
                <label> <b> Hospital name : </b> </label>
                <label> <?php echo $array["hospital_name"]; ?> </label> 
            </div>

            <div class="form-field">
                <label> <b> Date : </b> </label>
                <label> <?php echo $array["date"]; ?> </label> 
            </div>

            <div class="form-field">
                <label> <b> Time : </b> </label>
                <label> <?php echo $array["time"]; ?> </label>    
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>