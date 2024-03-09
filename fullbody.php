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


<!--Fullbody-->
<br><br><br><br><br>
<div class="HEADINGS">
    <h1>FULL-BODY</h1>
    <h6>WORKOUT-LIST</h6>
</div>
<br><br><br>

<!--ALL WORKOUT GIFS of FULLBODY EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES/WORKOUT-LIST/FullBody/Backward-Medicine-Ball-Throw.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">BACKWARD-MEDICINE-BALL-THROW</h5>
    <p class="card-text">Equipment:-Exercise Ball, Full Gym
Primary Muscles:-Full Body</p>
  </div>
  </div>
  </div>

<div class="col-12">
<div class="card"  style="width: 18rem; ">
  <img src="IMAGES/WORKOUT-LIST/FullBody/Barbell-Bent-Over-Row.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">BARBELL-BENT-OVER-ROW</h5>
    <p class="card-text">Equipment:-Barbell, Full Gym<br>
Primary Muscles:-Back / Wing, Erector Spinae, Full Body
</p>
</div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES/WORKOUT-LIST/FullBody/StrongMan-Tire-Flip.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">STRONGMAN-TIRE-FLIP</h5>
    <p class="card-text">Equipment: Full Gym <br>
      Primary Muscles: Full Body</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/FullBody/Tire-SledgeHammer.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">TIRE-SLEDGEHAMMER</h5>
    <p class="card-text">Equipment: Full Gym<br>
Primary Muscles: Full Body</p>
  </div>
  </div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/FullBody/wall-walk-muscles.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">WALL-WALK-MUSCLES</h5>
    <p class="card-text">Equipment: Full Gym, NO EQUIPMENT<br>
Primary Muscles: Calisthenic, Full Body</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/FullBody/zercher-carry.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">ZERCHER-CARRY</h5>
    <p class="card-text">Equipment: Barbell,<br>
    Full Gym<br>
Primary Muscles: Full Body</p>
</div>
</div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/FullBody/overhead-squat.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">OVERHEAD-SQUAT</h5>
    <p class="card-text">Equipment:-Exercise Ball, Full Gym
Primary Muscles:-Full Body</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/FullBody/Kettlebell-Hang-Clean.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">KETTLEBELL-HANG-CLEAN</h5>
    <p class="card-text">Equipment: Full Gym, Kettlebell<br>
Primary Muscles: Full Body</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/FullBody/Farmers-walk_Cardio.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">FARMERS-WALK-CARDIO</h5>
    <p class="card-text">Equipment: Dumbbells, Full Gym, Kettlebell<br>
Primary Muscles: Full Body</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/FullBody/Dumbbell-Power-Clean.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">DUMBBELL-POWER-CLEAN</h5>
    <p class="card-text">Equipment: Dumbbells,<br> Full Gym<br>
Primary Muscles: Full Body</p>
  </div>
</div>
</div>
</div>

<!--Abs/Core-->
<br><br><br>
<div class="HEADINGS">
    <h1>ABS/CORE</h1>
    <h6>WORKOUT-LIST</h6>
</div>
<br><br><br>
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

<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Abs/Leg-Raise-Dragon-Flag.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Leg-Raise-Dragon-Flag</h5>
    <p class="card-text">Equipment: Bench<br>
Primary Muscles: Abs-Core</p>
  </div>
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
  <img src="IMAGES/WORKOUT-LIST/Abs/Seated-Bench-Leg-Pull-in.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Seated-Bench-Leg-Pull-In</h5>
    <p class="card-text">Equipment: Bench<br>
Primary Muscles: Abs-Core</p>
  </div>
  </div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Abs/Standing-Cable-Crunch.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Standing-Cable-Crunch</h5>
    <p class="card-text">Equipment: Cable<br>
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
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Abs/Ab-Coaster-Machine.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Abs-Coaster-Machine</h5>
    <p class="card-text">Equipment: Machine<br>
Primary Muscles: Abs-Core</p>
  </div>
</div>
</div>
</div>


<!--Back/Wings-->
<br><br><br>
<div class="HEADINGS">
    <h1>BACK/WINGS</h1>
    <h6>WORKOUT-LIST</h6>
