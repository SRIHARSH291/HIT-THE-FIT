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
.container {
  position: relative;
  width: 25%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 65%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text a{
  background-color: black;
  color: red;
  text-decoration: none;
  font-size: 20px;
}
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


<body>


<div class="container">
 <br><br><br><br><br> 
 <img src="IMAGES/IMG_NUTRITION_PICS/VEGITABLES_PICS/zzzzzz.PNG" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <div class="text">
    <a href="nutrition_vegitable.php">VEGITABLES</a>
    </div>
  </div>
</div>
  
<div class="container">
 <br><br><br>
 <img src="IMAGES/IMG_NUTRITION_PICS/SUPPLEMENT_PICS/7-Supplements-You-Should-Use-640x360.png" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <div class="text">
    <a href="nutrition_supplement.php">SUPPLEMENTS</a>
    </div>
  </div>
</div>

</body>