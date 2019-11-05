<?php
session_start();
 require_once 'Dao.php';
$notifications =array();
$sentiment='';
$email = $_POST['Email'];
$pass = $_POST['Password'];
$_SESSION['User']=$email;
$dao= new Dao();
$validation= $dao->getLogIn($email,$pass);
if($validation==False){
    $notifications[]="* Wrong email or password.";
    $_SESSION['notifications'] = $notifications;
    $_SESSION['sentiment'] = 'bad';
    $_SESSION["access_granted"] = false;
     header("Location: https://sentence2playlist.herokuapp.com/login.php"); 
     exit;
}
else{
    $_SESSION["access_granted"] = true;
}
unset($_SESSION['notifications']);
$_SESSION['user']=$email;
 header("Location: https://sentence2playlist.herokuapp.com/myinformation.php");
?>