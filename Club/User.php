<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Page</title>

  <script src="https://kit.fontawesome.com/f9e84e067e.js" crossorigin="anonymous"></script>

  <!-- logo -->
  <link href="../assets/img/circle-cropped.png" rel="icon">
  <!-- css file -->
  <link href="../assets/css/UserStyle.css" rel="stylesheet">
  
  <!-- Bootstrap Link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet"></head>
<body>
  <div id="firstdiv">
  <div class="row" >
     <div>
     <nav id="navbar" class="navbar navbar-dark  col-md-4">
        <button class="navbar-toggler bg-danger"  type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php include "../../controller/profilePic.php" ?>
       
      </nav>
     </div>
    
    <div id="logo" class="col-md-8 ">
      <header>
        <div class="row">
          <div>
            <h1>CAPITOL ART'S <span>&</span>SPORTS CLUB</h1>
            <span><img src="../assets/img/circle-cropped.png" alt="Logo Image" title=""></span>
            
          </div>
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
              <tr id="alert">
                <td colspan="3"><?php include "../../controller/succesaprov.php" ?></td>
              </tr>
            </table>
        </div>
        </div>
      </header>
      <hr>
      
    </div>
   
  </div>
  <div id="nav" class="pos-f-t col-md-4">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class=" p-4">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active mt-3">
            <a class="nav-link" href="ViewMemberUser.php">EXISTING MEMBER VIEW </a>
          </li>
          <li class="nav-item mt-3">
            <a class="nav-link" href="#">LIBRARY</a>
          </li>
          <li class="nav-item dropdown mt-3">
            <a class="nav-link" href="#">EVENT</a>
          </li>
          <li class="nav-item mt-3">
            <a class="nav-link"  onclick="myFunction()">GALLERY</a>
          </li>
          <li class="nav-item mt-3">
            <a class="nav-link" href="NewMemberReg.php">NEW ME MEMBER REGISTRATION</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="divcont row">
    <div id="participate" class="col-md-4 " >
      <a href=""><img src="../assets/img/charity.png" alt=""></a>
      <h4>Check Your Participation</h4>
    </div>
    <div id="Library" class="col-md-4 " >
      <img class="border border-success rounded-circle " src="../assets/img/library.png" alt="">
      <h3>Library</h3>
      <h6 class="bg-success">“If you don’t like to read, you haven’t found the right book.”</h6>
      <button class="btn btn-secondary btn-sm" type="button" data-toggle="collapse" data-target="#transi" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-language" ></i>
      </button>
      <div class="collapse" id="transi">
          <h6 class="bg-success mt-3">“നിങ്ങൾക്ക് വായിക്കാൻ താൽപ്പര്യമില്ലെങ്കിൽ, ശരിയായ പുസ്തകം നിങ്ങൾ കണ്ടെത്തിയില്ല.”</h6>
      </div>
      <br>
      <a href="../../controller/library/CrossCheck.php"><button class="btn btn-outline-success mt-2" >Select Your book</button></a>
    </div>
    <div id="news" class="col-md-4">
      <a href=""><img src="../assets/img/paperclip.png" alt=""></a>
      <span>NEWS</span>
      <div id="newscont" class="row">
        <div class="card " style="width: 20rem; height:12rem;">
          <i class="far fa-newspaper"></i>
            <?php include "../../controller/news.php"; ?>
            
        </div>
        
      </div>
    </div>
  </div>

  <div id="gallery">
  <h3>GALLERY</h3>
    <div  class="row">
    
      <?php include "../../controller/userGallery.php"; ?>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- js file -->
  <script src="../../view/assets/js/validation.js"></script>  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<script>
var index = 0;
        slideshow();
        function slideshow() {
          var i;
          var x = document.getElementsByClassName("slides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          
          index++;
          if (index > x.length) {index = 1}    
          x[index-1].style.display = "block"; 
          
          setTimeout(slideshow, 3000); // Change slides every 3 seconds
        }
</script>

