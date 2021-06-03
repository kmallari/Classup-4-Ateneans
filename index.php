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

    <div class="p-5">
      <div 
        class="bg-image"
        style=
          "background-image: url('');
          height: 100vh;"
      >
        <h1 class="display-3">Get Started here!</h1>
        <p class="lead">This website application will allow you to easily track your enrolled classes. Select your enrolled class from the dropdown menu below.</p>

        <form action="API/enrollClass.php" method="POST" role="form" class="form-group">
        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="classSelect">Class</label>
        </div>
        <select class="custom-select" id="classSelect" name="class">
          <option selected>Choose...</option>
          <?php
            $sql = "SELECT * FROM classes";
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            {
              while($row = $result->fetch_assoc())
              {
                echo '<option value="' . $row["idClasses"] . '">' . $row['codeClass'] . $row['sectionClass'] . '</option>';
              }
            }
            else
            {
              echo "<option value=''>No classes available</option>";
            }
          ?>
        </select>
        </div>
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Student Number" aria-label="Student Number" name="id">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <h3>Check your enrolled classes!</h3>
        <form action="index.php" method="POST" role="form" class="form-group">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Student Number" aria-label="Student Number" name="id">
        </div>
        <button type="Check" class="btn btn-primary" name="check">Check</button>
        </form>

        <h3>Unenroll classes below!</h3>
        <?php
        if(isset($_POST['check']))
        {
          $id = $_POST['id'];
          echo '<form action="API/unenrollClass.php" method="POST" role="form" class="form-group">';
          echo '<div class="input-group mb-3">';
          echo '<div class="input-group-prepend">';
          echo '<label class="input-group-text" for="studentID">Student Number</label>';
          echo '</div>';
          echo '<input class="form-control" type="text" id="studentID" value="' . $id . '" name="id" readonly>';
          echo '</div>';
          echo '<div class="input-group mb-3">';
          echo '<div class="input-group-prepend">';
          echo '<label class="input-group-text" for="classSelect">Class</label>';
          echo '</div>';
          echo '<select class="custom-select" id="classSelect" name="class">';
          echo '<option selected>Choose...</option>';
          $sql = "SELECT * FROM enrolledclasses JOIN classes ON enrolledclasses.Classes_idClasses = classes.idClasses WHERE Student_idStudent = $id";
          $result = $conn->query($sql);
          if ($result->num_rows > 0)
          {
            while($row = $result->fetch_assoc())
            {
              echo '<option value="' . $row["idClasses"] . '">' . $row['codeClass'] . $row['sectionClass'] . '</option>';
            }
          }
          else
          {
            echo "<option value=''>No classes available</option>";
          }

          echo "</select>";
          echo "</div>";
          echo '<button type="Unenroll" class="btn btn-primary" name="Unenroll">Unenroll</button>';
          echo "</form>";
        }
        else
        {
          echo "<p>Fill up the section above to check your enrolled classes before unenrolling! </p>";
        }
        ?>

        <h3>Can't find your class?</h3>
        <p><small>Edi ADMU...</small><br>
        Click the button below!</p>
        <a class="btn btn-primary btn-lg" href="createclass.php" role="button">Add New Class</a>
      </div>
    </div>    

    <!-- DO NOT TOUCH THE SCRIPT FILES BELOW THIS LINE -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- DO NOT TOUCH THE SCRIPT FILES ABOVE THIS LINE -->
</body>
</html>

<?php $conn->close();?>