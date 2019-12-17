<!DOCTYPE html>
<?php
session_start();
require_once 'Dao.php';
$dao= new Dao();
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkynLFv5yJn8Iwhkkiz4npeBfvFFIkyh6QB3O_eNmClXjLp6JrEg">
    </head>
    <body>
        <div class="header">
            <a><img class="logo" src="https://www.brandcrowd.com/gallery/brands/pictures/picture15540681577672.jpg " alt="Music Logo"></a>
            <a><img class="header_img" src="https://headerart.weebly.com/uploads/5/7/5/7/5757212/2229333_orig.jpg" alt="Music Header"></a>
        </div>
        <div class="topnav">
            <a href="index.php">Home</a>
            <a href="newplaylist.php">New Playlist</a>
            <a class="active" href="myhistory.php">My History</a>
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
        <?php
        if( isset( $_SESSION['User'] ) ) { 
            print_r("<div>".$dao->getHistory($_SESSION['User']."</div>")); 
        } else {
            print_r("<h1>Please log in to see your history.</h1>");
        }
        ?>
        <div id="footer">
          <a class="first">Tuan Nguyen  </a>
          <a href="mailto:minhtuan142@outlook.com">  minhtuan142@outlook.com</a>
        </div>
    </body>
</html>