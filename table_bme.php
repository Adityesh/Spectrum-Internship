<?php 
session_start();
$servername = "localhost";
$username = "root";
$pass = "";
$db = "Spectrum";

//Create connection to the database.
$conn = new mysqli($servername, $username, $pass, $db);

//Check if connection is made.
if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else {
   $date = $_POST["date"];
   $sql = "ALTER TABLE  `bme` ADD  `$date` VARCHAR(255) NOT NULL default 'A';";
   $result = $conn -> query($sql);
   header('Location:bme.php');

}

?>