<?php
session_start();
require_once 'Dao.php';
$notifications =array();
$sentiment='';
$dao= new Dao();


if(empty($_POST["sentence"])){
    $notifications[]="Please type a sentence";
}

 if (count($notifications) > 0) {
     $_SESSION['notifications'] = $notifications;
     $_SESSION['sentiment'] = 'bad';
     header("Location: https://sentence2playlist.herokuapp.com/newplaylist.php");
     exit;
   }

$dao->saveSentence($_SESSION['User'], $_POST['sentence']);
unset($_SESSION['notifications']);
$_SESSION['sentiment'] = 'good';
header("Location: https://sentence2playlist.herokuapp.com/newplaylist.php");
?>