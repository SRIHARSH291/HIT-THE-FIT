<?php

if(isset($_REQUEST["submit"])){

  $user_name = $_REQUEST["user_name"];
  $email = $_REQUEST["email"];
  $password = $_REQUEST["password"];
  $contact = $_REQUEST["contact"];
  $date_of_birth = $_REQUEST["date_of_birth"];
  $gender = $_REQUEST["gender"];
  
  $sql ="INSERT into registration_tb (user_name,email,password,contact,date_of_birth,gender)  
  values('$user_name','$email','$password','$contact','$date_of_birth','$gender')";
  $query = mysqli_query($con, $sql);
  }
  if(isset($_REQUEST["submit"])){
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"]; 
  
    $sql ="INSERT into login_tb (email,password)  
  values('$email','$password')";
  $query = mysqli_query($con, $sql);
  }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "icon" href = "IMAGES\LOGOS\hit-the-fit-logo (3)1.png" type = "image/x-icon">
<title>HIT THE FIT</title>
    <link  href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link  href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="css/bootstrap-grid.min.css"></script>
    <link  rel="stylesheet" href="gymstyle-org.css">


    <style>
    </style>

</head>
<body>
<nav class="navbar navbar-expand-xl bg-black">
<div class="container-fluid">
      <a href="index.php"><img src="IMAGES/LOGOS/hit-the-fit-logo (zzz).png" width="300px" height="75px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-xl-0">
          
<!--dropdown for Workout Exercise List-->
<li><div class="dropdown">
  <button class="btn dropdown-toggle" data-bs-toggle="dropdown">
    <img src="IMAGES/WORKOUT-LIST/fitness_7615303.png"width="30px">WORKOUT-LIST
    <img src="IMAGES/WORKOUT-LIST/fitness_7615304.png"width="30px">
</button>
  <ul class="dropdown-menu bg-black" style="text-transform:uppercase">
      <li><a class="dropdown-item" href="abs-core.php">Abs/Core</a></li>
      <li><a class="dropdown-item" href="back-wings.php">Back/Wings</a></li>
      <li><a class="dropdown-item" href="biceps.php">Biceps</a></li>
      <li><a class="dropdown-item" href="calfs.php">Calfs</a></li>
      <li><a class="dropdown-item" href="cardioexe.php">Cardio</a></li>
      <li><a class="dropdown-item" href="chest.php">Chest</a></li>
      <li><a class="dropdown-item" href="forearms.php">Forearms</a></li>
      <li><a class="dropdown-item" href="fullbody.php">Full-Body</a></li>
      <li><a class="dropdown-item" href="hips.php">Hips</a></li>
      <li><a class="dropdown-item" href="legs.php">Legs</a></li>
      <li><a class="dropdown-item" href="neck.php">Neck</a></li>
      <li><a class="dropdown-item" href="shoulders.php">Shoulders</a></li>
      <li><a class="dropdown-item" href="triceps.php">Triceps</a></li>
  </ul>
</div></li>

  <!--Workout-Plans-->
                    <li class="nav-item"><a class="btn" href="workout_plans.php"><img src="IMAGES/WORKOUT-LIST/workout_plans-red.png"width="30px">WORKOUT-PLANS</a></li>
                  

<!--dropdown for Workout Exercise Type-->
<li><div class="dropdown">
  <button class="btn dropdown-toggle" data-bs-toggle="dropdown">
    <img src="IMAGES/WORKOUT-LIST/planning_5071237.png"width="30px">WORKOUT-TYPE
    <img src="IMAGES/WORKOUT-LIST/planning_5071237.png"width="30px">
</button>
  <ul class="dropdown-menu bg-black">
      <li><a class="dropdown-item" href="home_workout.php">HOME-WORKOUT</a></li>
      <li><a class="dropdown-item" href="gym_workout.php">GYM-WORKOUT</a></li>
  </ul>
</div></li>


<!--Dropdown for sign-up/Register-->

<li><div class="dropdown">
  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"  data-bs-auto-close="outside">
  <img src="IMAGES/IMG_HOME_PICS/file_12653114.png" width="30px">REGISTER
  </button>

