<html>
<head>
    <title>Guestbook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<?php
$id = require 'connect.php';
$query = "SELECT * FROM guests";
$result = $conn->query($query);
?>
<a href="adminLogIn.php" type="button" class="btn btn-secondary float-right">Admin Panel</a>
<br>
<div class="container">
    <h2>Guest Book</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Guest Number</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Date and Time of Visit</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($result as $guests) {
            echo "<tr>";
            echo "<td>$guests[0]" . "</td>";
            echo "<td>$guests[1]" . "</td>";
            echo "<td>$guests[2]" . "</td>";
            echo "<td>$guests[3]" . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

<div class="container">
    <a href="form.php" type="button" class="btn btn-primary float-right">Sign into Guestbook</a>
</div>


<?php
require 'footer.php';
?>
</div>
</body>
</html>
