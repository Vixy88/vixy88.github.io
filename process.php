<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "michael@executiveoperations.co.uk";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "Ex Ops New Form Submission", $message . ' - ' . $phone, "From:" . $email);
    
    header('Location: http://exops.co.uk/success.html');
  }