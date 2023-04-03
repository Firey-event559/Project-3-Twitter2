<?php

session_start();




if (isset($_SESSION['gebruikersnaam'])) {
    echo "<div class='account'>Ingelogd als: " . $_SESSION['gebruikersnaam'] . "</div>";
} else {
    echo "<div class='account'>Niet ingelogd</div>";
}

require_once "../HTML/db.php";

if (isset($_POST['nieuwe_gebruikersnaam'])) {
    $gebruikersnaam = $_SESSION['gebruikersnaam'];
$wachtwoord = strip_tags($_POST['wachtwoord']);
$nieuwe_gebruikersnaam = strip_tags($_POST['Update-gebruikersnaam']);


    $query = $db->prepare("SELECT wachtwoord FROM account WHERE Gebruikersnaam = :gebruikersnaam");
    $query->bindParam(":gebruikersnaam", $gebruikersnaam);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);

    if (password_verify($wachtwoord, $row['wachtwoord'])) {
        $query = $db->prepare("UPDATE account SET Gebruikersnaam = :nieuwe_gebruikersnaam WHERE Gebruikersnaam = :gebruikersnaam");
        $query->bindParam(":nieuwe_gebruikersnaam", $nieuwe_gebruikersnaam);
        $query->bindParam(":gebruikersnaam", $gebruikersnaam);
        $query->execute();

        $_SESSION['gebruikersnaam'] = $nieuwe_gebruikersnaam;

       
        echo "<div class='success'>Gebruikersnaam succesvol gewijzigd naar " . $nieuwe_gebruikersnaam . "</div>";
    } else {
        
        echo "<div class='error'>Incorrect wachtwoord</div>";
    }
    header("Location: ../HTML/update_account.php");
}
?>





