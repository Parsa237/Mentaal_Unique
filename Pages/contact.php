<?php

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
$mail->SMTPSecure = 'tls';
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; //Ports 25, 465 and 587 can be used
$mail->IsHTML(true);
$mail->Username = "Parsadecoole@Gmail.com";
$mail->Password = "4H7p_Frubruy";
$mail->SetFrom("gholamhosseinp929@gmail.com");
$mail->Subject = $Vonderwerpen;
$mail->Body = $Vbericht;
$mail->AddAddress($MTo);
$mail->Hostname = 'DESKTOP-DN89O2M';

if(!$mail->send()){
    echo "Email niet verstuurd";
}else{
    echo "Mail verstuurd";
}

  class UserForm {
//Making properties to later use

    private $Vvoornaam;
    private $Vachternaam;
    private $Vemail;
    private $Vbericht;
    private $Vonderwerpen;
    private $Bsubmit;

    public function __construct() {

//Giving the properties a value

      $this->Vvoornaam = $_POST["voornaam"];
      $this->Vachternaam = $_POST["achternaam"];
      $this->Vemail = $_POST["email"];
      $this->Vbericht = $_POST["bericht"];
      $this->Vonderwerpen = $_POST["onderwerpen"];
      $this->Bsubmit = $_POST["submit"];
    }

    public function Index() {

//validating the inputs and email

    if (!isset($this->Bsubmit) && empty($this->Vvoornaam) || empty($this->Vachternaam) || empty($this->Vemail) || empty($this->Vbericht) || empty($this->Vonderwerp)) {
      echo "U bent iets vergeten in te vullen";
      }else if(!filter_var($this->Vemail, FILTER_VALIDATE_EMAIL)) {
        echo "Uw email is onjuist";
      }else{
        
        $Vvoornaam = $_POST["voornaam"];
        $Vachternaam = $_POST["achternaam"];
        $Vemail = $_POST["email"];

      }
    }
  }
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $userForm = new UserForm(); 
    $userForm->Index(); 
  }
?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="author" content="P. Gholamhossein, J. Houwaart, L. Meijles">
  <meta name="description" content="Mentaal-Unique">
  <meta name="keywords" content="HTML, CSS, PHP">
  <meta name="viewport" content="width=device-width, initial-scale=1,0">
  <title>Mentaal Unique</title>
  <link href="../scss/.css" rel="stylesheet" type="text/css">
  <!--Deze link kan ook worden gebruikt inplaats van de bovenste: <link href="../scss/wiezijnwij.min.css" rel="stylesheet" type="text/css">-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>

<!--TEMPORARY NAVIGATION JULIAN WILL CHANGE THIS IF NESSESARY-->
<!-- NAVIGATION -->
<div class="nav">
      <label for="toggle">&#9776;</label>
      <input type="checkbox" id="toggle"/>
      <div class="menu">
        <a href="home.php">Home</a>
        <a href="wiezijnwij.php">Wie zijn wij</a>
        <a href="pages/contact.php">Contact</a>
        <a href="#info">Info</a>
      </div>
    </div>
    

    <!--FORM, DESIGN WILL LATER BE IMPLEMENTED-->
    <!--DO NOT CHANGE THE NAME ID'S OR TYPES-->
    <br>
    <form  method="post" action="contact.php">
    Voornaam:
    <br>
    <input type="text" name="voornaam" id="voornaam" placeholder="voornaam"><!--PLACEHOLDER CAN BE CHANGED-->
    <br>
    <br>
    Achternaam:
    <br>
    <input type="text" name="achternaam" id="achternaam" placeholder="achternaam">
    <br>
    <br>
    Uw Email:
    <br>
    <input type="text" name="email" id="email" placeholder="email">
    <br>
    <br>
    Onderwerp:
    <br>
    <select name="onderwerpen">
        <option value="klacht">Klacht</option>
        <option value="feedback">Feedback</option>
        <option value="vraag">Vraag</option>
        <option value="overig">Overig</option>
    </select>
    <br>
    <br>
    Uw bericht:
    <br>
    <textarea name="bericht" id="bericht" cols="30" rows="10"></textarea>
    <br>
    <br>
    <input type="submit" name="submit" id="submit" value="verzend!">
    </form>
    </body>
</html>