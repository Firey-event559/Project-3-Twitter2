<?php

$db = new PDO ("mysql:host=localhost;dbname=twitter", "root", "");

if(isset($_POST['submit-twitter-tweet'])){
  $tweets = filter_input (INPUT_POST, 'tweet', FILTER_SANITIZE_STRING);

  $query = $db->prepare("INSERT INTO tweets (content) VALUES (:content)");
  $query->bindParam(":content", $tweets);
  $query->execute();

  header ("Location: ../HTML/tweets_plaatsen.php");

}










