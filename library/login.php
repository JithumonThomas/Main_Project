<!DOCTYPE html>
<html lang="en">

<head>
    <title>Library Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/libraryLogin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>

<body id="body">
    <div class="container">
        <div class="jumbotron row text-center border border-success" >
        <div class="col-md-6">
          <img src="../assets/img/online-library.png" alt="online-library.png" srcset="" class="w-25 ">
        </div>
        <div id="logo" class="col-md-6">
          <!-- Uncomment below if you prefer to use a text logo -->
          <h1><a href="#intro">CAPITOL ART'S <span>&</span>SPORTS CLUB</a></h1>
          <a href="index.html"><img src="../assets/img/circle-cropped.png" alt="Logo Image" title="" class="border rounded-circle" border-white"></a>
      </div>
           
        </div>
        <!----------------------------------------->
        <nav class="navbar navbar-inverse bg-dark">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="home.php" class="text-white">Home</a></li>
                </ul>
            </div>
        </nav>
        <!----------------------------------------->
        <div class="row">
            <div class="col-sm-4">
            </div>
            <!----------------------------------------->
            <div class="col-sm-4 mt-3">
                <h3>LOGIN..</h3>
                <form method="post" action="loginaction.php">
                    <p>Please fill in this form for login.</p>
                    <hr>

                    <label for="username"><b>User Name</b></label>
                    <input type="text" placeholder="Enter User Name" name="uname" id="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="pass" id="pass" required>
                    <hr>
                    <button type="submit" class="registerbtn">LOGIN</button>
                    <button type="reset" class="btn btn-outline-primary btn-block">RESET</button tton>
                </form>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
    <!----------------------------------------->
    <footer class="container-fluid  text-center pt-5">
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
</body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>