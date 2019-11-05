<?php

session_start();
 require_once 'Dao.php';
$messages =array();
$sentiment='';
$presets = $_POST;
$user = $_POST['Email'];
$pass = $_POST['Password'];

if( strlen($_POST['Password'])<5){
    $messages[]=" * Minimum of 5 characters";
        unset($presets['Password']);
}

if(!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)||empty($_POST['Email'])) { 

    $messages[]="* Please enter valid email";
    unset($presets['Email']);
}
    
if(count($messages) ==0){
    $dao =new Dao();
    $dao->getConnection();
    $dao->saveUser($user,$pass);
   }

     if (count($messages) > 0) {
     $_SESSION['messages'] = $messages;
     $_SESSION['sentiment'] = 'bad';
     $_SESSION['form_data'] = $presets;
      header("Location: https://sentence2playlist.herokuapp.com/signup.php");
     exit;
   }
unset($_SESSION['messages']);
 unset($_SESSION['form_data']);

$_SESSION['messages'] = array(" * You have sucessfully created an account!");
 $_SESSION['sentiment'] = 'good';
 header("Location: https://sentence2playlist.herokuapp.com/signup.php"); 
?>
