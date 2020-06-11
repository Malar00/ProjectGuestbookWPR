<?php
session_start();
?>
<html>
<head>
    <title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="name">Username:</label>
                    <input type="text" class="form-control" placeholder="Enter username" name="name">
                </div>
                <div class="col">
                    <label for="name">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter surname" name="pass">
                </div>
            </div>
        </div>
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>
</div>
<?php
if (isset($_POST["submit"])) {
    $valid = false;
        if ($_POST['name'] == "admin" && $_POST['pass'] == "admin") {
            echo "good user pass";
            $_SESSION["login"] = $_POST['username'] . time();
            $_SESSION["state"] = true;
            $valid = true;
        }
    if ($valid) {
        header("Location:admin.php");
    }
}
?>
</body>
</html>
