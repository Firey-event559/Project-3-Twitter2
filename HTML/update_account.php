<?php
session_start();
if (isset($_SESSION['gebruikersnaam'])) {
  $gebruikersnaam = htmlspecialchars($_SESSION['gebruikersnaam'], ENT_QUOTES, 'UTF-8');
  echo "<div class='account7'>" . "ingelogd als: " . $gebruikersnaam . "</div>";
  $_SESSION['account_id'] = (int) $_SESSION['account_id']; 
} else {
  echo "<div class='account7'> " . "niet ingelogd" . "</div>";
  
} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <title>update account</title>
</head>
<body class="update2">
  <a href="../HTML/index.php"><button class="update3">Terug</button></a>



  <form class="update_account" method="post" action="../HTML/update_account_logica.php">
    <h1 class="update_tekst">Update Gebruikersnaam</h1>
    <input  class="update_account2" type="text" name="gebruikersnaam" placeholder="gebruikersnaam" required>
    <input  class="update_account2" type="password" name="wachtwoord" placeholder="wachtwoord" required>
    <input class="update_account2" type="text"  name="Update-gebruikersnaam" placeholder="Update gebruikersnaam" required>
    
    <input class="update_account3" type="submit" value="opslaan" name="nieuwe_gebruikersnaam">

  </from>



    
</body>
</html>