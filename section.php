<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php 
        session_start();
        if($_SESSION["logged"] == 'true') {
        } else {
            session_destroy();
            header('Location:index.html');
        }
    
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand">Email : <?php echo $_SESSION['email'] ?></a>
        <button type="button" class="btn btn-danger"><a href='logout.php'>Log Out</a></button>
    </nav>


    <div class="container">
        <div class="card">
            <div class="card-header">
                Class #1 : B.C.E
            </div>
            <div class="card-body">
                <h5 class="card-title">Basics of Civil Engineering</h5>
                <p class="card-text">Basic Mechanical Engineering covers a wide range of topics and engineering concepts that are required to be learnt as in any undergraduate engineering course.</p>
                <a href='bce.php' class="btn btn-primary">See all students</a>
                </form>
                
            </div>
        </div>
        <br>
        <div class="card">
        <div class="card-header">
            Class #2 : B.M.E
        </div>
        <div class="card-body">
            <h5 class="card-title">Basics of Mechanical Engineering</h5>
            <p class="card-text">Basic Civil Engineering is designed to enrich the preliminary conceptual knowledge about civil engineering to the students of non-civil branches of engineering.</p>
            <a href='bme.php' class="btn btn-primary">See all students</a>
        </div>
        </div>
    </div>
    


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>