</div>
<br><br><br>
<!--ALL WORKOUT GIFS of Back/Wings EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES/WORKOUT-LIST/Back/Barbell-Bent-Over-Row.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-Bent-Over-Row</h5>
    <p class="card-text">Equipment: Barbell, Full Gym<br>
Primary Muscles:  Back / Wing</p>
  </div>
</div>
</div>

<div class="col-12">
<div class="card"  style="width: 18rem; ">
  <img src="IMAGES/WORKOUT-LIST/Back/Barbell-Deadlift.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-Deadlift</h5>
    <p class="card-text">Equipment: Barbell, Full Gym<br> 
Primary Muscles:-Back / Wing, Legs</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES/WORKOUT-LIST/Back/Cable-Rear-Pulldown.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Cable-Rear-Pulldown</h5>
    <p class="card-text">Equipment: Cable<br>
Primary Muscles:  Back / Wing</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Back/Cable-Straight-Arm-Pulldown.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Cable-Straight-Arm-Pulldown</h5>
    <p class="card-text">Equipment: Cable, Full Gym<br>
Primary Muscles: Back / Wing</p>
  </div>
  </div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Back/Front-Pulldown.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Front-Pulldown</h5>
    <p class="card-text">Equipment: Full Gym, Machine<<br>
Primary Muscles:  Back / Wing</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Back/Lat-Pulldown.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Lat-Pulldown</h5>
    <p class="card-text">Equipment:  Cable, Full Gym<br>
Primary Muscles:  Back / Wing</p>
</div>
</div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Back/Lever-T-bar-Row.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Lever-T-bar-Row</h5>
    <p class="card-text">Equipment: Full Gym, Machine<br>
Primary Muscles: Back / Wing</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Back/Pull-up.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Pull-ups</h5>
    <p class="card-text">Equipment: Pull-Up Bar<br>
Primary Muscles:  Back / Wing</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Back/Rope-Climb.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Rope-Climbing</h5>
    <p class="card-text">Equipment: Gym Rope<br>
Primary Muscles: Back / Wing</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Back/Seated-Cable-Row.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Seated-Cable-Row</h5>
    <p class="card-text">Equipment:  Cable, Full Gym<br>
Primary Muscles:  Back / Wing</p>
  </div>
</div>
</div>
</div>


<!--Biceps-->
<br><br><br>
<div class="HEADINGS">
    <h1>BICEPS(ARMS)</h1>
    <h6>WORKOUT-LIST</h6>
</div>
<br><br><br>
<!--ALL WORKOUT GIFS of FULLBODY EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES/WORKOUT-LIST/Biceps/Barbell-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-Curl</h5>
    <p class="card-text">Equipment: Barbell<br>
Primary Muscles: Biceps</p>
  </div>
</div>
</div>

<div class="col-12">
<div class="card"  style="width: 18rem; ">
  <img src="IMAGES/WORKOUT-LIST/Biceps/Concentration-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Concentration-Curl</h5>
    <p class="card-text">Equipment: Dumbbells<br>
    Primary Muscles: Biceps</p>

  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES/WORKOUT-LIST/Biceps/Double-Arm-Dumbbell-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Double-Arm-Dumbbell-Curl</h5>
    <p class="card-text">Equipment: Dumbbells<br>
    Primary Muscles: Biceps</p>

  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Biceps/Dumbbell-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Dumbbell-Curl</h5>
    <p class="card-text">Equipment: Dumbbells<br>
    Primary Muscles: Biceps</p>
  </div>
  </div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Biceps/Dumbbell-Preacher-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Dumbbell-Preacher-Curl</h5>
    <p class="card-text">Equipment: Dumbbells<br>
    Primary Muscles: Biceps</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Biceps/Hammer-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Hammer-Curl</h5>
    <p class="card-text">Equipment: Dumbbells<br>
    Primary Muscles: Biceps</p>
</div>
</div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Biceps/Cable-Single-Arm-Bicep-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Cable-Single-Arm-Bicep-Curl</h5>
    <p class="card-text">Equipment: Cable, Resistance Band<br>
    Primary Muscles: Biceps</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Biceps/Seated-Incline-Dumbbell-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Seated-Incline-Dumbbell-Curl</h5>
    <p class="card-text">Equipment: Dumbbells, Bench<br>
    Primary Muscles: Biceps</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Biceps/Z-Bar-Preacher-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Z-Bar-Preacher-Curl</h5>
    <p class="card-text">Equipment: Barbell, Bench<br>
    Primary Muscles: Biceps</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES/WORKOUT-LIST/Biceps/zottman-curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">zottman-curl</h5>
    <p class="card-text">Equipment: Dumbbells<br>
    Primary Muscles: Biceps</p>
  </div>
