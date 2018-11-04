<?php
  class UserForm {
    //Making properties to later use
    private $Vvoornaam;
    private $Vachternaam;
    private $Vemail;
    private $Vbericht;
    private $Bsubmit;

    public function __construct() {

    //Giving the properties a value

      $this->Vvoornaam = $_POST["voornaam"];
      $this->Vachternaam = $_POST["achternaam"];
      $this->Vemail = $_POST["email"];
      $this->Vbericht = $_POST["bericht"];
      $this->Bsubmit = $_POST["submit"];
    }

    public function Index() {

//validating the inputs and email
    if (!isset($this->Bsubmit) && empty($this->Vvoornaam) || empty($this->Vachternaam) || empty($this->Vemail) || empty($this->Vbericht)) {
      echo "U bent iets vergeten in te vullen";
      }else if(!filter_var($this->Vemail, FILTER_VALIDATE_EMAIL)) {
        echo "Uw email is onjuist";
      }else{
        $mailto = "Parsadecoole@gmail.com";
        $message = $_POST["bericht"];
        $txt = "U heeft een bericht ontvangen van".$Vvoornaam." ".$Vachternaam;

        
      }
    }
  }
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $userForm = new UserForm(); $userForm->Index(); 
  }
?>