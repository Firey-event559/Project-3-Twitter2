<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/main.css">
    <title>Document</title>
</head>
<body >
    <h1>Tweets</h1>
    <div>

   <?php
    require_once '../HTML/conn.php';


   $get_all_tweets = $conn -> prepare("SELECT * FROM tweets");

    $get_all_tweets -> execute();

    $tweets = $get_all_tweets -> fetchAll();

    foreach($tweets as $tweets){
        echo  "<div class='tweet'>" .  $tweets ['content']  . "</div>";
    }


   

   ?>
   </div>

</body>
</html>