<?php
      date_default_timezone_set ('Asia/Manila');

      $conn = mysqli_connect("localhost", "root", "", "COFFEE_DB");
      /* check connection */
      if (mysqli_connect_errno()) {
          printf("Connect failed: %s\n", mysqli_connect_error());
          exit();
      }

      if(empty($_POST["fullname"]) || strlen($_POST["fullname"]) < 2){
          echo "Please input valid Full Name";
          exit();
      }

      if(empty($_POST["emailAdd"]) || !preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$_POST["emailAdd"])){
          echo "Please input valid Email";
          exit();
      }

      if(empty($_POST["contactNo"])){
          echo "Please input valid Contact No.";
      }

      if(empty($_POST["bookdate"]) || $_POST["bookdate"] < date("Y-m-d")){
          echo "Please insert valid date";
          exit();
      }

      $time = date('H:i:s',strtotime($_POST["booktime"]));
      $comp = str_replace(':', '', $time);
      $t = time();
      $now = date('His', $t);

      if(empty($_POST["booktime"]) || $comp < $now && $_POST["bookdate"] == date("Y-m-d")){
         echo "Please input valid Time";
         exit();
      }

      if(empty($_POST["noPax"])){
          echo "Please input valid No. of Pax";
          exit();
      }
      $timenow = date("Y-m-d H:i:s");
      $sql = "INSERT INTO booking (salutation, full_name, contact_no, email, no_pax, book_date, book_time, message, last_updated_dt, status)
      VALUES ('".$_POST["salutation"]."','".$_POST["fullname"]."','".$_POST["contactNo"]."','".$_POST["emailAdd"]."','".$_POST["noPax"]."',
      '".$_POST["bookdate"]."','".$_POST["booktime"]."','".$_POST["message"]."','$timenow', 'PEND')";

      if (mysqli_query($conn, $sql)) {
        echo "Booking request has been sent!";
      } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);
 ?>