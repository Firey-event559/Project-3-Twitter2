<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/main.css">
  <title>Document</title>
</head>
<body class="plaatsen">
  <a class="terug_tweet_plaatsen" href="../HTML/tweets.php"><button class="terug_button">Nog een tweet schrijven</button></a>
  <a href='../HTML/index.php'><img src="../img/foto-twitter.png" alt="logo" class="logo" width="45px" height="45px"> </a>
  
<?php

session_start();

if (isset($_SESSION['gebruikersnaam'])){
  echo "<div class='account7'>". "ingelogd als: " . $_SESSION['gebruikersnaam'] . "</div>";
 $_SESSION['account_id'];
} else {
echo  "<div class='account7'> " .   "niet ingelogd"  . "</div>";
}

if (isset($_SESSION['gebruikersnaam'])){
 
  
  require_once "../HTML/db.php";
    
  $get_all_tweets = $db->prepare("SELECT tweets.content, tweets.id ,  tweets.likes , account.Gebruikersnaam FROM tweets JOIN account ON tweets.account_id = account.id ORDER BY tweets.time_tweets DESC");
  $likes = $db->prepare("SELECT account.id, account.Gebruikersnaam FROM likes JOIN account ON likes.account_id = account.id");

  $likes->execute();
  $get_all_tweets->execute();

  $updatelikes = $likes->fetchAll(PDO::FETCH_ASSOC);
  $tweets = $get_all_tweets->fetchAll(PDO::FETCH_ASSOC);
 
 foreach ($tweets as $tweet) { 
    echo "<div class='tweet'>" . $tweet['Gebruikersnaam'] . " - " . $tweet['content'] . 
        "<form class='tekst' method='POST' action='likes.php'>" . 
        "<button name='tweet_like' value='" . $tweet['id'] . "' class='button_like_tweets'>Tweet liken</button> Geliked: " . $tweet['likes'].  "<br>" .
        "</form>" .
        "<form method='POST' action='delete.php'>" .
            "<input type='hidden' name='tweet_id' value='" . $tweet['id'] . "'>" .
            "<button name='delete_tweet' class='button_delete_tweet'>Tweet verwijderen</button>" .
        "</form>" .
    "</div>";
}


 


 

}
?> 




  
</body>
</html>



