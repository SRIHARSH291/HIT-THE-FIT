<?php

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

<div class="container">
  <CENTER><img src="IMAGES/IMG_HOME_FITNESS_PICS/male-fitness-models-influencers-in-india.jpg" width="100%" height="350px"></CENTER>
    <div class="cent"><h1>FITNESS</h1></div>
</div>

    
<div class="cent-1">
    <br><br><br><br>
<CENTER><h1>THE ULTIMATE BEGINNER’S GUIDE TO FITNESS</h1></CENTER><br><br><br>
<h5>Fitness means being physically healthy and fit. When we go into a little detail,
     we see that it includes concepts such as muscle strength, muscular endurance, body composition. 
     Of course, it also includes features that are not limited to these. For example, mental health is 
     one of them. Every successful fitness plan should incorporate physical activity such as cardio and 
     strength training, regardless of your body type.</h5><br><br>

<h5>The online fitness planner has a pretty simple interface to achieve your f
  itness goals. On our site, which includes hundreds of exercises and images, 
  exercises are presented to you in categories according to muscle groups. 
  Which muscle group you want to work, all you have to do is enter that category, 
  select the exercises and click the add button. When you click the Add button, 
  you can easily create a training program by specifying the number of sets and 
  repetitions of the exercises. Easily add or remove exercises to create a fitness
  workout designed specifically by and for you.</h5><br><br><br>

  <CENTER><img src="IMAGES/IMG_HOME_FITNESS_PICS/fitness-planner-1200x498.png" width="100%"></CENTER><br><br><br>

  <CENTER><h1>HOW TO CREATE FITNESS PLAN</h1></CENTER><br><br><br>
<h5>The first thing to consider is the goal of the training plan.
If you want to lose weight, you must create a calorie deficit. 
In this case, you will need more cardio exercises and weight training.
If you want to train not for athletic performance but to be healthy and 
fit, walking, jogging, jumping rope, cycling, swimming, and various home 
exercises are all effective at keeping you fit. However, if you want to 
plan training for athletic performance, it is necessary to choose exercises 
according to the branch you are doing.
For example, if you’re a marathoner, you need strong leg muscles. At the same time, 
your upper body muscles will remain weak as your leg muscles are constantly working. 
Targeting upper body and lower body exercises with functional movements in order to 
strengthen at an optimum level will benefit you in the fitness plan you will create.</h5><br><br><br>


<CENTER><h1>HOW MANY SETS AND REPS SHOULD I DO?</h1></CENTER><br><br><br>
<h5>Different training organizations, such as the American Council on Exercise (ACE) or 
the National Academy of Sports Medicine (NASM), have slightly different models for each
training goal. But they follow the same general guidelines.</h5><br><br>

<h5>
<figure id="sets_table" class="table">
<table class="table_finess" width="100%">
<tbody data-check="-1">
<tr>
<td><h3>Training Goal</h3></td>
<td><h3>Sets</h3></td>
<td><h3>Reps</h3></td>
<td><h3>Rest Period</h3></td>
<td><h3>Intensity</h3></td>
</tr>
<tr>
<td>General fitness</td>
<td>1-3</td>
<td>12-15</td>
<td>30 to 90 seconds</td>
<td>Varies</td>
</tr>
<tr>
<td>Endurance</td>
<td>2-4</td>
<td>12-20</td>
<td>Up to 30 seconds</td>
<td>&lt;67% of 1RM</td>
</tr>
<tr>
<td>Hypertrophy</td>
<td>3-6</td>
<td>6-12</td>
<td>30 to 90 seconds</td>
<td>67% to 85% of 1RM</td>
</tr>
<tr>
<td>Muscle strength</td>
<td>2-6</td>
<td>&lt;6</td>
<td>2 to 5 minutes</td>
<td>&gt;85% of 1RM</td>
</tr>
<tr>
<td>Power: Single rep</td>
<td>3-5</td>
<td>1-2</td>
<td>2 to 5 minutes</td>
<td>80%–90% of 1RM</td>
</tr>
<tr>
<td>Muscle Power</td>
<td>3-6</td>
<td>1-3</td>
<td>2 to 5 minutes</td>
<td>30%–60% of RM</td>
</tr>
</tbody></h5>
</div>
