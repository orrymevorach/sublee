<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';



if (isset($_POST['submit'])) {
    sendEmail();
}


function sendEmail(){
  $fname = $_POST['fname'];

  $lname = $_POST['lname'];

  $mail = $_POST['mail'];

  $city = $_POST['city'];

  $province = $_POST['province'];

  $msg = $_POST['msg'];

  $current_lease ="";

  $short_lease ="";

  $property_m ="";

    if (isset($_POST['current_lease']) && $_POST['current_lease'] == "on"){

      $current_lease = "Yes";

    }else{

      $current_lease = "NO";

    }

    if (isset($_POST['short_lease']) && $_POST['short_lease'] == "on"){

      $short_lease = "Yes";

    }else{

      $short_lease = "NO";

    }

    if (isset($_POST['property_m']) && $_POST['property_m'] == "on"){

      $property_m = "Yes";

    }else{

      $property_m = "NO";

    }





    $to = 'startsublee@gmail.com';

    $subject = 'Website Form Submission';

    $body =

      'First Name: ' . $fname .'<br>'.

      'Last Name: ' . $lname .'<br>'.

      'Email: ' . $mail .'<br>'.

      'City: ' . $city .'<br>'.

      'Province:' . $province .'<br>'.

      'Massage: ' . $msg .'<br>'.

      'I am trying to get out of my current lease : ' . $current_lease .'<br>'.

      'I am looking for a short-term lease : ' . $short_lease .'<br>'.

      'I am a landlord/property manager : ' . $property_m .'<br>';



    //echo $to."<br>".$subject."<br>".$body;


    $mail = new PHPMailer(true);

      //Server settings
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->Username = 'startsublee@gmail.com';                 // SMTP username
    $mail->Password = 'Jaggeejason1';


    $mail->isHTML(true);
    $mail->setFrom('no-reply@mysublee.com', 'Sublee');
    $mail->addAddress($to, $fname);
    $mail->Subject  = $subject;
    $mail->Body     = $body;
    if(!$mail->send()) {
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
      echo 'Message has been sent. Redirecting...';
      sleep(3);
      header("Location: {$_SERVER['HTTP_REFERER']}");

      exit;

    }
}

?>
