<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "website";

//create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

if($conn) {
    echo "Success";
}
else {
    die("Error"mysqli_connect_error());
}
?>
