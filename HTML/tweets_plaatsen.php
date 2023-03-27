<?php
session_start();

if (isset($_SESSION['gebruikersnaam'])){
  echo "<div class='account'>". "ingelogd als: " . $_SESSION['gebruikersnaam'] . "</div>";
} else {
 echo "niet ingelogd";
}

   
require_once "../HTML/db.php";


$get_all_tweets = $db->prepare("SELECT * FROM tweets");

$get_all_tweets->execute();

$tweets = $get_all_tweets->fetchAll(PDO::FETCH_ASSOC);

foreach ($tweets as $tweet) {
    echo "<div class='tweet'>"  . $tweet['content'] . "</div>";
}




