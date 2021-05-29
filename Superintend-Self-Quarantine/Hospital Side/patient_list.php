<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="css/dashboardstyle.css">
        <link rel="stylesheet" href="css/record.css">
        <style type="text/css">
        <?php include 'patient.php'; ?> 
table
{
width: 10cm;
height: 2cm;
  
border-width:7px;
border-color: black;
} 
table tr:nth-child(odd){ 
		background: #e1e8f1;
	}
table tr:nth-child(even){
		background: #85b4f5;
	}

body{
  background-image:url("\\Hospital Side/img/medical-record-2.jpg");
  background-position: center;
  background-size: cover;

 }

        </style>  
    </head>
    <body>
           <h1 id="patient_head"> Patients Record</h1>

         <!--  <div id="container">
  
  <TABLE  WIDTH="200%"   CELLPADDING="10"  CELLSPACING="5">-->

           <?php 
            $conn=new mysqli('localhost','root','','patient_details');
            if($conn->connect_error){
               die('Connection failed:'.$conn->connect_error);
           
            }
            else{
                $count=0;
              #  echo "<b><th id='heading'> Patient Records</th></b><br>";  
            $sql = "SELECT * FROM Users";
            $result = $conn->query($sql);
            $i=0;
            
            if ($result->num_rows > 0) {
                $array=array();
                $i++;
               echo "<table border='1'>";
               
                while($row = $result->fetch_assoc())
                {
                    $array=$row['AADHAR'];
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td id='$array' class='rows' > $array</td>\n";
                    echo "</tr>";
                    $i++;
                    echo "<br><br><br>";
        
                }
                echo "</table>";
            }
        
               
            else {
              echo "0 results";
            }
        
          
            $conn->close();
          }
          
                    ?>
  </TABLE>
<br>
<br>
<form action="show_info.php" method="POST">
  <p id="title"><h3>Type aadhar number:</h3>
  
  <input type="text" name="aadhar1" id="aadhar1" style="padding: 1cm;  text-align: center;" ></p>
 
 
  <br>
  <button name="show_info" >SHOW INFO</button>
  
  </form> 
</p>
  <br>

  
  
        </div>
        <script>
        function pg_change(){
          window.location="patient_info.php";
        }
</script>


<body id="body-pd">
            <div class="navigation" id="navbar">
              
         <nav class="nav">
            <div>
           <a href="login.html" class="nav_link">
            <ion-icon name="log-out" class="nav_icon" style="padding-top: 13cm;"></ion-icon>
            <span class="nav_name">Logout</span>
        </a>

    </nav>
</div>


</body>
    <!--<script src="patient_rec.js"></script>-->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </html>