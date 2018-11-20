<?php

class UserForm {

//Making properties to later use
    private $Vvoornaam;
    private $Vachternaam;
    private $Vemail;
    private $Vbericht;
    private $Vonderwerp;
    private $Bsubmit;

    public function __construct($_form) {

      //Giving the properties a value
      $this->Vvoornaam = $_form["voornaam"];
      $this->Vachternaam = $_form["achternaam"];
      $this->Vemail = $_form["email"];
      $this->Vbericht = $_form["bericht"];
      $this->Vonderwerp = $_form["onderwerp"];
      $this->Bsubmit = $_form["submit"];

    }

    public function ValidateValues() {

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

  ?>