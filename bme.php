<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 0</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand">Email : <?php echo $_SESSION['email'] ?></a>
        <button type="button" class="btn btn-danger"><a href='logout.php'>Log Out</a></button>
</nav>
    <div class="container">
        <h1>Students of B.M.E <a href='section.php' class="btn btn-success">Back</a></h1>
          <table class="table table-bordered">
            <thead>
              <tr> 
                <th scope="col">ID </th>
                <th scope="col">Name</th>
                <th scope="col">Registration Number</th>
              </tr>
            </thead>
            <tbody>
              <?php
    if($_SESSION['logged'] == 'true') {
        $servername = "localhost";
        $username = "root";
        $pass = "";
        $db = "Spectrum";
        //Create connection to the database.
        $conn = new mysqli($servername, $username, $pass, $db);

        //Check if connection is made.
        if ($conn -> connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {

            //BCE TABLE IS CALLED
            $sql = "SELECT * FROM bme";
            $result = $conn -> query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['reg']}</td></tr>";
            }
         }




    } else {
        session_destroy();
        header('Location:index.html');
    }

?>


            </tbody>
          </table>
    </div>   

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>