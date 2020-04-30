<?php 

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
   $email = $_POST["email"];
   $password = $_POST["password"];

   $sql = "SELECT * FROM account WHERE email = '$email' AND password = '$password'";
   $result = $conn -> query($sql);

   if($result -> num_rows == 1) {
       echo "Logged in succesfully.";
       header('Location:bsection.html');
   }else {
       echo "Invalid credentials.";
   }
}

?>