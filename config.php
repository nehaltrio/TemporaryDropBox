<?php 

$server = "localhost";
$dbuser = "root";
$dbpass = "";
$database = "dropbox";

$conn = mysqli_connect($server, $dbuser, $dbpass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

$base_url = "http://localhost/TemporaryDropBox/"; // Website url

?>