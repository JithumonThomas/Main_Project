<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/library/AdminLiCss.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand col-md-6 navbar-light bg-light" id="header">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="AdminHome.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="AdminHome.php#due" onclick=due()>Due Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="AdminHome.php#add" onclick=add()>Add New Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="AdminHome.php#manipulate" onclick=mani()>Manipulate Book</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="" onclick=mani()>REPORT</a>
            </li>
          </ul>
        </div>
      </nav>
</body>
</html>