<form action="insert.php" method="post" class="dropdown-menu p-5 bg-black" data-bs-popper="static" style="width: 280px">
  <div class="mb-3">
      <label for="exampleDropdownForuser_name" class="form-label">USER NAME</label>
      <input type="text" name="user_name" class="form-control" id="exampleDropdownForuser_name" placeholder="Enter Your Name">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormEmail" class="form-label">EMAIL</label>
      <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail" placeholder="Enter Email">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownForPassword" class="form-label">PASSWORD</label>
      <input type="password" name="password" class="form-control" id="exampleDropdownForPassword" placeholder="Enter Password">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownForContact" class="form-label">CONTACT</label>
      <input type="number" name="contact" class="form-control" id="exampleDropdownForContact" placeholder="Enter Contact">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownForDate_of_Birth" class="form-label">DATE OF BIRTH</label>
      <input type="date" name="date_of_birth" class="form-control" id="exampleDropdownForDate_of_Birth" placeholder="Enter DOB">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownForGender" class="form-label">GENDER</label>
      <input type="text" name="gender" class="form-control" id="exampleDropdownForGender" placeholder="Enter Gender">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
        <label class="form-check-label" for="dropdownCheck2">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-outline-dark">
      <img src="IMAGES/IMG_HOME_PICS/file_12653114.png" width="30px">SIGN UP</button>
  </form>
</div></li>

<!--Dropdown for Login-->
<li><div class="dropdown">
  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"  data-bs-auto-close="outside">
  <img src="IMAGES/IMG_HOME_PICS/profile_6914786.png" width="30px">LOGIN</button>

<form action="insert.php" method="post" class="dropdown-menu p-5 bg-black" data-bs-popper="static" style="width: 280px">
  <div class="mb-3">
      <label for="exampleDropdownFormEmail" class="form-label">EMAIL</label>
      <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail" placeholder="Enter Email">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownForPassword" class="form-label">PASSWORD</label>
      <input type="password" name="password" class="form-control" id="exampleDropdownForPassword" placeholder="Enter Password">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
        <label class="form-check-label" for="dropdownCheck2">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-outline-dark"><img src="IMAGES/IMG_HOME_PICS/profile_6914786.png" width="30px">
    LOGIN</button>
  </form>
</div></li>


</ul>
</div>
</div>        
</nav>


<!--HOME-WORKOUT-->
<br><br><br><br><br>
<div class="HEADINGS">
    <h1>HOME-WORKOUT</h1>
    <h6>WORKOUT-TYPES</h6>
</div>
<br><br><br>

<!--ALL WORKOUT GIFS of HOME-WORKOUT EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/FullBody/wall-walk-muscles.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">WALL-WALK-MUSCLES</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Calisthenic, Full Body</p>
  </div>
</div>
</div>

<!--Abs/Core-->

<!--ALL WORKOUT GIFS of Abs/Core EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Abs/Crunch.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">CRUNCHES</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Abs-Core</p>
  </div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Abs/Oblique-Floor-Crunches.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Oblique-Floor-Crunches</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Abs-Core</p>
  </div>
</div>
</div>

<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Abs/Cross-Crunch.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Cross-Crunch</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Abs-Core,Cardio</p>
</div>
</div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Abs/Tuck-Crunch.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Tuck-Crunch</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Abs-Core,Cardio</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Abs/Cross-Body-Mountain-Climber.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Cross-Body-Mountain-Climber</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Abs-Core,Cardio</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Abs/Bicycle-Crunch.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Bicycle-Crunch</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Abs-Core,Cardio</p>
  </div>
</div>
</div>

<!--Back/Wings-->


<!--Calfs-->


<!--ALL WORKOUT GIFS of FULLBODY EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Calfs\Squat-Hold-Calf-Raise.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Squat-Hold-Calf-Raise</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Calfs</p>
  </div>
