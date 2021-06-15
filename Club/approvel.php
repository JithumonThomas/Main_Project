<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Approvel</title>

    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- ...... -->
    <!-- css link -->
    <link rel="stylesheet" href="../assets/css/adminStyle.css">
    <!-- ...... -->
    <!-- Google Fonts -->
  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
    
    <!-- ....... -->
</head>
<body id="body">
    <header>
    <?php include "adminNav.php"; ?>

    <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="#intro">CAPITOL ART'S <span>&</span>SPORTS CLUB</a></h1>
        <a href="index.html"><img src="../assets/img/circle-cropped.png" alt="Logo Image" title=""></a>
    </div>
    </header>
    <div class="container-fluid table-responsive">
        
        <table class="table text-white" >
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>FIRST_NAME</th>
                    <th>LAST_NAME</th>
                    <th>ADDRESS</th>
                    <th>DISTRICT</th>
                    <th>GENDER</th>
                    <th>PHONE_NO</th>
                    <th>PHOTO</th>
                    <th>USERNAME</th>
                    <th>DOB</th>
                    <th>STATUS</th>
                    <th>JOIN DATE</th>
                </tr>
            </thead>
            <tbody>
                <?php include "../../controller/approv.php" ?>
            </tbody>
        </table>
    </div>

<!-- bootstrap script -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <!-- ...... -->
</body>
</html>