</div>
</div>
</div>


<!--Calfs-->
<br><br><br>
<div class="HEADINGS">
    <h1>CALFS</h1>
    <h6>WORKOUT-LIST</h6>
</div>
<br><br><br>
<!--ALL WORKOUT GIFS of FULLBODY EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Calfs\Barbell-Seated-Calf-Raise.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-Seated-Calf-Raise</h5>
    <p class="card-text">Equipment: Barbell, Bench<br>
Primary Muscles: Calfs</p>
  </div>
</div>
</div>

<div class="col-12">
<div class="card"  style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Calfs\Donkey-Calf-Raise.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Donkey-Calf-Raise</h5>
    <p class="card-text">Equipment: Bench<br>
Primary Muscles: Calfs</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Calfs\Dumbbell-Calf-Raise.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Dumbbell-Calf-Raise</h5>
    <p class="card-text">Equipment: Dumbbells<br>
Primary Muscles: Calfs</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Calfs\Hack-Squat-Calf-Raise.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Hack-Squat-Calf-Raise</h5>
    <p class="card-text">Equipment: Machine<br>
Primary Muscles: Calfs</p>
  </div>
  </div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Calfs\Leg-Press-Calf-Raise.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Leg-Press-Calf-Raise</h5>
    <p class="card-text">Equipment: Machine<br>
Primary Muscles: Calfs</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Calfs\Lever-Seated-Calf-Raise.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Lever-Seated-Calf-Raise</h5>
    <p class="card-text">Equipment: Machine<br>
Primary Muscles: Calfs</p>
</div>
</div>
  </div>
</div>

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
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Calfs\Standing-Barbell-Calf-Raise.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Standing-Barbell-Calf-Raise</h5>
    <p class="card-text">Equipment: Barbell<br>
Primary Muscles: Calfs</p>
  </div>
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
<br><br><br>
<div class="HEADINGS">
    <h1>CARDIO</h1>
    <h6>WORKOUT-LIST</h6>
</div>
<br><br><br>
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

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Cardio/Riding-Outdoor-Bicycle.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">RIDING-OUTDOOR-BICYCLE</h5>
    <p class="card-text">Equipment: Bicycle<br>
Primary Muscles: Cardio</p>
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


<!--Chest-->
<br><br><br>
<div class="HEADINGS">
    <h1>CHEST</h1>
    <h6>WORKOUT-LIST</h6>
</div>
<br><br><br>
<!--ALL WORKOUT GIFS of FULLBODY EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Chest\Barbell-Bench-Press.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-Bench-Press</h5>
    <p class="card-text">Equipment: Barbell, Bench<br>
Primary Muscles: Chest</p>
  </div>
</div>
</div>

<div class="col-12">
<div class="card"  style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Chest\Cable-Crossover.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Cable-Crossover</h5>
    <p class="card-text">Equipment: Cable<br>
Primary Muscles: Chest</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Chest\Cable-Upper-Chest-Crossovers.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Upper-Chest-Crossovers</h5>
    <p class="card-text">Equipment: Cable<br>
Primary Muscles: Chest</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Chest\Dumbbell-Fly.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Dumbbell-Fly</h5>
    <p class="card-text">Equipment:  Bench, Dumbbells<br>
Primary Muscles: Chest</p>
  </div>
  </div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Chest\Dumbbell-Press-1.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Dumbbell-Press</h5>
    <p class="card-text">Equipment:  Bench, Dumbbells<br>
Primary Muscles: Chest</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Chest\High-Cable-Crossover.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">High-Cable-Crossover</h5>
    <p class="card-text">Equipment: Cable<br>
Primary Muscles: Chest</p>
</div>
</div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Chest\Incline-Barbell-Bench-Press.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Incline-Barbell-Bench-Press</h5>
    <p class="card-text">Equipment: Barbell, Bench<br>
