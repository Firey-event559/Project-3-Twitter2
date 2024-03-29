<?php
session_start();
 
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <title>Inloggen</title>
 </head>
 <body class="achtergrond">
    <h1 class="inlog">Inlog pagina</h1>

    <?php
require_once "../HTML/db.php";

if (isset ($_POST['inloggen'])){
    $gebruikersnaam = filter_input (INPUT_POST, "Gebruikersnaam", FILTER_SANITIZE_STRING);
     $wachtwoord = strip_tags($_POST['Wachtwoord']);
   
    $query= $db -> prepare ("SELECT * FROM account WHERE  Gebruikersnaam  = :Gebruikersnaam");

    $query -> bindParam (":Gebruikersnaam", $gebruikersnaam);
    

    $query -> execute ();


    if ($query->rowCount() == 1) {
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (password_verify($wachtwoord, $result['wachtwoord'])) {
            $_SESSION['account_id'] = $result['id'];
            $_SESSION['gebruikersnaam'] = $gebruikersnaam;
            echo "<div class='inloggen'>ingelogd als: " . $gebruikersnaam . "</div>";
        } else {
            echo "<div class='inloggen'>Niet ingelogd</div>";
        }
    } 
    }
    
       


?>

    <div class="buttons">
 <a  href="../HTML/tweets.php"><button class="tweets_plaatsen">tweets plaatsen</button></a>  

<a href="../HTML/update_account.php"> <button class="profiel_bewerken">profiel bewerken</button></a>

<a href="../HTML/tweets_plaatsen.php"><button class="tweet10">Tweets plaatsen</button></a>

<a href="../HTML/index.php"><button class="terug_naar_hoofdpagina">Terug naar hoofdpagina</button></a>
   

</div>
    
 </body>
 </html>
