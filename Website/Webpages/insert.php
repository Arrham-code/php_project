<?php
error_reporting(0);
// DB connection setup
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "broker";

$conn = mysqli_connect($servername, $username,$password, $dbname);

if (!$conn) {
    die("Sorry We failed to connect:" . mysqli_connect_error);
}

$name = $_POST ['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES('$name', '$email', '$message')";
$result = mysqli_query ($conn, $sql);


if($result) {
    header("Location: submit.php");
    exit();
}
 else {
    echo "Error".mysqli_error($conn);
}

?>