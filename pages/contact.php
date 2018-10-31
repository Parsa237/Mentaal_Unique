<?php
  class UserForm{
    $_POST["voornaam"] = private $voornaam;
    $_POST["achternaam"] = private $achternaam;
    $_POST["email"] = private $email;
    public function CheckValues(){
    }
  }
?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="author" content="P. Gholamhossein, J. Houwaart, L. Meijles">
  <meta name="description" content="danial-website"><!--Website name will be differend soon-->
  <meta name="keywords" content="HTML, CSS, PHP">
  <meta name="viewport" content="width=device-width, initial-scale=1,0">
  <title>Mentaal Unique</title>
  <link href="../scss/.css" rel="stylesheet" type="text/css">
  <!--Deze link kan ook worden gebruikt inplaats van de bovenste: <link href="../scss/wiezijnwij.min.css" rel="stylesheet" type="text/css">-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>

<!--TEMPORARY NAVIGATION JULIAN WILL CHANGE THIS IF NESSECARY-->
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
    Voornaam:
    <br>
    <input type="text" name="voornaam" id="voornaam" placeholder="voornaam"><!--PLACEHOLDER CAN BE CHANGED-->
    <br>
    Achternaam:
    <br>
    <input type="text" name="achternaam" id="achternaam" placeholder="achternaam">
    <br>
    Email:
    <br>
    <input type="text" name="email" id="email" placeholder="email">
    <br>
    Uw bericht:
    <br>
    <textarea name="bericht" id="bericht" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" name="submit" id="submit" value="verzend!">

</html>
