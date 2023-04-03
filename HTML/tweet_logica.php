<?php


session_start();

require_once "../HTML/db.php";

if (isset($_SESSION['gebruikersnaam'])){
  echo "<div class='account'>". "ingelogd als: " . $_SESSION['gebruikersnaam'] . "</div>";
  $_SESSION['account_id'];
} else {
 echo "niet ingelogd";
}


if (isset($_POST['submit-twitter-tweet']) && isset($_SESSION['account_id'])) {
  $tweets = filter_input(INPUT_POST, 'tweet', FILTER_SANITIZE_STRING);

  $query = $db->prepare("INSERT INTO tweets (content, account_id) VALUES (:content, :account_id)");
  
  $query->bindParam(":content", $tweets);
  $query->bindParam(":account_id", $_SESSION['account_id']);
  $query->execute();

  header("Location: ../HTML/tweets_plaatsen.php");
  exit();
}
?>











