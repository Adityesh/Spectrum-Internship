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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand">Email : <?php echo $_SESSION['email'] ?></a>
        <button type="button" class="btn btn-danger"><a href='logout.php'>Log Out</a></button>
</nav>
    <div class="container-fluid">
    <div class="header">
    <h1 style="display:flex;align-items:center;">Students of B.M.E <a href='section.php' style="margin-left:10px;" class="btn btn-success">Back</a></h1>
    <form action="table_bme.php" method="POST" style="display:flex; margin-bottom:20px">
        <label for="example-date-input" class="col-2 col-form-label"><h4>New Date for class:</h4></label>
        <input class="form-control" type="date" id="example-date-input" style="width:30%;" name="date">
        <button type="submit" class="btn btn-success" id="newClass">NEW</button>
    </form>
    </div>
    </div>
    

          <table class="table table-bordered table-light table-hover" id="table">
            <thead class="thead-dark">
              <tr>
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
                        $sql = "SHOW COLUMNS FROM bme";

                        $fields = array();
                        $result = $conn -> query($sql);
                        while ($x = $result->fetch_assoc()){
                        $fields[] = $x['Field'];
                        }
                        foreach ($fields as $f) { 
                            echo "<th scope='col'>{$f}</th>"; 
                        }   
                     }
            
                } else {
                    session_destroy();
                    header('Location:index.html');
                }   
              ?>
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
            while($row = $result->fetch_assoc()) {
                $count = $result->num_rows;
                
                if($count > 0) {
                    $records = array();
                    $records[] = $row;
                    foreach($records as $x) {
                        $rec = array_values($x);
                        echo "<tr>";
                        foreach($rec as $r) {
                            if($r == '') {
                                echo "<td scope='col'><span style='margin-right:10px;'>N/A</span><span class='material-icons' style='color:green;cursor:pointer;margin-right:10px;' >done</span><span class='material-icons' style='color:red;cursor:pointer'>clear</span></td>";
                            } else if($r != ''){ 
                                echo "<td scope='col'>{$r}</td>";
                            }
                            
                        }
                        echo "</tr>";
        
                    }
                } else if($count == 0) {
                    echo "<h1>No entries found.</h1>";
                }
                
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
    <link rel="stylesheet" href="login.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>