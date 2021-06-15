<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member View</title>

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
    <div class=" container-fluid ">
        <div class="pt-5 pb-5 pl-5" id="search">
            <form class="form-inline my-2 my-lg-0" method="post" action="../../controller/Search.php">
                <input class="form-control mr-sm-2" name="txtSearch"  type="search" placeholder="Find Member" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> 
        </div>
        <table class="table  table-responsive w-auto" >
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
            <tbody class="bg-info">
                <?php
                    include('../../model/CommonClass.php');
                    $obj=new Operation();
                    $obj->DbOperation();
                    $obj->newMemberView();
                    $result=$obj->executeQuery();
                    if ($result->num_rows > 0) {
   
                        //output data of each row
                        $i=1;
                        while($row = $result->fetch_assoc()) 
                        {
                            $imageURL = '../../controller/Photo/'.$row["photo"];
                            echo"<tr>";
                            echo "<td>". $i; $i++."</td>";
                            echo"<td>" .$row['first_name']."</td>";
                            echo"<td>" .$row['last_name']."</td>";
                            echo"<td>" .$row['address']."</td>";
                            echo"<td>" .$row['district']."</td>";
                            echo"<td>" .$row['gender']."</td>";
                            echo"<td>" .$row['phone']."</td>";
                            echo"<td><img src=".$imageURL." width='50' height='50'></td>";
                            
                            echo"<td>" .$row['username']."</td>";
                            echo"<td>" .$row['dob']."</td>";
                            echo"<td>" .$row['status']."</td>";
                            echo"<td>" .$row['join_date']."</td>";
                            echo"</tr>";
                        }

                    }
                    else{
                        echo"<script>
                        alert('No Records Found');
                        window.location.href = 'Admin.php';
                        </script>";
                    }
                ?>
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