<!DOCTYPE html>
<html>

<head>
<?php include 'slot.php'; ?> 
      <script
      
      src="https://code.jquery.com/jquery-3.3.1.js"
      src="jquery.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
  </script>
  <script> 
      $(function(){
      $("#header").load("dashboard_ori.html"); 
      });
  </script>
 
        <title>Covid test</title>
        <link rel="stylesheet" href="css/covid_test.css">        
    </head>
   
<body>
  
<header id="header"></header>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <h1 style="color:blue;">Covid slot</h1>

   
   
    <div class="container">
      <table>
          <tr>
            <td><h2><label> <b> Hospital name : </b> </label></td>
            <label><td><b> <?php echo $array["hospital_name"]; ?><b> </label> </h2></td>
    </tr>
                  
          <tr>
            <td><h2><label> <b> Date : </b></label> </td>
            <td><label> <b><?php echo $array["date"]; ?> <b></label> </h2></td>
    </tr>
    

 <form action="time_set.php" method="POST">
 <tr>
<td> <h2><label> <b> Time  : </b></label></td>
 <td><label><input type="text" name="slot_time" id="slot_time" style="text-align: center;"></input></label></td>
 </tr>
   <br>   </table>
   <button id="set" >SET</button>
   </form>
   <br>
   </div>
   
</body>

</html>