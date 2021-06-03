<html lang="en">

<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
include("API/connect.php");
?>

<head>
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
          <li class="nav-item active">
            <a class="nav-link" href="schedule.php">Schedules <span class="sr-only">(current)</span></a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
        </ul>
        <a href="register.php"><button type="button" class="btn btn-light" id="register">Register</button></a>   
        <a href="https://canvas.ateneo.edu" class="btn btn-outline-light my-2 my-lg-0" role="button">Go to Canvas</a>
      </div>
    </nav>
  
    <div class="p-5">
        <h3 class="display-3">Add your class!</h3>
        <p class="lead"> Insert the necessary information below</p>
        <form action="API/addClasses.php" method="POST" role="form" class="form-group">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <label class="input-group-text" for="classCode">Class Code</label>
            </div>
            <input type="text"class="form-control" placeholder="ENGG38" id="classCode" name="code">
            </div>

            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <label class="input-group-text" for="classSection">Class Section</label>
            </div>
            <input type="text" class="form-control" placeholder="A" id="classSection" name="section">
            </div>

            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <label class="input-group-text" for="className">Class Name</label>
            </div>
            <input type="text" class="form-control" placeholder="Software Development" id="className" name="name">
            </div>

            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <label class="input-group-text" for="classUnits">Units</label>
            </div>
            <input type="number" class="form-control" placeholder="2" id="classUnits" name="units">
            </div>

            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <label class="input-group-text" for="classDay">Day</label>
            </div>
            <input type="text" class="form-control" placeholder="T-Th" id="classDay" name="day">
            </div>

            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <label class="input-group-text" for="classTime">Time</label>
            </div>
            <input type="text" class="form-control" placeholder="1600-1800" id="classTime" name="time">
            </div>

            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <label class="input-group-text" for="classRoom">Room</label>
            </div>
            <input type="text" class="form-control" placeholder="TBA" id="classRoom" name="room">
            </div>

            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <label class="input-group-text" for="classProf">Professor</label>
            </div>
            <input type="text" class="form-control" placeholder="Genevieve Ngo" id="classProf" name="prof">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
            </form>
    </div>
    <!-- DO NOT TOUCH THE SCRIPT FILES BELOW THIS LINE -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- DO NOT TOUCH THE SCRIPT FILES ABOVE THIS LINE -->
</body>
</html>

<?php $conn->close();?>