
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/main.css">
  <title>Document</title>
</head>
<body class="body_tweet_logica">
  
 <a href="../HTML/index.php"><img class="niet_ingelogd" src="../img/foto-twitter.png" alt="foto_twitter" width="45px" height="45px"></a>

  <?php


session_start();

require_once "../HTML/db.php";

if (isset($_SESSION['gebruikersnaam'])){
  echo "<div class='account'>". "ingelogd als: " . $_SESSION['gebruikersnaam'] . "</div>";
  $_SESSION['account_id'];
} else {
  
 echo "<div class='account6'>" . "niet ingelogd" . "</div>";
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

</body>
</html>











