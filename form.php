<html>
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
</head>
<body>


<?php
if ($_COOKIE['registered'] == true) {
    ?>

    <div class="alert alert-danger" role="alert">
        You're already signed in.
    </div>

    <?php
}
?>
<div class="container">
    <form action="registration.php" method="post" class="was-validated">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="col">
                    <label for="name">Surname:</label>
                    <input type="text" class="form-control" id="sname" placeholder="Enter surname" name="sname"
                           required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="rodo" required> I agree for my information to be
                used in this WPR project.
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Check this checkbox to continue.</div>
            </label>
        </div>
        <?php
        if ($_SESSION["registered"] == true) {
            echo "<input id=\"submitBtn\" type=\"submit\" name=\"submit\" value=\"Submit\" class=\"btn btn-primary\" disabled>";
            require 'footer.php';
            exit();
        }
        ?>
        <input id="submitBtn" type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>

<?php
require 'footer.php';
?>
</div>
</body>
</html>
