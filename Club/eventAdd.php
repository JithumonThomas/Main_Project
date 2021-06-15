<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Page</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- ....... -->
    <!-- css file -->
    <link rel="stylesheet" href="../assets/css/eventCss.css">
    <!-- .... -->
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dr+Sugiyama&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
    <!-- ........ -->
</head>
<body>
    <?php include "adminNav.php"; ?>
    <header>
        <div class="col-md-8 logodiv">
            <h1>CAPITOL ART'S <span>&</span>SPORTS CLUB</h1>
            <a href="index.html"><img src="../assets/img/circle-cropped.png" alt="Logo Image" title=""></a>
        </div>
    </header>
    <div class="container-fluid">
        <div id="centerDiv" class="col-md-6">
            <form action="../../controller/eventAddAct.php" method="POST" enctype="multipart/form-data" class="mt-5 ml-5">
                <div class="form-group">
                    <label for="txtEventName">Event</label>
                    <input type="text" class="form-control" name="txtEventName" id="eventname">
                </div>
                <div class="form-group ">
                    <select class="custom-select custom-select" name="txtWay" require>
                        <option selected disabled>Way Of Conducting</option>
                        <option value="Offline ">Offline</option>
                        <option value="Online">Online</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtDesc">Description</label>
                    <textarea  class="form-control" name="txtDesc" id="Desc"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Place Of Conducting</label>
                    <input type="text" class="form-control" name="txtPlace" id="place">
                </div>
                <div class="form-group">
                    <label for="txtDate">Date Of Conducting</label>
                    <input type="date" class="form-control" name="txtDate" id="date">
                </div>
                <div class="form-group">
                    <label for="txtDate">Registration Fee</label>
                    <input type="number" class="form-control" name="txtFee" id="date">
                </div>
                <div class="form-group">
                    <label for="eventPic">Event Photo</label>
                    <input type="file" class="form-control-file" name="file" id="eventPic">
                </div>
                <button type="submit" name="btn_up" class="btn btn-success btn-block mt-5">ADD EVENT</button>
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