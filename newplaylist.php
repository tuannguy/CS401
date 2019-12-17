<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkynLFv5yJn8Iwhkkiz4npeBfvFFIkyh6QB3O_eNmClXjLp6JrEg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div class="header">
        <a><img class="logo" src="https://www.brandcrowd.com/gallery/brands/pictures/picture15540681577672.jpg " alt="Music Logo"></a>
        <a><img class="header_img" src="https://headerart.weebly.com/uploads/5/7/5/7/5757212/2229333_orig.jpg" alt="Music Header"></a>
    </div>
    <div class="topnav">
        <a href="index.php">Home</a>
        <a class="active" href="newplaylist.php">New Playlist</a>
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
    <?php
        if( isset( $_SESSION['User'] ) ) { 
            print_r('<form action="newplaylist_handlers.php" method="POST">');
            print_r('<br>Type your sentence:');
            print_r('<input type="text" name="sentence"><br>');
            print_r('<input type="submit" value="Create playlist!">');
            print_r('</form>');
        } else {
            print_r("<h1>Please log in to create playlist!</h1>");
        }
    ?>
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