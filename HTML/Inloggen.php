


 
    <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <title>Document</title>
 </head>
 <body>
    <h1>inloggen</h1>

    <?php

$db = new PDO ("mysql:host=localhost;dbname=twitter", "root", "");

if (isset ($_POST['inloggen'])){
    $email = filter_input (INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    $wachtwoord = $_POST['Wachtwoord'];

    $query= $db -> prepare ("SELECT * FROM account WHERE email = :email");

    $query -> bindParam (":email", $email);

    $query -> execute ();

    if ($query -> rowCount () == 1){
        $result = $query -> fetch (PDO::FETCH_ASSOC);
        if (password_verify ($wachtwoord, $result['wachtwoord'])){
            echo "<div class='inloggen'>" . $email .$wachtwoord  . "</div>"; 
        } else {
            echo "eet mijn kont";
        } 

    }


}






?>

    
 </body>
 </html>
