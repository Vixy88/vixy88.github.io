<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "michael@hyrdle.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "Hyrdle New Form Submission", $message . ' - ' . $phone, "From:" . $email);
    
    header('Location: www.hyrdle.com/success');
  }