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
      <a href="home.php"><img src="IMAGES/LOGOS/hit-the-fit-logo (zzz).png" width="300px" height="75px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-xl-0">
          <li class="nav-item"><a class="btn" href="#home">
            <img src="IMAGES/IMG_HOME_PICS/home_5801367.png"width="30px">Home</a></li>
          <li class="nav-item"><a class="btn " href="#about">
            <img src="IMAGES/IMG_HOME_PICS/info_147277.png"width="30px">ABOUT</a></li>

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
</ul>
</div>
</div>        
</nav><br><br><br><br><br>



<!--sign-up/Register-->

<center> 
<form action="insert.php" method="post">

        <div>
        <label>NAME</label>    
        <input type="text" name="user_name"><br><br>
        </div>
        
        <div>
        <label>EMAIL</label>    
        <input type="email" name="email"><br><br>
        </div>

        <div>
        <label>PASSWORD</label>    
        <input type="text" name="password"><br><br>
        </div>

        <div>
        <label>CONTACT</label>    
        <input type="number" name="contact"><br><br>
        </div>

        <div>
        <label>DATE OF BIRTH</label>    
        <input type="date" name="date_of_birth"><br><br>
        </div>
       
        <div>
        <label>GRNDER</label>    
        <input type="text" name="gender"><br><br>
        </div>
    
        <input type="submit" value="REGISTER">   <br><br>
    </form> </center>
