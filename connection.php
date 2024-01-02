<?php
$servername = "Online Quiz";
$fisrtName = $_POST['$fisrtName'];
$lastName = $_POST['$lastName'];

$username = "root";
$password = "Harsh@123";
$dbname = "ONLINE_QUIZ";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    # code...
    echo "<br>";
}

else
 die("Connection failed because".mysqli_connect_error());
?>