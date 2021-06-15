<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="UserLi.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="UserCheck.php">
      <div class="mr-4">
        <select class="custom-select language" name="language" id="language" >
          <option selected value="">Book Language</option>
          <option value="English">English</option>
          <option value="Malayalam">Malayalam</option>
        </select>
      </div>
      <div>
      <select class="custom-select  category" name="category" id="category" required>
        <option selected value="">Select Category</option>
        <option value="Academic">Academic</option>
        <option value="Novel">Novel</option>
        <option value="Story">Story</option>
        <option value="Fiction">Fiction</option>
      </select>
      </div>
      <div>
        <button  id="btn" class="btn btn-success ml-4">Search</button>
      </div>
    </form>
  </div>
</nav>
</body>
</html>