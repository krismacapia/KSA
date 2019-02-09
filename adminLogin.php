<?php
session_start();
if (isset($_SESSION['user'])) {
   echo "<script> location.href='BookingAdmin.php'; </script>";
   exit();
 }else{

?>
<!DOCTYPE html>
<html lang="en">

  	<head>
      	<meta charset="utf-8" />
     	  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo/coffee1.png">
      	<link rel="icon" type="image/jpeg" href="assets/img/logo/coffee1.png">
      	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        
        <title>CoffeeHOUSE</title>

      	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!--     Fonts and icons     -->
      	<link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins|Kaushan+Script|Pacifico|Major+Mono+Display|Days+One" rel="stylesheet">
      	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
      <!-- CSS Files -->
       <!-- CSS Files -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="./assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
        
        <style type="text/css">
        
        input[type=text], input[type=password] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        background-color: #000000;
        color: #888888;
        }

        button[type=submit] {
        padding: 10px 50px 10px 50px;
        }

        .login {
            padding: 100px 400px 50px 300px;
        }
          
          /*Media Querie*/
          @media only screen and (max-width : 768px){
            .login {
            padding: 120px 50px 50px 50px;
            }

          }
        </style>
  	</head>

  	<body>
      <!-- Navbar -->
    <?php include 'navbar.php';?>
    <div class="section section-head" style="background-image: url('assets/img/bg/menu.jpg');">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

      <div class="login text-center">
        <div class="imgcontainer">
          <img src="assets/img/logo/avatar.png" alt="Avatar" class="avatar" width="80px" height="80px">
          </div>
        <form method="post">
        <div class="login-form">      
          <input type="text" name="username" autofocus placeholder="Username" required><br>
          <input type="password" name="password" placeholder="Password" required>
          <br>
          <button type="submit" name="save" class="btn btn-primary btn-simple">Login</button>

              <?php
                $conn = mysqli_connect("localhost", "root", "", "COFFEE_DB");
                            /* check connection */
                if (mysqli_connect_errno()) {
                    printf("Connect failed: %s\n", mysqli_connect_error());
                    exit();
                }
             
               if(isset($_POST["save"])){                
                $myusername = $_POST['username'];
                $mypassword = md5($_POST['password']); 
                
                $sql = "SELECT id FROM user_login WHERE username = '$myusername' and password = '$mypassword'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                $active = $row['id'];
                $count = mysqli_num_rows($result);
                
                if($count == 1) {
                   $_SESSION['user'] = $myusername;
                   $_SESSION['success'] = true;
                   echo "<script> location.href='BookingAdmin.php'; </script>";
                   exit();
                }else {
                   echo " <br> Your Login Name or Password is invalid";
                }
             }
          ?>
          </form>
          </div>
        </div>
      </div>
</div>
<?php require 'footer.php';?>
  </body>

</html>

<?php } ?>