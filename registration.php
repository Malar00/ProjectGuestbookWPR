<html>
<head>
    <title>Registered</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $sname = $_POST["sname"];
    $writetime = date("Y-m-d H:i:s");
    $id = require 'connect.php';
    $query = "INSERT INTO guests(name,surname,date) VALUES ('$name','$sname','$writetime')";
    $result = $conn->query($query);
    setcookie('registered', true, time() + 60);
    ?>
    <div class="container">
        <p>Succesfully registered</p>
        <a href="index.php" type="button" class="btn btn-primary btn-block">Return to Guestbook</a>
    </div>
    <?php
} else {
    echo "Something went wrong :(";
}
?>
</body>
</html>
