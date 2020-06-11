<?php
unset($_SESSION["state"]);
unset($_SESSION["login"]);
session_destroy();

header("Location:index.php");