</div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Calfs\Standing-Hamstring-Stretch.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Standing-Hamstring-Stretch</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Calfs</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Calfs\Standing-Wall-Calf-Stretch.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Standing-Wall-Calf-Stretch</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Calfs</p>
  </div>
</div>
</div>
</div>

<!--Cardio-->

<!--ALL WORKOUT GIFS of FULLBODY EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Cardio/Run.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">RUNNING</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Cardio</p>
  </div>
</div>
</div>

<div class="col-12">
<div class="card"  style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Cardio/Briskly-Walking.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">BRISKLY WALKING</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Cardio</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Cardio/sprint.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">SPRINT</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Cardio</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Cardio/Walking.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">WALKING</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Cardio</p>
  </div>
  </div>
  </div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Cardio/Push-up-Toe-Touch.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">PUSH-UP-TOE-TOUCH</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Cardio, Full Body</p>
</div>
</div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Cardio/Power-Skips.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">POWER-SKIPS</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Cardio</p>
  </div>
</div>
</div>

<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Cardio/Mountain-climber.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">MOUNTAIN-CLIMBER</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Abs, Cardio</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Cardio/Jump-Rope.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">JUMP-ROPE</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Cardio</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Cardio/Elbow-To-Knee-Twists.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">ELBOW-TO-KNEE-TWISTS</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Cardio</p>
  </div>
</div>
</div>
</div>



<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Forearms\Wrist-Circles-Stretch.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Wrist-Circles-Stretch</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Forearms</p>
  </div>
</div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Hips\bodyweight-lunges.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Bodyweight-lunges</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
      Primary Muscles: Hips, Legs</p>
  </div>
</div>
</div>
<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Legs\BODYWEIGHT-SUMO-SQUAT.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Bodyweight-Sumo-Squat</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
      Primary Muscles: Legs</p>
  </div>
</div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Legs\bodyweight-lunges.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Bodyweight-lunges</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
      Primary Muscles: Legs, Hips</p>
  </div>
</div>
</div>

<!--Neck-->

<!--ALL WORKOUT GIFS of NECK EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Neck\Chin-Tuck.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Chin-Tuck</h5>
    <p class="card-text">Equipment: NO EQUIPMENT, Just wall<br>
      Primary Muscles: Neck</p>
  </div>
</div>
</div>

<div class="col-12">
<div class="card"  style="width: 18rem; ">
<img src="IMAGES\WORKOUT-LIST\Neck\Kneeling-Neck-Stretch.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Kneeling-Neck-Stretch</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
      Primary Muscles: Neck</p>
  </div>
</div>
</div>
</div>

<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Neck\Front-and-Back-Neck-Stretch.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Standing-Front-and-Back-Neck-Stretch</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
      Primary Muscles: Neck</p>
</div>
</div>
  </div>
</div>

<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Neck\Rotating-Neck-Stretch.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Standing-Rotating-Neck-Stretch</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
      Primary Muscles: Neck</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Neck\Side-Neck-Stretch.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Standing-Side-Pull-Neck-Stretch</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
      Primary Muscles: Neck</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Neck\Side-Push-Neck-Stretch.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Standing-Side-Push-Neck-Stretch</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
      Primary Muscles: Neck</p>
  </div>
</div>
</div>
</div>


<!--Shoulders-->

<!--ALL WORKOUT GIFS of Shoulders EXERCIES-->


<div class="col-12">
<div class="card"  style="width: 18rem; ">
<img src="IMAGES\WORKOUT-LIST\Shoulders\Arm-Circles_Shoulders.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Arm-Circles-Shoulders</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
      Primary Muscles: Shoulders</p>
  </div>
</div>
</div>
</div>




<!--Triceps-->

<!--ALL WORKOUT GIFS of Triceps EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Triceps\Body-Ups.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Body-Ups</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
Primary Muscles: Triceps</p>
  </div>
</div>
</div>

<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Triceps\Triceps-dips-on-floors.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Triceps-dips-on-floor</h5>
    <p class="card-text">Equipment: NO EQUIPMENT<br>
      Primary Muscles: Triceps</p>
  </div>
</div>
</div>
</div>
