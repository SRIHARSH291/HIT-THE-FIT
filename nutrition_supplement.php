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

<!--Nutrition_Supplements-->

<div class="container">
 <br><br><br><br><br><center><img src="IMAGES/IMG_NUTRITION_PICS/SUPPLEMENT_PICS/supplements.jpg" width="50%"></center>
</div>

<div class="cent-1">
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><h1>7 SUPPLEMENTS YOU SHOULD USE</h1></center><br><br>
<h5>While some supplements definitely can be more for the advanced crowd and not something that you need to concern yourself with when you’re getting started, others everyone should be using. They’re great for improving your health, boosting your workout performance, and helping you just feel your best on a day to day basis. If you aren’t currently using these supplements, it’s time that you picked them up and made them a part of your daily protocol. Let’s go over which supplements these are and why they’re so critical.
</h5>


<!--About-supplies-->
<br><br><br>
<h3>1. PROTEIN POWDER</h3>
<center><img src="IMAGES/IMG_NUTRITION_PICS/SUPPLEMENT_PICS/whey-protein_2365686.png" width="20%"></center>
<h5>The first product that everyone should have – even if they aren’t actively working out is protein powder. Now, when you hear the term ‘protein powder’, you might immediately think about a large bodybuilder in the gym, slamming back protein shakes in effort to bulk up. We all need so much protein each and every day. Even on non-exercise days, your body is still constantly creating new cells, enzymes, and hormones – all of which will require protein. If you aren’t meeting your daily requirements, you simply can’t do this as effectively as you should. The end result is that you fail to sustain optimal growth and development. You might start feeling weak, tired, and health issues could set in.</h5><br><br>
<br><br><br>

<h3>2. ESSENTIAL CHAIN AMINO ACIDS – EAA</h3>
<center><img src="IMAGES/IMG_NUTRITION_PICS/SUPPLEMENT_PICS/ESSENTIAL-CHAIN-AMINO-ACIDS-300x300.jpg" width="20%"></center>
<h5>The next product to consider getting into your diet plan is essential chain amino acids. EAA’s will help to prevent the breakdown of muscle mass tissue, decreasing the amount of recovery you’ll have to go through after your workout session is completed. EAA is a great way to up your amino acids intake (“protein intake”) without adding significant amount of extra calories. Later years BCAA’s have been all the rave but research clearly shows them to be inferior to both whey and EAA’s.</h5><br><br>

<br><br><br>

<h3>3. QUALITY MULTI-VITAMIN</h3>
<center><img src="IMAGES/IMG_NUTRITION_PICS/SUPPLEMENT_PICS/multivitamins2-300x300.webp" width="20%"></center>
<h5>Moving along, it’s also a wise move to get a high quality multi-vitamin in your protocol as well. It can be really challenging to ensure that you’re eating right 100% of the time and the multi-vitamin will help provide back up support when you need it.

Especially when you do get into a period of dieting down to shed body fat and are consuming fewer calories than normal, it’s easy to fall short in certain nutrients. If you let this turn into a full blown deficiency, it could go on to really have a significant impact on your energy levels, metabolic rate, and how your body is functioning overall.</h5><br><br>

<h3>4. FISH OIL</h3>
<center><img src="IMAGES/IMG_NUTRITION_PICS/SUPPLEMENT_PICS/fish-oil-300x300.jpg" width="20%"></center>
<h5>Fish oil is next up on the list of must-have supplements that everyone should be taking in. Fish oil is going to provide the important omega-3 fatty acids that everyone needs and that few people get enough of.

Omega-3 fats are typically found in foods like salmon, flaxseeds, and chia seeds, so unless you’re eating these regularly, you’re likely falling short.

This fat is an essential fat, meaning your body needs it and cannot make it on its own, so it must come from food or supplementation.</h5><br><br>


<h3>5. CREATINE</h3>
<center><img src="IMAGES/IMG_NUTRITION_PICS/SUPPLEMENT_PICS/creatine-300x300.jpg" width="20%"></center>
<h5>Another great supplement to have with you as you head into the gym is creatine monohydrate. Creatine monohydrate is the precursor to the high energy compound, ATP, which resides in the muscle cell and is responsible for each and every muscular contraction that takes place at high intensity.

During your resistance training, you’re relying on ATP to fuel the workout and when stores run low, your workout intensity is going to drop severely. This means lack of performance and in some cases, you’ll need to leave the gym entirely.</h5><br><br>


<h3>6. VITAMIN D</h3>
<center><img src="IMAGES/IMG_NUTRITION_PICS/SUPPLEMENT_PICS/vitamin-d-icon-flat-style-chemical-supplement-vector-illustration-white-isolated-background-pharmacy-sign-business-concept_157943-476.jpg" width="20%"></center>
<h5>The next product to know about is vitamin D. Vitamin D is important because unless you’re drinking multiple glasses of milk each day (which most adults are not), you’re going to be falling low in your requirements.

The most predominant source of vitamin D is direct sunlight as the body will manufacture it on its own when exposed to UV-rays. The problem with this however is that in order to manufacture vitamin D, you need to be in direct sunlight without sun protection, which then will increase your risk of skin cancer.</h5><br><br>


<h3>7. MAGNESIUM/CALCIUM</h3>
<center><img src="IMAGES/IMG_NUTRITION_PICS/SUPPLEMENT_PICS/Magnesium-300x300.jpeg" width="20%"></center>
<h5>Finally, the last supplement that you’ll want to be sure you’re taking in is a magnesium and calcium combination. If you are currently drinking plenty of milk (or eating other dairy products), you may not need the calcium added in and magnesium will be fine on its own.

This is another nutrient that many people do fall short in with their diet and is one that will help with your sleep cycle. Taking it just before bed may mean you can fall asleep more soundly, giving your body the rest and recovery it needs for optimal performance during your next workout session.</h5><br><br>


</div>
</body>
