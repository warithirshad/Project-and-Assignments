<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Web</title>
</head>
<body>
    <?php session_destroy();
    header("Location:index.php"); ?>
</body>
</html>