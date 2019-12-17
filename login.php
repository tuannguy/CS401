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
        <a><img class="logo" src="https://www.brandcrowd.com/gallery/brands/pictures/picture15540681577672.jpg " alt="Music Logo"></a>
        <a><img class="header_img" src="https://headerart.weebly.com/uploads/5/7/5/7/5757212/2229333_orig.jpg" alt="Music Header"></a>
    </div>
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="index.php">New Playlist</a>
        <a href="myhistory.php">My History</a>
        <a href="myinformation.php">My Information</a>
        <a class="active" href="login.php">Log In</a>
        <a href="signup.php">Sign Up</a>
    </div>
    <form method="post" action="login_handlers.php">
        Email:<br>
        <input type="text" name="Email">
        <br>
        Password:<br>
        <input type="password" name="Password">
        <input name="" type="submit" value="Log In">
    </form>
    <div id="footer">
        <a class="first">Tuan Nguyen </a>
        <a href="mailto:minhtuan142@outlook.com"> minhtuan142@outlook.com</a>
    </div>
    <?php
    if (isset($_SESSION['notifications'])) {
       foreach ($_SESSION['notifications'] as $message) {
         echo "<div class='message {$_SESSION['sentiment']}'>{$message}</div>";
           unset($_SESSION['notifications']);
       }
    }
   
    ?>
    <script>
        $(function() {

            $(".message").click(function() {
                $(this).fadeOut("fast");
            });

        });
    </script>
</body>

</html>