<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Member Registration</title>
	<!-- Bootstrap Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- css file -->
	<link href="../assets/css/Register.css" rel="stylesheet">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css2?family=Dr+Sugiyama&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">

</head>
<body >
<?php include "User_nav.php"; ?>
	
<div class="container-fluid">
    
	<div class="col-lg-12 mt-5">
	<h2 class="card card-text">Registration Form</h2>
	<div class="row">
				<form method="POST" action="../../controller/RegisterAct.php" name="RegisterFrm" enctype="multipart/form-data">
					<div class="col-sm-12 card card-body">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label >First Name</label>
								<input type="text" name="txtFname" placeholder="Enter First Name Here.." class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" name="txtLname" placeholder="Enter Last Name Here.." class="form-control" required>
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." name="txtAddress" rows="3" class="form-control" required></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group ">
								<label>District</label>
								<select name="txtdistrict" class="form-control">  
								<option value="District " id="select"><---	Select Your District  ---></option>  
								<option value="Thiruvanadapuram">Thiruvanadapuram</option>  
								<option value="Kollam">Kollam</option>  
								<option value="Pathanamthitta">Pathanamthitta</option>  
								<option value="Alappuzha">Alappuzha</option>  
								<option value="Kottayam" selected>Kottayam</option>  
								<option value="Idukki">Idukki</option>  
								<option value="Ernakulam">Ernakulam</option> 
								<option value="Thrissur">Thrissur</option> 
								<option value="Palakkad">Palakkad</option> 
								<option value="Malappuram">Malappuram</option>  
								<option value="Kozhikkode">Kozhikkode</option>  
								<option value="Wayanad">Wayanad</option>
								<option value="Kannur">Kannur</option>
								<option value="Kasargode">Kasargode</option>  
								</select>
							</div>	
							<div class="col-sm-4 form-group ">
							<label>Gender</label>
								<div class="form-control">
									<input type="radio" class=" col-xs-1 "   name="gender" value="male" > 
									<label  class="col-xs-3 gender" >Male</label>  
									<input type="radio" class=" col-xs-1 " name="gender" value="female" > 
									<label class="col-xs-3 gender">Female</label> 
									<input type="radio" class=" col-xs-1 " name="gender" value="others"> 
									<label class="col-xs-3">Other</label>   
								</div>
								
							</div>	
							<div class="col-sm-4 form-group">
								<label>Phone</label>
								<input type="text" name="phone" size="10" class="form-control" required/>
								
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>DATE OF BIRTH</label>
								<input type="date" name="dob" class="form-control"  required>
							</div>
									
							<div class="col-sm-4 form-group">
								<label>PHOTO</label>
								<input type="file" name="file" class="form-control" required>
							
							</div>
						</div>
														
					
					<button type="submit" class="btn btn-lg btn-info" name="btn_up">Submit</button>					
					</div>
				</form> 
				</div>
	</div>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>