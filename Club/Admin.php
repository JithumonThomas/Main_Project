<?php
session_start();
if($_SESSION['name']== true)
{
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
      
        <!-- css file -->
        <link href="../assets/css/adminStyle.css" rel="stylesheet">
        
        <!-- bootstrap css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        
        
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
      </head>
    <body >
        <div class="row">
        
        <div class="col-md-4">
            <a href="approvel.php"><span><img src="../assets/img/approved.png" class="pic" alt="approve img"></span></a>
            
            <a href="https://mail.google.com/mail/u/0/#inbox"><span><img src="../assets/img/mail.png" class="pic" alt="approve img"></span></a>
                  
            <nav class="navbar navbar-expand-lg navbar-light ">
            
            <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse ul_div"  id="navbarSupportedContent">
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" href="ViewMember.php">View Members</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Manipulate.php">Manipulate Details</a>
                    </li>
                    
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Event
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item " href="eventAdd.php">Add Event</a>
                                    <a class="dropdown-item" href="Report.php">Generate Event Report</a>
                                    <a class="dropdown-item" href="EventregMeb.php">Register Members Delete</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="galleryAdd.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../../controller/logout.php">Logout</a>
                    </li>
                  </ul>
            </div>
          </nav>
        </div>
    
            <div id="heading" class="col-md-8">
                <header id="logo">
                  
                  <h1>CAPITOL ART'S <span>&</span>SPORTS CLUB</h1>
                  
                  <a href="index.html"><img src="../assets/img/circle-cropped.png" alt="Logo Image" title=""></a>
                    <br>
                    <div id="date">
                    <table>
                  <tr>
                    <td>Date</td>
                    <td>:</td>
                    <td><?= date("d/m/Y");  ?></td>
                  </tr>
                  <tr>
                    <td>Time</td>
                    <td>:</td>
                    <td id="demo"> <?php echo'<script>
                      var clock = setInterval(digital, 1000);
                      function digital() {
                      var d = new Date();
                      document.getElementById("demo").innerHTML = d.toLocaleTimeString();
                      }
                      </script> ' ?> 
                    </td>
                  </tr>
                </table>
                    </div>
                    <a href=""><span><img src="../assets/img/approved.png" class="conform" alt="approve img"></span></a>
                    <a href=""><span><img src="../assets/img/mail.png" class="conform" alt="approve img"></span></a>
                    <br><br>
                    <hr id="hr">
                </header>
                <!-- admin welcome message -->
                <div id="adminlog">
                  <h2>Admin Console</h2>
                  <h5><u id="u">WELCOME</u></h5>
                  <hr>
                </div>
                
                <!-- gallery for club activities -->
                <div id="gallery">
                  <?php include 'gallery.php';?>
                </div>
                <!-- new member registration -->
                <div id="newMemb">
                  <?php include 'Registration.php';?>
                </div>
              
            </div>
          
        </div>
        
        <!-- ======= Footer ======= -->
      <footer id="footer">
        

        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong>Capitol Art,s And Sports Club</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
          -->
            Designed by <a href="https://bootstrapmade.com/">Jithumon Thomas</a>
          </div>
        </div>
      </footer><!-- End  Footer -->
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
      
    </body>
    </html>
<?php
}
else{
  echo "<script>
       alert('Unauthorized Access');
      window.location.href='index.php#Login';
      </script>";
}
?>