<!DOCTYPE html>
<html>
    <?php 
    include_once("connection.php");
    $aadhar=$_COOKIE["user_name"];
    $sql = "SELECT * FROM prescription";
    $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          $array=array();
          // $aadhar=$_COOKIE["aadhar_card"];
          while($row = $result->fetch_assoc()) {
          if($row['AADHAR']==$aadhar){
            $array['prescription']=$row['PRESCRIPTION'];
      }}
    } else 
    {
      echo "0 results";
    }
      $conn->close();
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
        <title>Prescriptions</title>
        <link rel="stylesheet" href="/Patient Side/css/prescriptionstyle.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
</head>

<body>
    <header id="header"></header>
    <h1> Prescriptions </h1>
      
        <textarea disabled id="medicine" cols="60" rows="20"> <?php echo $array['prescription']?> </textarea>
      
      <h3> II. Steam Inhalation : 2 times a day </h3>
      
      <h3> III. Pulse Oximeter : </h3>
      <p> Normal oxgen saturation is 97% to 100%
      <br>Check three times a day 
      <br>If having breathing trouble, inform the doctor </p>
      
      <h3> IV. Food : </h3>
      <p> 1. Take protien rich diet and fruits(citrus rich).
          <br> 2. Eat fresh and unprocessed food.
          <br> 3. Eat dry fruits and eggs.
          <br> 4. Drink enough warm water everyday.
          <br> 5. Eat moderate amounts of fat and oil.
          <br> 6. Drink milk with turmeric in the night.
      </p>

      <h3> V. Regular Exercise/ Yoga/ Meditation (45 mins) </h3>
      <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>
</html>
      