<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/personalstyle.css">
       
        <meta charset="UTF-8">
        <meta name="viewport" contents="width=device-width, initial-scale=1.0">
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
    <header id="header"></header>
      <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
       <!-- <h1 id="info">Patient Information</h1>-->
       
            <?php 
            $conn=new mysqli('localhost','root','','patient_details');
            if($conn->connect_error){
               die('Connection failed:'.$conn->connect_error);
           
            }
            else{
             //   $name='Karnika';
            $sql = "SELECT * FROM Users";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                $array=array();
                $aadhar=$_COOKIE["aadhar_card"];
             
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
              } else {
                echo "0 results";
              }
              $conn->close();
            }
            ?>

    <!-- <table id="table">
               
                <br><tr><b>Name:</b><?php echo $array['name'] ?><br></tr>
                <br><tr><b>Aadhar Number:</b><?php echo $array['aadhar'] ?><br></tr>
                <br><tr><b>Date of Birth:</b><?php echo $array['dob'] ?><br></tr>
                <br><tr><b>Age:</b><?php echo $array['age'] ?><br></tr>
                <br><tr><b>Address:</b><?php echo $array['address'] ?><br></tr>
                
                <br><tr><b>Mobile Number:</b><?php echo $array['mobile_num'] ?><br></tr>
                            
        </table>-->
        

    <header id="header"></header>
    <h1 style="text-align: center;"> Personal Info</h1>
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