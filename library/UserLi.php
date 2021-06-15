<!DOCTYPE html>
<html>
<head>
<title>Capitol Library</title>
    <meta charset="utf-8">
   
    <!-- css file -->
    <link href="../assets/css/library/UserLiCss.css" rel="stylesheet">
    <!-- ...... -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!----------------------------------------->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
    <!----------------------------------------->

</head>
<body id="body">
<div class="container">
<div class="header">
  <div class="card text-center mt-3" id="logo">

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

  </div>
</div>

<div id="navbar">
  <?php include "User_nav.php"; ?>
</div>

<div class="content response">
    <div class="row justify-content-md-center">
        <?php include "../../controller/library/showUser.php"; ?>
    </div>
</div>
<div id="div">
</div>
<footer class="container-fluid  text-center">
            <div class="row">
                <div class="col-sm-4">
                    <ul class="nav navbar-nav">
                        <li><a href="about.php">ABOUT</a> </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="nav navbar-nav">
                        <li><a href="t&p.php">TERMS AND POLICY</a> </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="nav navbar-nav">
                        <li><a href="contact.php">CONTACT US</a> </li>
                    </ul>
                </div>
            </div>
        </footer>
</div>

<script src="../../view/assets/js/library/UserLI.js"></script>  
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
