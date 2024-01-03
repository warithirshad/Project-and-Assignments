<?
//start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Web</title>
</head>
<body>
<?php
    if ($_POST["username"] == "admin" && $_POST["password"] == "12345") {
    
        //assign value of session variables
        $_SESSION["name"] = $_POST["username"];
        $_SESSION["mypreference"] = "green";

        echo "Name :" . $_SESSION["name"];
        echo "<br/> My Colour :" . $_SESSION["mypreference"];

        echo "<br/> <a href='mydetails.php'>My Details</a> | <a href='logout.php'>Log Out</a>";
    }
    else
    header("Location:index.php");
?>
</body>

</html>