Primary Muscles: Chest</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Chest\Incline-Chest-Fly-Machine.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Incline-Chest-Fly-Machine</h5>
    <p class="card-text">Equipment: Machine<br>
Primary Muscles: Chest</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Chest\Low-Cable-Crossover.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Low-Cable-Crossover</h5>
    <p class="card-text">Equipment: Cable<br>
Primary Muscles: Chest</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Chest\Single-Arm-Cable-Crossover.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Single-Arm-Cable-Crossover</h5>
    <p class="card-text">Equipment: Cable<br>
Primary Muscles: Chest</p>
  </div>
</div>
</div>
</div>


<!--Forearms-->
<br><br><br>
<div class="HEADINGS">
    <h1>FOREARMS(ARMS)</h1>
    <h6>WORKOUT-LIST</h6>
</div>
<br><br><br>
<!--ALL WORKOUT GIFS of FOREARMS EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Forearms\Hammer-Curl-with-Resistance-Band.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Hammer-Curl-with-Resistance-Band</h5>
    <p class="card-text">Equipment: Resistance Band<br>
Primary Muscles: Forearms</p>
  </div>
</div>
</div>

<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Forearms\wrist-roller.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">wrist-roller</h5>
    <p class="card-text">Equipment: 10-KGs Plate ,<br> Rod and Rope<br>
Primary Muscles: Forearms</p>
  </div>
  
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Forearms\barbell-Wrist-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-Wrist-Curl</h5>
    <p class="card-text">Equipment: Barbell,Bench<br>
Primary Muscles: Forearms</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Forearms\Behind-The-Back-Barbell-Wrist-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Behind-Barbell-Wrist-Curl</h5>
    <p class="card-text">Equipment: Barbell<br>
Primary Muscles: Forearms</p>
  </div>
  </div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Forearms\Dumbbell-Seated-Neutral-Wrist-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Dumbbell-Seated-Wrist-Curl</h5>
    <p class="card-text">Equipment: Dumbbells, Bench<br>
Primary Muscles: Forearms</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Forearms\Dumbbell-Wrist-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Dumbbell-Wrist-Curl</h5>
    <p class="card-text">Equipment: Dumbbells, Bench<br>
Primary Muscles: Forearms</p>
</div>
</div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Forearms\Reverse-Grip-EZ-Bar-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Reverse-Grip-EZ-Bar-Curl</h5>
    <p class="card-text">Equipment: Barbell<br>
Primary Muscles: Forearms</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Forearms\Seated-Hammer-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Seated-Hammer-Curl</h5>
    <p class="card-text">Equipment: Dumbbells<br>
Primary Muscles: Forearms</p>
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
<div class="col-12">
<div class="card"  style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Forearms\Barbell-Reverse-Wrist-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-Reverse-Wrist-Curl</h5>
    <p class="card-text">Equipment: Barbell, Bench<br>
Primary Muscles: Forearms</p>
  </div>
</div>
</div>
</div>


<!--Hips-->
<br><br><br>
<div class="HEADINGS">
    <h1>HIPS</h1>
    <h6>WORKOUT-LIST</h6>
</div>
<br><br><br>
<!--ALL WORKOUT GIFS of HIPS EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Hips\Barbell-Deadlift.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-Deadlift</h5>
    <p class="card-text">Equipment: Barbell<br>
      Primary Muscles: Back / Wing, Hips, Legs</p>
  </div>
</div>
</div>

<div class="col-12">
<div class="card"  style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Hips\Barbell-Glute-Bridge-Two-Legs-on-Bench.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-Glute-Bridge-Two-Legs-on-Bench</h5>
    <p class="card-text">Equipment: Barbell, Bench<br>
Primary Muscles: Hip</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Hips\Lever-Side-Hip-Adduction.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Lever-Side-Hip-Adduction</h5>
    <p class="card-text">Equipment: Machine<br>
      Primary Muscles:  Hips, Legs</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Hips\Barbell-Hip-Thrust.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-Hip-Thrust</h5>
    <p class="card-text">Equipment: Barbell, Bench<br>
      Primary Muscles: Hips</p>
  </div>
  </div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Hips\BARBELL-SQUAT.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">BARBELL-SQUAT</h5>
    <p class="card-text">Equipment: Barbell<br>
      Primary Muscles: Hips, Legs</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Hips\Barbell-sumo-squat.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-sumo-squat</h5>
    <p class="card-text">Equipment: Barbell<br>
      Primary Muscles: Hips, Legs</p>
