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
    <link href="../assets/css/library/AdminLiCss.css" rel="stylesheet">
    <!-- ...... -->
    <!-- Google Fonts -->
  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- ....... -->
</head>
<body class="body">
    <header>
    <?php include "Admin_nav.php"; ?>

    <div id="logo" class="ml-5">
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="#intro">CAPITOL ART'S <span>&</span>SPORTS CLUB</a></h1>
        <a href="index.html"><img src="../assets/img/circle-cropped.png" alt="Logo Image" title=""></a>
    </div>
    </header>
    <div class="container-fluid ">
        <form class="form-inline mt-5" method="POST" action="../../controller/library/search.php">
            <input class="form-control mr-sm-2" type="search" name="value" placeholder="search with book name" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <table class="table table-responsive text-white mt-5 text-center" >
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>BOOK NAME</th>
                    <th>QUANTITY</th>
                    <th>LANGUAGE</th>
                    <th>AUTHOR NAME</th>
                    <th>isbn NUMBER</th>
                    <th>CATEGORY</th>
                    <th>PRICE</th>
                    <th>PHOTO</th>
                </tr>
            </thead>
            <tbody class="bg-secondary">
                <?php include "../../controller/library/ManipulateLiAct.php" ?>
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