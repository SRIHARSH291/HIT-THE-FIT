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


<!--Dropdown for sign up-->

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

<!--body-->
<div class="container">
  <img src="IMAGES/IMG_HOME_BODY_PICS/BODY.png" width="100%" height="500px">    
  <div class="cent"><h1>BODYBUILDING</h1></div>
</div>

    
<div class="cent-1">
<CENTER><h1>THE ULTIMATE GUIDE TO LEARN ABOUT THE BODYBUILDING FOR BEGINNERS</CENTER></h1><br><br>
<h5>Bodybuilding is the process of developing and shaping muscle fibres through 
the combination of weight workout, specific caloric intake, and rest. Bodybuilding,
simply put, is the art of sculpting a muscular, symmetrical, and visually appealing physique.</h5><br><br>

<CENTER><img src="IMAGES/IMG_HOME_BODY_PICS/bodybuilding-plan-600x310.png"></CENTER><br><br>

<h5>If your goal is bodybuilding, the online workout planner is for you. On our site, which 
    includes hundreds of exercises and images, exercises are presented to you in categories according to 
    muscle groups. Which muscle group you want to work, all you have to do is enter that category, 
    select the exercises and click the add button. When you click the Add button, you can easily 
    create a training program by specifying the number of sets and repetitions of the exercises.
    Easily add or remove exercises to create a workout designed specifically by and for you.</h5><br><br><br>

<CENTER><h1>HOW TO DESIGN A BODYBUILDING PROGRAM</h1></CENTER><br><br>
<h5>You need a successful bodybuilding workout plan to focus on getting your body in the best shape possible. 
    If you think creating your own workout plan is too hard, we’re here to tell you it’s not. We’ll help you 
    create a custom workout plan step-by-step! You will be able to create your own workout plan by learning
    the most important information you need to know when creating a workout plan in our beginner’s guide.</h5><br>

    <h5><ul style="list-style-type:square;">
      <li>Learn your body type</li>
      <li>Plan a goal.</li>
      <li>Choose Your Exercises.</li>
      <li>Choose Your Sets and Reps.</li>
      <li>Learn About Progression.</li>
      <li>Put it all together and create a workout.</li></h5><br><br><br>

<CENTER><h1>WHAT IS YOUR BODY TYPE?</h1></CENTER><br><br>
<h5>Before going to start your training and nutrition regimen, it’s important for you to understand what 
is your body type? The three basic human body types are the endomorph, the mesomorph,
and the ectomorph. Knowing your body type will be going to help you in the long run.
You can acquire the correct workout plan and diet planfor your body type, and by doing so
you’ll be going to set your realistic and attainable goals.<br><br>

Is it an Ectomorph, Endomorph or Mesomorph?</h5><br><br>

<CENTER><img src="IMAGES/IMG_HOME_BODY_PICS/somatotype-body-types.jpg" width="75%"></CENTER><br><br>

<!--body-types-->

<div class="container">
<div class="body-type-body">
<div class="body-type">
<a href="#ECTOMORPH">ECTOMORPH</a>
<a href="#ENDOMORPH">ENDOMORPH</a>
<a href="#MESOMORPH">MESOMORPH</a>
</div>

<div class="container">
<div class="body-type-1" id="ECTOMORPH">
  <h3><a href="#ECTOMORPH">Ectomorph:-</a></h3>
</div>
<p>Ectomorph can easily be spotted by their body structure.
They are simply skinny and thin. Ectomorphs usually
have small joint and lean muscles.</p>
<h5>SOME TRAITS OF AN ECTOMORPH:</h5>
<ul style="list-style-type:square;">
<li>Small body frame and bone structure</li>
<li>Flat chest</li>
<li>Small Joints</li>
<li>Long arms and limbs</li>
<li>Fast metabolism</li>
<li>Difficulty in gaining weight</li>
<li>Difficulty in building muscles</li>
</ul>

<div class="body-type-2" id="ENDOMORPH">
  <h3><a href="#ENDOMORPH">Endomorph:-</a></h3>
</div>
<p>Endomorph can easily be figured out due to their body type. 
Endomorphs have a naturally chubby, round and soft physique.
They have wide bone structure also have a high level of body fat. 
Endomorphs have a high amount of fat in their body as compared to muscles.</p>
<h5>Some traits of an Endomorph:</h5>
<ul style="list-style-type:square;">
<li>Chubby body</li>
<li>Round and soft physique</li>
<li>Wide bone structure</li>
<li>High level of body fat</li>
<li>High fat-to-muscle ratio</li>
<li>Gain weight easily</li>
<li>Difficulty in losing weight</li>
</ul>

<div class="body-type-3" id="MESOMORPH">
  <h3><a href="#MESOMORPH">Mesomorph:-</a></h3>
</div>
<p>Mesomorph is the most desired body type and can also be said as
‘genetically gifted’ body. They naturally have a lean, compact and strong body.</p>
<h5>Some traits of mesomorph:</h5>
<ul style="list-style-type:square;">
<li>Muscular body</li>
<li>Naturally lean</li>
<li>Strong body type</li>
<li>Shoulders are wider than hips</li>
<li>Gain muscles easily</li>
<li>Natural born athletic body</li>
</ul>


</div>
</div>
</div><br><br><br>

<CENTER><h1>HOW MUCH WEIGHT SHOULD I LIFT TO GAIN MUSCLE?</h1></CENTER><br><br>
<h5>For hypertrophy, 3 to 6 sets of 6 to 12 repetitions per exercise with a moderate load (60% to 85% of one-rep max) is ideal. More advanced individuals looking 
  to further develop muscle mass can perform 3 to 6 sets of 8 to 12 repetitions at 70% to 85% of one-rep max.

Beginners are advised to start with light weights and focus on proper technique. Building a strong foundation and gradually progressing 
in weight and intensity will help you safely and effectively achieve your muscle gain goals.

Your one rep max (1RM) is the maximum amount of weight that you can lift to complete one repetition.</h5>
</div>
