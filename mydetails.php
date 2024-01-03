<?php session_start(); 
include("checkpassword.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my detail</title>
</head>
<body>
    <?php echo $_SESSION["name"]; ?>
    <br /> My Colour : <?php echo $_SESSION["mypreference"];?>

    <a href="main.php">Main Page</a>
</body>
</html>
