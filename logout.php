<?php
session_start();
session_destroy();
header("Location: https://sentence2playlist.herokuapp.com/login.php");
?>