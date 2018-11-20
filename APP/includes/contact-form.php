<?php

require_once("C:\\xampp\\htdocs\\Jouw eigen projecten\\Danial-website\Website_klant\\APP\\includes\\class.php");

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') { 

    $userForm = new UserForm($_POST); 
    $userForm->ValidateValues(); 

    require_once("C:\\xampp\\htdocs\\Jouw eigen projecten\\Danial-website\\Website_klant\\APP\\includes\\PHPMailer-master\\src\\PHPMailer.php");
    require_once("C:\\xampp\\htdocs\\Jouw eigen projecten\\Danial-website\\Website_klant\\APP\\includes\\PHPMailer-master\\src\\Exception.php");
    require_once("C:\\xampp\\htdocs\\Jouw eigen projecten\\Danial-website\\Website_klant\\APP\\includes\\PHPMailer-master\\src\\SMTP.php");

    $MTo = "Parsadecoole@Gmail.com"; //This is were the email needs to be send to
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 1;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tsl'; //You can use tsl and ssl
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; //Ports 25, 465 and 587 can be used
    $mail->IsHTML(true);
    $mail->Username = "Parsadecoole@Gmail.com";
    $mail->Password = "4H7p_Frubruy";
    $mail->SetFrom("Parsadecoole@Gmail.com");//Waar de email vanaf wordt gestuurd
    $mail->Subject = "test";
    $mail->Body = "test";
    $mail->AddAddress($MTo);

}

?>