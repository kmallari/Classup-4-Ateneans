<html lang="en">

<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
include("API/connect.php");
?>

<head>
    <?php include("API/connect.php"); ?> <!-- might remove or relocate-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>ClassADMU</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-5 ">
      <a class="navbar-brand" href="index.php">ClassADMU</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              My schedules
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Primary Schedule</a>
              <a class="dropdown-item" href="#">Seconday Schedule</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">View all schedules</a>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
        </ul>
        <a href="register.php"><button type="button" class="btn btn-light" id="register">Register</button></a>   
        <a href="https://canvas.ateneo.edu" class="btn btn-outline-light my-2 my-lg-0" role="button">Go to Canvas</a>
      </div>
    </nav>

    <form id="reg-form" action="API/checkEnrolled.php" method="POST" role="form">
    <div class="form-group">
      <label for="id-number">ID Number</label>
      <input type="text" class="form-control" name="ID" placeholder="185134" Required>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>

    <!-- DO NOT TOUCH THE SCRIPT FILES BELOW THIS LINE -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- DO NOT TOUCH THE SCRIPT FILES ABOVE THIS LINE -->
</body>
</html>

<?php $conn->close();?>