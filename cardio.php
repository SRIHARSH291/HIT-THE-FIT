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
          
<!--dropdown for Exercise List-->
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

<!--body-->
<div class="container">
<img src="IMAGES/IMG_HOME_CARDIO_PICS/wallpaperflare.com_wallpaper.jpg" width="100%" height="500px">
<div class="cent"><br><br><br><br><br><h1>CARDIO</h1></div>
</div>

    
<div class="cent-1">
<br><br><br><br><br><br><br><br><br>
<CENTER><h1>WHAT IS CARDIO</h1></CENTER><br><br>
<h5>Cardio is shorthand for cardiovascular exercises. We can express cardio 
  training as exercises that accelerate breathing, increase heart rhythm, 
  and intensely work and strengthen the heart and lungs. Cardio is also 
  considered aerobic exercise, meaning it demands elevated oxygen flow,
  which causes you to breathe harder. eg; Cycling, jogging, jumping rope,
  rowing etc. activities such as

An effective cardio workout can take anywhere from 10 minutes to an hour
or more depending on your goals and what kind of cardio you’re doing. 
If you want to design a cardio workout, our site has hundreds of exercises
with or without equipment.</h5><br><br>

<CENTER><h1>BENEFITS OF CARDIO</h1></CENTER><br><br><br>
<h5>Cardio is a great exercise for those looking to slim down because 
  it helps you burn body fat and lose calories. Performing cardio 
  continually brings many benefits to our health. Aerobic exercises 
  improve physical condition by increasing energy level and resistance capacity.<br><br>
<ul style="list-style-type:square;">
<li>Improves lung capacity</li>
<li>Accelerates weight loss</li>
<li>Strengthens your heart</li>
<li>Aids sleep</li>
<li>Strengthens immune system</li>
<li>Increases your stamina, fitness and strength</li>
</ul><br>
Pairing a cardio workout with weight training could help
you build muscle mass while you burn body fat. If your fitness 
goal is three to four days a week, you can split your workout into 
two, doing 30 minutes of cardio and 30 minutes of weight training.</h5><br><br><br>


<CENTER><h1>BEST CARDIO TYPES</h1></CENTER><br><br>
<h5>There are several types of cardiovascular training that 
can help you reach your fitness goals. Here are the 5 most 
common types of cardiovascular training.</h5><br>

<h3>1. LISS CARDIO [LOW INTENSITY, LONG DURATION]</h3><br>

<h5>Low-intensity steady-state (LISS) exercise refers to aerobic 
  movement done at a low pace. LISS cardio is suitable for beginners 
  as it is easier to do. Think brisk walking, light jogging, easy cycling, or hiking.</h5>

<h5>LISS cardio is typically performed for 30-60 minutes at a steady pace with 
limited changes in intensity. When doing LISS cardio, the goal is to keep 
your heart rate around 40 to 60 percent of your maximum heart rate.</h5>

<h5>If you’re a beginner, aim to do three LISS sessions per week.
If you’re at an intermediate or advanced level, try to include
one or two sessions of LISS and one or two sessions of HIIT cardio per week.</h5><br><br>


<h3>2. MODERATE-INTENSITY CARDIO [MEDIUM INTENSITY, MEDIUM DURATION]</h3><br>
<h5>This involves aerobic activity done at around 50% to 70% of max HR. 
  A moderate level of training noticeably increases your breathing rate 
  and heart rate. You may sweat, but you are still able to carry on a 
  conversation. You can talk, but you can’t sing. This type of training 
  can be used for fat loss and for increasing aerobic capacity. This is 
  also the next step up from the low intensity cardio.</h5><br><br>

<h3>3. HIIT CARDIO [HIGH INTENSITY, SHORT DURATION]</h3><br>
<h5>High-intensity interval training (HIIT), is a form of cardio 
  workout performed with short, intense bursts aimed at maximizing 
  performance under conditions where the muscles are deprived of oxygen.
  While its health benefits are important, HIIT also improves performance 
  in both anaerobic and aerobic activities. A classic and simple example 
  of HIIT is 30 seconds of sprinting, 30 seconds of walking (rest) or 20 
  seconds of skipping 10 seconds of rest.</h5><br>

<h5>With HIIT, your heart rate is generally at 80 to 95 percent of your 
  maximum heart rate for the high-intensity intervals and 40 to 50 percent 
  for the low-intensity intervals.</h5><br>

<h5>HIIT cardio is done at a high intensity that helps increase fitness, 
  but adding weight provides extra fat-burning and metabolism-boosting 
  benefits. Pulse-increasing exercises, the concept of metabolic training, 
  are compound exercises that aim to increase metabolic rate with less rest 
  time between exercises to maximize calorie burning during and after training.</h5><br>

<h3>4. AEROBIC INTERVAL TRAINING</h3><br>
<h5>The first way of doing aerobic interval training involves doing
a period of moderate to high intensity aerobic activity, alternating 
with a period of rest of low intensity work.</h5><br>

<h5>For example. 3 minutes of fast running or 30 second sprint then 1 minute 
  of briskly walking or slow walking, repeated 3-4 times. You can vary the intervals 
  and intensities to your fitness level, e.g. 5 minutes of moderate activity, 2 minutes 
  easy, 1 minute hard, or perhaps 5 minutes hard, 5 minutes easy.</h5><br>

<h3>5. ANAEROBIC INTERVAL TRAINING</h3><br>
<h5>Anaerobic means “without oxygen” and aerobic means “with oxygen”. 
  Anaerobic training involves short, fast, high-intensity exercises that 
  don’t make your body use oxygen like it does for cardio activities. 
  It is done at intensities of 85 to 100% of your HR max. This type of 
  activity involves going hard for short periods of time then resting for 
  equal or longer periods of time.<br><br>
<ul style="list-style-type:square;">
<li>Sprint 20 seconds</li>
<li>Walk 20 seconds</li>
<li>Sprint 30 seconds</li>
<li>Walk 30 seconds</li>
<li>Repeat 3 to 5 times depending on fitness level.</li>
</ul>
</h5>
</div>
