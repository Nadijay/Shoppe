<?php
$dbServer = "localhost";
$dbUser = "root";
$dbPass = "";
$database = "shoppe";

$conn = mysqli_connect($dbServer, $dbUser, $dbPass, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Success!";
}
?>
