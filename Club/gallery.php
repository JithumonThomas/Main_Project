<?php 
$servername="localhost";
$username="root";
$password="Jithu_root9";
$dbname="db_main_project";
$conn = new mysqli($servername, $username, $password, $dbname);

//Make connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//SQL query
$sql = "SELECT * FROM  `tbl_gallery_add`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      $imageURL = '../../controller/Photo/'.$row["photo"];
      
       echo" <div class='content section' style='opacity: 0.6;'>
             <img class='slides' src='$imageURL' style=width:100%></div>";
    }
} else {
    echo "Empty Gallery";
}
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
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
  
  setTimeout(slideshow, 5000); // Change slides every 3 seconds
}

</script>
</body>
</html>