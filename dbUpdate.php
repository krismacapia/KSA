<?php
  
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'email/Exception.php';
    require 'email/PHPMailer.php';
    require 'email/SMTP.php';
     date_default_timezone_set ('Asia/Manila');
     
      $conn = mysqli_connect("localhost", "root", "", "COFFEE_DB");
      /* check connection */
      if (mysqli_connect_errno()) {
          printf("Connect failed: %s\n", mysqli_connect_error());
          exit();
      }
      $id = $_GET['id'];
      $action = $_GET['action'];
      $timenow = date("Y-m-d H:i:s");
      $sql = "UPDATE booking Set status='CLOSE', last_updated_dt='$timenow' where id='$id'";

      if($_GET["action"] == "cancel"){

        $sql = "UPDATE booking Set status='CANCEL', last_updated_dt='$timenow' where id='$id'";
      }

      if (mysqli_query($conn, $sql)) {
        $sql = "SELECT * FROM booking where id='$id'";
        $result = mysqli_query($conn,$sql);
        $row = $result->fetch_assoc();
        $time = date("g:i A", strtotime($row["book_time"]));
        if($_GET["action"] == "cancel"){
            echo "Booking has been cancelled";
           $mes = '<div>
                        <center><img alt="Bootstrap Image Preview" style="height:180px;"src="https://ksaproject2.000webhostapp.com/assets/img/logo/coffee1.png" class="rounded-circle">
                            <h2>
                              Hi '.$row["full_name"].'
                            </h2>
                            <p>
                              Your booking for the DATE: <strong>'.$row["book_date"].'</strong> and TIME: <strong>'.$time.'</strong> has been CANCELLED.
                            </p>
                            <p>
                            <a style="background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display:inline-block;font-size: 16px;"class="btn btn-primary btn-large" target="_blank" href="https://ksaproject2.000webhostapp.com/index.php">Coffee House</a>
                            </p>
                            <br>
                            <p>This is automated reply, dont reply to this email.</p>
                            </center>
                          </div>';
            sendingEmail($mes, $row['email']);
          }else{
            echo "Booking has been confirmed";
          $mes = '<div>
                        <center><img alt="Bootstrap Image Preview" style="height:180px;"src="https://ksaproject2.000webhostapp.com/assets/img/logo/coffee1.png" class="rounded-circle">
                            <h2>
                              Hi '.$row["full_name"].'
                            </h2>
                            <p>
                              Your booking for the DATE: <strong>'.$row["book_date"].'</strong> and TIME: <strong>'.$time.'</strong> has been CONFIRMED.
                            </p>
                            <p>Please contact us ahead of time, if you gonna cancel your booking.</p>
                            <p>
                            <a style="background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display:inline-block;font-size: 16px;"class="btn btn-primary btn-large" target="_blank" href="https://ksaproject2.000webhostapp.com/index.php">Coffee House</a>
                            </p>
                            <br>
                            <p>This is automated reply, dont reply to this email.</p>
                            </center>
                          </div>';
            sendingEmail($mes, $row['email']);
          }
      } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);
      function sendingEmail($message, $emailSend){
        $email = "ksacoffeehouseproject@gmail.com";
        $password = "092011@kri@nnY";
        $to_id = $emailSend;
        $message = $message;
        $subject = "Booking";
        $mail = new PHPMailer(true);        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 25;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = $email;
        $mail->Password = $password;
        $mail->setFrom($email, 'COFFEE HOUSE');
        $mail->addAddress($to_id);
        $mail->Subject = $subject;
        $mail->msgHTML($message);
        if (!$mail->send())
        {
        // echo $mail->ErrorInfo;
         echo '!  Email Not Sent.'; 
        }
        else
        {
        echo '!  Email Sent.';
        }
      }
 ?>