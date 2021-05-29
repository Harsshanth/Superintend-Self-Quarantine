<!DOCTYPE html>
<html >
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
        <meta name="viewport" contents="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/Patient Side/css/contactstyle.css">
        <title> Contact info </title>
        </meta>
    </head>

    <body>
        <header id="header"></header>
        <div class="container">
            <div class="contactinfo">
                <div>
                    <h2> CONTACT INFO </h2>
                </div>

                <div>
                    <ion-icon name="call" class="nav_icon" ></ion-icon> 
                    <span class="nav_name"> Helpline Number : +91-11-23978046 </span>
                </div>
                        
                <div>
                    <ion-icon name="call" class="nav_icon"></ion-icon> 
                    <span class="nav_name"> Toll Free : 1075 </span>
                </div>
        
                <div>
                    <ion-icon name="call" class="nav_icon"></ion-icon> 
                    <span class="nav_name"> Tamil Nadu Covid 19 Helpline : 044-29510500 , 25615025 , 28414513 , 28593990 </span>
                </div>
          
                <div>
                    <ion-icon name="mail-open" class="nav_icon"></ion-icon> 
                    <span class="nav_name"> Helpline Email ID : ncov2019@gov.in </span> 
                </div> 

                <div>
                    <form  method = "post" >
                    <label> Enter your location's pincode : </label>
                    <input type="text" placeholder="pincode" name="pin" id="pincode">
                    
                    
                    <input type="submit" name="btn" >
                    </form>
                    <?php
                        
                        if(isset($_POST["btn"])){
                            
                            $pin = $_POST["pin"];
                            setcookie("pin_code", $pin, time() + (86400 * 30), "/");
                            header("Location:hospitalinfo.php");
                        }
                       

                    ?>
                    
                </div> 
            </div>
        </div>

        
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </body>