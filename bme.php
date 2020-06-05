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
        <button type="button" class="btn"><a href='logout.php'>Log Out</a></button>
</nav>
    <div class="container-fluid">
    <div class="header">
    <h1 style="display:flex;align-items:center;margin:30px 0;justify-content:space-between">Students of B.C.E <a href='section.php' style="margin-left:10px;" class="btn btn-success">Back</a></h1>    <form action="table_bme.php" method="POST" style="display:flex; margin-bottom:20px">
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
                    $dates = array();
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
                        $date = '';
                        foreach ($fields as $key=>$f) { 
                            if($key > 2) {
                                array_push($dates,$f);
                            }
                            echo "<th scope='col'>{$f}</th>"; 
                        }
                    }   
                        
                     
            
                } else {
                    session_destroy();
                    header('Location:index.html');
                }  
                
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
            
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
                        $id=0;
                        $i = 0;
                        foreach($rec as $key=>$r) {
                            if($key == 0) {
                                $id = $r;
                            }
                            if($key < 3) {
                                echo "<td scope='col'>{$r}</td>";
                            }
                            else if($key > 2) {
                                if($r == 'A') {
                                    echo "<td scope='col'><span style='margin-right:10px;color:red;font-size:20px;' id={$id} class={$dates[$i]}>{$r}</span><span class='present' style='color:white;cursor:pointer;font-size:15px;margin-right:10px;border:none;border-radius:5px;background-color:green;padding:2px 4px'>Present</span><span class='absent' style='color:white;font-size:15px;cursor:pointer;border:none;border-radius:5px;background-color:red;padding:2px 4px'>Absent</span></td>";
                                    $i = $i +1;
                                } else if($r == 'P') {
                                    echo "<td scope='col'><span style='margin-right:10px;color:green;font-size:20px;' id={$id} class={$dates[$i]}>{$r}</span><span class='present' style='color:white;cursor:pointer;font-size:15px;margin-right:10px;border:none;border-radius:5px;background-color:green;padding:2px 4px'>Present</span><span class='absent' style='color:white;font-size:15px;cursor:pointer;border:none;border-radius:5px;background-color:red;padding:2px 4px'>Absent</span></td>";
                                    $i = $i +1;
                                }
                                
                            
                        }
                                
                                
                            } 
                            
                        }
                        echo "</tr>";
        
                    }
                }          

?>


            </tbody>
          </table>
    </div>   
    <link rel="stylesheet" href="login.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src='appBme.js'></script>
</body>
</html>