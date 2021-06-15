
<?php
include '../../model/CommonClass.php';
$id=$_REQUEST['id'];

$obj=new Operation();
$obj->DbOperation();   //db connection
$obj->OneEvent($id);
$result = $obj->select();
if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) 
    {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Occation Add</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <!-- ........ -->
</head>
<body id="body">
    <?php include "User_nav.php"; ?>
    <header>
        <div class="col-md-8 logodiv">
            <h1>CAPITOL ART'S <span>&</span>SPORTS CLUB</h1>
            <a href="index.html"><img src="../assets/img/circle-cropped.png" alt="Logo Image" title=""></a>
        </div>
    </header>
    <div class="container-fluid">
        <div id="galleryDiv" class="col-md-6">
            <form action="../../controller/event_regAct.php" method="POST" enctype="multipart/form-data" class="mt-5 ml-5">
                <h3>Fill This Form</h3>
                <div class="form-group">
                    <label for="txtName">Name</label>
                    <input type="text" class="form-control" name="txtName" id="Name" required>
                </div>
                <div class="form-group">
                    <label for="txtItem">Item</label>
                    <input type="text" class="form-control" name="txtItem" value="<?php echo strtoupper($row['eventName']); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="txtPhNum">Phone Number</label>
                    <input type="number" class="form-control" name="txtPhNum" id="number" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-file" name="txtFee" value="<?php echo $row['Reg_fee']; ?>" readonly>
                </div>
                <div class="form-group ">
                    <select class="custom-select custom-select" name="txtPayment" required>
                        <option value=""selected disabled>Select Your Payment Method</option>
                        <option value="MobilePayment" >Online Payment</option>
                        <option value="OfflinePayment" >Offline Payment</option>
                    </select>
                </div>
                <div class="form-group">
                <label for="date">Date</label>    
                <input type="text" class="form-control-file" name="txtDate" value="<?php echo $row['date']; ?>" readonly >
                </div>
                <button type="submit" name="btn_up" class="btn btn-success btn-block mt-5">Register</button>
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
<?php
    }
}
else{
    echo"errr";
}
?>