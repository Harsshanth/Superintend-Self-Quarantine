<!DOCTYPE html>
<html>
    <head>
       <title>Health Status</title>
       <link rel="stylesheet" href="css/health.css">
       
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

    </head>
    <body>
    <p id="head">Health Status</p>
<header id="header"></header>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
        

        <?php 
            $conn=new mysqli('localhost','root','','patient_details');
            if($conn->connect_error){
               die('Connection failed:'.$conn->connect_error);
           
            }
            else{
                
               
            $sql = "SELECT * FROM health";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                $array=array();
                $aadhar=$_COOKIE["aadhar_card"];
                while($row = $result->fetch_assoc()) {
                    if($row['AADHAR']==$aadhar){
                      
                        $array['date']=$row['DATE'];
                        $array['temp']=$row['TEMPERATURE'];
                        $array['height']=$row['HEIGHT'];
                        $array['weight']=$row['WEIGHT'];
                        $array['breathing_trouble']=$row['BREATHING_TROUBLE'];
                        $array['fever']=$row['FEVER'];
                        $array['cold']=$row['COLD'];
                        $array['cough']=$row['COUGH'];
                        $array['head_ache']=$row['HEADACHE'];
          
                    }
                }
              } else {
                echo "0 results";
              }
              $conn->close();
            }
            ?>
        
         <table id="table" class="centre" CELLPADDING="11"  CELLSPACING="3" >
            <tr>
                <td>Date:</td>
                <td> <?php echo $array['date']?></td>
              </tr>
           
              <tr>
                <td>Height(in cms) :</td>
                 <td>
                 <?php echo $array['height']?>
                 </td>
              </tr>
              <tr>
                <td>Weight(in kgs) :</td>
                <td> 
                <?php echo  $array['weight'] ?>
                </td>
               
              </tr>
              <tr>
                <td>Breathing trouble :</td>
                <td> 
                <?php echo  $array['breathing_trouble'] ?>
                </td>
                
              </tr>
              <tr>
                <td>Fever :</td>
                <td> 
                <?php echo $array['fever'] ?>
                </td>
               
              <tr>
                <td>Temperature (in cels) :</td>   
                <td>
                  <?php echo $array['temp'] ?>
                </td>       
              </tr>
              </tr>
              <tr>
                <td>Cough:</td>
                <td>
                <?php echo $array['cough'] ?> </td>
               
              </tr>
              <tr>
                <td>Head ache :</td>
                <td>
                <?php echo $array['head_ache'] ?> </td>
                
              </tr>
              <tr>
                <td>cold :</td>
                <td> 
                <?php  echo $array['cold'] ?>
                </td>
               
              </tr>
              
         </table>




    </body>
</html>