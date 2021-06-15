<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="../assets/css/library/AdminLiCss.css" rel="stylesheet">
    <!-- ...... -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!----------------------------------------->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dr+Sugiyama&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
    <!----------------------------------------->
    <title>Admin Home Page</title>
  </head>
  <body id="body">
    <header>
      <?php include "Admin_nav.php"; ?>
    </header>
   <div class="container">
    <div class=" text-center mt-3" id="logo">
      <h1>CAPITOL ART'S <span>&</span>SPORTS CLUB</h1>
      <a href="index.html"><img src="../assets/img/circle-cropped.png" alt="Logo Image" title=""></a>
      <p id="demo" class="mt-3"><?php echo'<script>
              var clock = setInterval(digital, 1000);
              function digital() {
              var d = new Date();
              document.getElementById("demo").innerHTML = d.toLocaleTimeString();
              }
              </script> ' ?> 
        </p>

        <h5>Capitol Library</h5>
        <h2>ADMIN CONSOLE</h2>
        <hr>
    </div>
    
    <section id="section">
            <div class="row justify-content-md-center">
              <div class="col-md-4 mt-4">
                <div class="card " style="width: 100%; height:13rem" id="due">
                  <div class="card-body">
                    <a href=""><h4 class="text-center mt-5">Due Details</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-4">
                <div class="card " style="width: 100%; height:13rem" id="add">
                  <div class="card-body">
                    <a href="bookAdd.php"><h4 class="text-center mt-5 ">Add New Book</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-4">
                <div class="card " style="width: 100%; height:13rem"id="manipulate">
                  <div class="card-body">
                    <a href="Manipulate.php"><h4 class="text-center mt-5 ">Manipulate Book</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5">
                <div class="card " style="width: 100%; height:13rem">
                  <div class="card-body">
                    <a href=""><h4 class="text-center mt-5 ">REPORT</h4></a>
                  </div>
                </div>
              </div>
            </div>
    </section>
    <section id="sec2">
        <div class="row mt-5 justify-content-md-center">
              <?php include "../../controller/library/showAdmin.php"; ?>
        </div>
    </section>
    <footer>
            <div class="container footerDiv">
            <hr>
            <div class="copyright">
                &copy; Copyright <strong>Capitol Art,s And Sports Club</strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">Jithumon Thomas</a>
            </div>
            </div>
        </footer>
   </div>
    <script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
  ></script>
  </body>
</html>