</div>
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
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Hips\Bulgarian-Jump-Squat.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Bulgarian-Jump-Squat</h5>
    <p class="card-text">Equipment: Bench<br>
      Primary Muscles: Hips, Legs</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Hips\Dumbbell-Rear-Lunge.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Dumbbell-Rear-Lunge</h5>
    <p class="card-text">Equipment: Dumbbells<br>
      Primary Muscles: Hips, Legs</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Hips\Sumo-Plie-Dumbbell-Squat.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Sumo-Plie-Dumbbell-Squat</h5>
    <p class="card-text">Equipment: Dumbbells<br>
      Primary Muscles: Hips, Legs</p>
  </div>
</div>
</div>
</div>


<!--Legs-->
<br><br><br>
<div class="HEADINGS">
    <h1>LEGS</h1>
    <h6>WORKOUT-LIST</h6>
</div>
<br><br><br>
<!--ALL WORKOUT GIFS of LEGS EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Legs\Barbell-Deadlift.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-Deadlift</h5>
    <p class="card-text">Equipment: Barbell<br>
      Primary Muscles: Legs, Hips</p>
  </div>
</div>
</div>

<div class="col-12">
<div class="card"  style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Legs\Barbell-Hack-Squat.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-Hack-Squat</h5>
    <p class="card-text">Equipment: Barbell<br>
Primary Muscles: Legs</p>
  </div>
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
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Legs\Leg-Press.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Leg-Press</h5>
    <p class="card-text">Equipment: Machine<br>
      Primary Muscles: Legs</p>
  </div>
  </div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Legs\BARBELL-SQUAT.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-Squat</h5>
    <p class="card-text">Equipment: Barbell<br>
      Primary Muscles: Legs, Hips</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Legs\Barbell-sumo-squat.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-sumo-squat</h5>
    <p class="card-text">Equipment: Barbell<br>
      Primary Muscles: Legs, Hips</p>
</div>
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
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Legs\Bulgarian-Jump-Squat.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Bulgarian-Jump-Squat</h5>
    <p class="card-text">Equipment: Bench<br>
      Primary Muscles: Legs, Hips</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Legs\Seated-Leg-Curl.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Seated-Leg-Curl</h5>
    <p class="card-text">Equipment: Machine<br>
      Primary Muscles: Legs</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Legs\Sumo-Plie-Dumbbell-Squat.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Sumo-Plie-Dumbbell-Squat</h5>
    <p class="card-text">Equipment: Dumbbell<br>
      Primary Muscles: Legs, Hips</p>
  </div>
</div>
</div>
</div>


<!--Neck-->
<br><br><br>
<div class="HEADINGS">
    <h1>NECK</h1>
    <h6>WORKOUT-LIST</h6>
</div>
<br><br><br>
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


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Neck\Dumbbell-Seated-Gittleson-Shrug.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Dumbbell-Seated-Gittleson-Shrug</h5>
    <p class="card-text">Equipment: Dumbbell, Bench<br>
Primary Muscles: Neck</p>
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

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Neck\Weighted-Lying-Neck-Extension.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Weighted-Lying-Neck-Extension</h5>
    <p class="card-text">Equipment: Bench, 5-KGs Plate, Head-Band<br>
      Primary Muscles: Neck</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Neck\Lying-Weighted-Lateral-Neck-Flexion.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Lying-Weighted-Lateral-Neck-Flexion</h5>
    <p class="card-text">Equipment: Bench, 5-KGs Plate, Head-Band<br>
      Primary Muscles: Neck</p>
  </div>
  </div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Neck\Weighted-Lying-Neck-Flexion.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Weighted-Lying-Neck-Flexion</h5>
    <p class="card-text">Equipment: Bench, 5-KGs Plate, Head-Band<br>
      Primary Muscles: Neck</p>
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
<br><br><br>
<div class="HEADINGS">
    <h1>SHOULDERS</h1>
    <h6>WORKOUT-LIST</h6>
</div>
<br><br><br>
<!--ALL WORKOUT GIFS of Shoulders EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Shoulders\45-Degree-Incline-Row.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">45-Degree-Incline-Row</h5>
    <p class="card-text">Equipment: Dumbbells, Bench<br>
      Primary Muscles: Shoulders</p>
  </div>
