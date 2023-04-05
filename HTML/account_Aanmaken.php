<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <title>Document</title>
</head>

<body class="account-aanmaken">


<?php


 require_once "../HTML/db.php";

  if(isset($_POST['Aanmaken'])){
    $Gebruikersnaam = filter_input (INPUT_POST, 'Gebruikersnaam', FILTER_SANITIZE_STRING);
    $email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $geboorteDatum = filter_input (INPUT_POST, 'geboorteDatum', FILTER_SANITIZE_STRING);
    $Wachtwoord =  password_hash($_POST['Wachtwoord'], PASSWORD_DEFAULT);

    $query = $db->prepare("INSERT INTO account (Gebruikersnaam, email, geboorteDatum, Wachtwoord) VALUES (:Gebruikersnaam, :email, :geboorteDatum, :Wachtwoord)");
    $query->bindParam(":Gebruikersnaam", $Gebruikersnaam);
    $query->bindParam(":email", $email);
    $query->bindParam(":geboorteDatum", $geboorteDatum);
    $query->bindParam(":Wachtwoord", $Wachtwoord);
    $query->execute();

    session_start();
    $_SESSION['Gebruikersnaam'] = $Gebruikersnaam;

    header("Location: ../HTML/index.php");
    

   
  }



?>


   <form  class="account-aanmaken2" method="post">
        <a href="index.php">
            <img class="logo_twitter" src="../img/foto-twitter.png" alt="twitter-logo" width="45px" height="45px">
        </a>
        <h1 class="account-aanmaken3">Maak een account</h1>

        <input class="account-aanmaken4" type="text" placeholder="Gebruikersnaam" required name="Gebruikersnaam" autofocus>
        <input class="account-aanmaken5" type="email" placeholder="Emailadres" required name="email">

        <input class="account-aanmaken6" type="date" value="date" name="geboorteDatum" required name="geboorteDatum">
        <input class="account-aanmaken7" type="password" placeholder="Wachtwoord" required name="Wachtwoord">
        <input class="account-aanmaken8" type="submit" value="Aanmaken" name="Aanmaken"> 


    </form>

   



</body>

</html>