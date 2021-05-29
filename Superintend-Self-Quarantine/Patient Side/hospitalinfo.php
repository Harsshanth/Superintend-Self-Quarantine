<?php
include_once 'connection.php';
$pin = $_COOKIE["pin_code"];
$result = mysqli_query($conn,"SELECT * FROM hospital_info WHERE pincode = $pin ");
?>

<!DOCTYPE html>
<html>
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

   <link rel = "stylesheet" type = "text/css" href = "/Patient Side/css/hospitalstyle.css"> 
 <title> Requests</title>
 </head>
<body>
  <header id = "header"> </header>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<form>
  <table>
  
  <tr>
    <td>Hospital_Name</td>
    <td>Address</td>
    <td>Contact 1 </td>
    <td>Contact 2</td>
    <td>Email</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["hospital_name"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["contact_no1"]; ?></td>
    <td><?php echo $row["contact_no2"]; ?></td>
    <td><?php echo $row["email"]; ?></td>

</tr>
<?php
$i++;
}
?>
</table>
</form>
 <?php
}
else{
    echo "No result found";
}
?>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
 </body>
</html>