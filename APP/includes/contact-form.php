<?php

class UserForm {

//Making properties to later use
    private $Vvoornaam;
    private $Vachternaam;
    private $Vemail;
    private $Vbericht;
    private $Vonderwerp;
    private $Bsubmit;

    public function __construct() {
    }

    public function ValidateValues() {

    //Giving the properties a value
    $this->Vvoornaam = $_POST["voornaam"];
    $this->Vachternaam = $_POST["achternaam"];
    $this->Vemail = $_POST["email"];
    $this->Vbericht = $_POST["bericht"];
    $this->Vonderwerp = $_POST["onderwerp"];
    $this->Bsubmit = $_POST["submit"];


    //validating the inputs and email
    if (!isset($this->Bsubmit) && empty($this->Vvoornaam) || empty($this->Vachternaam) || empty($this->Vemail) || empty($this->Vbericht) || empty($this->Vonderwerp)) {
      echo "U bent iets vergeten in te vullen";
      } else if(!filter_var($this->Vemail, FILTER_VALIDATE_EMAIL)) {
        echo "Uw email is onjuist";
      } else {
        echo "Mail verstuurd";
    }
    }
  }
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $userForm = new UserForm(); 
    $userForm->ValidateValues(); 
  }

  
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

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
$mail->Password = "bMB/]ng4=>#5z*\J";
$mail->SetFrom("Parsadecoole@Gmail.com");//Waar de email vanaf wordt gestuurd
$mail->Subject = "test";
$mail->Body = "doe het nou is";
$mail->AddAddress($MTo);

?>