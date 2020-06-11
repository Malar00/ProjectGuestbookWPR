<?php
session_start();
if ($_SESSION["state"]) {
    $id = require 'connect.php';
    $query = "SELECT * FROM guests";
    $result = $conn->query($query);

if (isset($_GET["submitDel"])) {
    $deleteId = $_GET["guestnum"];
    $queryDel = "DELETE FROM guests WHERE GuestNumber=$deleteId";
    $conn->query($queryDel);
    $queryRefresh= "ALTER TABLE guests DROP guestnumber";
    $conn->query($queryRefresh);
    $queryRefresh= "ALTER TABLE guests AUTO_INCREMENT = 1";
    $conn->query($queryRefresh);
    $queryRefresh= "ALTER TABLE guests ADD guestnumber int AUTO_INCREMENT PRIMARY KEY FIRST ";
    $conn->query($queryRefresh);
    header( "Location: admin.php" );
}
if (isset($_GET["submitEdit"])) {
    $editId = $_GET["guestnum"];
    $newName = $_GET["newname"];
    $newSname = $_GET["newsname"];
    $queryEdit = "update guests set name='$newName', surname='$newSname' where guestnumber='$editId'";
    $conn->query($queryEdit);
    header( "Location: admin.php" );
}
    ?>
    <html>
    <head>
        <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    </head>
    <body>
    <div class="container-fluid">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Guest Number</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Date and Time of Visit</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $i = 0;
        foreach ($result as $guests) {
            echo "<form action='' method='get'>";
            echo "<tr>";
            echo "<td>$guests[0]</td>";
            echo "<input type='hidden' name='guestnum' value='$guests[0]'>";;
            echo "<td><input type='text' name='newname' value='$guests[1]'></td>";
            echo "<td><input type='text' name='newsname' value='$guests[2]'></td>";
            echo "<td>$guests[3]</td>";
            echo "<td><button type='submit' class='btn btn-default' name='submitDel' value='submitDel'><i class=\"fa fa-trash\"></i></button></td>";
            echo "<td><button type='submit' class='btn btn-default' name='submitEdit' value='submitEdit'><i class=\"fa fa-wrench\"></i></button></td>";
            echo "</tr>";
            echo "</form>";
        }
        ?>
        </tbody>
    </table>

<?php
    echo "<a href='adminLogOut.php' title='Logout'>Logout";
} else {
    header("Location:index.php");
}
echo "</div>";
require 'footer.php';
?>

    </body>
    </html>