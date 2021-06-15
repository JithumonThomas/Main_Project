<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Add</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- ....... -->
    <!-- css file -->
    <link href="../assets/css/library/AdminLiCss.css" rel="stylesheet">
    <!-- .... -->
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dr+Sugiyama&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- ........ -->
</head>
<body id="body">
    <?php include "Admin_nav.php"; ?>
    <header>
        <div class="col-md-8 logo" id="logo">
            <h1>CAPITOL ART'S <span>&</span>SPORTS CLUB</h1>
            <a href="index.html"><img src="../assets/img/circle-cropped.png" alt="Logo Image" title=""></a>
        </div>
        
    </header>
    <div class="container-fluid">
        <div id="centerDiv" class="col-md-6 text-center text-dark">
            <form action="../../controller/library/bookAddAct.php" method="POST" enctype="multipart/form-data" class="mt-5 ">
                <h3 >ADD BOOK</h3>
                <div class="text-left">
                    <div class="form-group">
                        <label for="name">Book Name</label>
                        <input type="text" name="txtbname" class="form-control" id="txtbname"
                        placeholder= "enter name of book" size="15" required />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity" class="form-control" id="txtbname"
                        placeholder= "book quantity" size="15" min="1" max="15" required />
                    </div>
                    <div class="form-group">
                        <label for="language">Language</label>
                        <select class="custom-select" name="language" id="language" required>
                            <option selected value="">Book Language</option>
                            <option value="English">English</option>
                            <option value="Malayalam">Malayalam</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="txtauthor" class="form-control" id="txtauthor"
                        placeholder="authors name" size="15" required/>
                    </div>
                    <div class="form-group">
                        <label for="isbn">isbn Number</label>
                        <input type="text" name="isbn" class="form-control" id="isbn" placeholder="isbn
                        number" size="15" required/>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="custom-select" name="category" id="category" required>
                            <option selected value="">Select Category</option>
                            <option value="Academic">Academic</option>
                            <option value="Novel">Novel</option>
                            <option value="Story">Story</option>
                            <option value="Fiction">Fiction</option>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control" id="price"
                        placeholder="price" size="15" required/>
                    </div>
                    <div class="form-group">
                        <label for="image">Book Image</label>
                        <input type="file" name="file" class="form-control" id="Image"
                        placeholder="book image" required>
                    </div>
                </div>

                <button type="submit" name="btn_up" class="btn btn-success btn-block mt-5">Add</button>
            </form>
        </div>
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
<!-- bootstrap js file -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- ......... -->
</body>
</html>