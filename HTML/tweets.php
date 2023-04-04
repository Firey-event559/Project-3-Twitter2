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
    <title>Document</title>
</head>


<body class="body-tweets">

<a href="../HTML/index.php">
    <img class="logo" src="../img/foto-twitter.png" alt="logo" width="45px" height="45px">
    </a>
    <h1  class="tweets_plaatsen">Tweets Aanmaken</h1>
    
     <form  class="tweet-tekst" action="tweet_logica.php"  method="post">
      <textarea class="tweet_area"  name="tweet"cols="30" rows="10" ></textarea>
        <input class="tweet_button" type="submit" name="submit-twitter-tweet" value="Plaatsen" >

    </form>

<?php

if (isset($_SESSION['gebruikersnaam'])){
  echo "<div class='account2'>". "ingelogd als: " . $_SESSION['gebruikersnaam'] . "</div>";
   echo $_SESSION['account_id'];
} else {
echo  "<div class='account2'> " .   "niet ingelogd"  . "</div>";
}




   
   
   


  

?>


   

</body>
</html>