</div>
</div>

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


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Shoulders\Barbell-Military-Press.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-Military-Press</h5>
    <p class="card-text">Equipment: Barbell<br>
Primary Muscles: Shoulders</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Shoulders\Cable-Lateral-Raise.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Cable-Lateral-Raise</h5>
    <p class="card-text">Equipment: Cable<br>
      Primary Muscles: Shoulders</p>
</div>
</div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Shoulders\Dumbbell-6-Ways-Raise.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Dumbbell-4-Ways-Raise</h5>
    <p class="card-text">Equipment: Dumbbells<br>
      Primary Muscles: Shoulders</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Shoulders\Dumbbell-Lateral-Raise.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Dumbbell-Lateral-Raise</h5>
    <p class="card-text">Equipment: Dumbbells<br>
      Primary Muscles: Shoulders</p>
  </div>
  </div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Shoulders\Dumbbell-Shoulder-Press.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Seated-Dumbbell-Shoulder-Press</h5>
    <p class="card-text">Equipment: Dumbbells<br>
      Primary Muscles: Shoulders</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Shoulders\Smith-Machine-Behind-Neck-Press.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Smith-Machine-Behind-Neck-Press</h5>
    <p class="card-text">Equipment: Smith-Machine<br>
      Primary Muscles: Shoulders</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Shoulders\Smith-Machine-Shoulder-Press.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Smith-Machine-Shoulder-Press</h5>
    <p class="card-text">Equipment: Smith-Machine<br>
      Primary Muscles: Shoulders</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Shoulders\Standing-Barbell-Close-Grip-Military-Press.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Standing-Barbell-Close-Grip-Military-Press</h5>
    <p class="card-text">Equipment: Barbell<br>
      Primary Muscles: Shoulders</p>
  </div>
</div>
</div>
</div>


<!--Triceps-->
<br><br><br>
<div class="HEADINGS">
    <h1>TRICEPS</h1>
    <h6>WORKOUT-LIST</h6>
</div>
<br><br><br>
<!--ALL WORKOUT GIFS of Triceps EXERCIES-->

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem; ">
  <img src="IMAGES\WORKOUT-LIST\Triceps\Barbell-Triceps-Extension.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Barbell-Triceps-Extension</h5>
    <p class="card-text">Equipment: Barbell, Bench<br>
      Primary Muscles: Triceps</p>
  </div>
</div>
</div>

<div class="col-12">
<div class="card"  style="width: 18rem; ">
<img src="IMAGES\WORKOUT-LIST\Triceps\Bench-Dips.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Bench-Dips</h5>
    <p class="card-text">Equipment: Bench<br>
      Primary Muscles: Triceps</p>
  </div>
</div>
</div>
</div>


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
  <img src="IMAGES\WORKOUT-LIST\Triceps\Dumbbell-Kickback.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Dumbbell-Kickback</h5>
    <p class="card-text">Equipment: Bench, Dumbbells<br>
      Primary Muscles: Triceps</p>
</div>
</div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Triceps\Lever-Overhand-Triceps-Dip.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Lever-Overhand-Triceps-Dip</h5>
    <p class="card-text">Equipment: Machine<br>
      Primary Muscles: Triceps</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Triceps\One-Arm-Reverse-Push-Down.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">One-Arm-Reverse-Push-Down</h5>
    <p class="card-text">Equipment: Cable<br>
      Primary Muscles: Triceps</p>
  </div>
  </div>
  </div>
</div>

<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Triceps\One-arm-triceps-pushdown.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">One-arm-triceps-pushdown</h5>
    <p class="card-text">Equipment: Cable<br>
      Primary Muscles: Triceps</p>
  </div>
</div>
</div>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Triceps\Pushdown.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Cable-Pushdown</h5>
    <p class="card-text">Equipment: Cable<br>
      Primary Muscles: Triceps</p>
  </div>
</div>
</div>
</div>


<div class="row">
    <div class="col-11">
<div class="card" style="width: 18rem;">
  <img src="IMAGES\WORKOUT-LIST\Triceps\Triceps-Dips.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Triceps-Dips</h5>
    <p class="card-text">Equipment: Machine<br>
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
