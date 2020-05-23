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
   $id = $_POST["id"];
   $date = $_POST["date"];
//    $sql = "UPDATE civil SET ' . mysqli_real_escape_string($conn,$_POST['date']) . '='A' WHERE id={$id}";
    $sql = "UPDATE bme SET `".$date."`= 'A' WHERE id={$id}";
   if ($conn->query($sql) === TRUE) {
    header('Location:bme.php');
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

?>