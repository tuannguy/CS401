<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkynLFv5yJn8Iwhkkiz4npeBfvFFIkyh6QB3O_eNmClXjLp6JrEg">
    </head>
    <body>
        <div class="header">
            <img class="logo" src="https://www.brandcrowd.com/gallery/brands/pictures/picture15540681577672.jpg " alt="Music Logo">
            <img class="header_img" src="https://headerart.weebly.com/uploads/5/7/5/7/5757212/2229333_orig.jpg" alt="Music Header">
        </div>
        <div class="topnav">
            <a class="active" href="index.php">Home</a>
            <a href="newplaylist.php">New Playlist</a>
            <a href="myhistory.php">My History</a>
            <a href="myinformation.php">My Information</a>
        <?php
        if( isset( $_SESSION['User'] ) ) { 
            print_r('<a href="logout.php">Log Out</a>'); 
        } else {
            print_r('<a href="login.php">Log In</a>');
        }
        ?>
            <a href="signup.php">Sign Up</a>
        </div>
        <div class="hello">
            <a>Hello music lover!</a>
            <br>
            <a>Start discovering new exciting playlist by clicking "New Playlist"!</a>
        </div>
        <img class="miku" src="https://nyoobserver.files.wordpress.com/2013/10/hatsune-miku.jpg"  alt="Miku anime girl">
        <div id="footer">
          <a class="first">Tuan Nguyen  </a>
          <a href="mailto:minhtuan142@outlook.com">  minhtuan142@outlook.com</a>
        </div>
    </body>
</html>