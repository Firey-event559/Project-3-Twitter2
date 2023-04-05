<?php


session_start();
require_once "../HTML/db.php";

if(isset($_POST['tweet_like'])) {
    $tweet_id = strip_tags($_POST['tweet_like']);
    $account_id = $_SESSION['account_id']; 

    
    $query = $db->prepare("SELECT * FROM likes WHERE account_id = :account_id AND tweets_id = :tweets_id");
    $query->bindParam(":account_id", $account_id);
    $query->bindParam(":tweets_id", $tweet_id);
    $query->execute();
    $liked = $query->fetch(PDO::FETCH_ASSOC);

    if(!$liked) { 
        $query = $db->prepare("UPDATE tweets SET likes = likes + 1 WHERE id = :id");
        $query->bindParam(":id", $tweet_id);
        $query->execute();

        
        $query = $db->prepare("INSERT INTO likes (account_id, tweets_id) VALUES (:account_id, :tweets_id)");
        $query->bindParam(":account_id", $account_id);
        $query->bindParam(":tweets_id", $tweet_id);
        $query->execute();
    }

    header("Location: ../HTML/tweets_plaatsen.php");
    exit();
}


    

    











?>


