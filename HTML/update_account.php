<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <title>update account</title>
</head>
<body>

<?php

session_start();
if (isset($_SESSION['gebruikersnaam'])){
    echo "<div class='account'>". "ingelogd als: " . $_SESSION['gebruikersnaam'] . "</div>";
     $_SESSION['account_id'];
  } else {
  echo  "<div class='account'> " .   "niet ingelogd"  . "</div>";
  }
  Require_once "../HTML/db.php";

  ?>

  <form class="update_account" method="post" action="../HTML/update_account_logica.php">
    <h1 class="update_tekst">Update Gebruikersnaam</h1>
    <input  class="update_account2" type="text" name="gebruikersnaam" placeholder="gebruikersnaam">
    <input  class="update_account2" type="text" name="wachtwoord" placeholder="wachtwoord">
    <input class="update_account2" type="text"  name="Update-gebruikersnaam" placeholder="Update gebruikersnaam">
    <input class="update_account3" type="submit" value="opslaan" name="nieuwe_gebruikersnaam">

  </from>



    
</body>
</html>