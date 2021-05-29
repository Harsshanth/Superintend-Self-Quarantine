<?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select AADHAR,DOB from users where AADHAR = '$username' and DOB = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if($count == 1){  
            
            // header("Location: main.html");
            $sql = "select USERNAME from patient_login  where USERNAME = '$username' ";  
            $results = mysqli_query($conn, $sql);  
            $rows = mysqli_fetch_array($results, MYSQLI_ASSOC);  
            $counts = mysqli_num_rows($results);  

            if($counts == 1){

                setcookie("user_name", $username, time() + (86400 * 30), "/");
                header("Location: main.html");
            }
            else{  
               
                header("Location: login.html");
            } 
         }  
         else{  
               
             header("Location: login.html");
         }     
 ?>