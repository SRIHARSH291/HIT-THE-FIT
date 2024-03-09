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
    <title>HIT-THE-FIT</title>
    <!-- stylesheet -->
    <link  href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all">
    <link  href="gymstyle-org.css" type="text/css" rel="stylesheet" media="all">
     <!-- <link  rel="stylesheet" href="gymstyle-org.css">-->
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="css/bootstrap-grid.min.css"></script>
    
</head>

<body>
<header>
    <nav class="navbar navbar-expand-xl bg-black">
        <div class="container-fluid">
            <a href="index.php"><img src="IMAGES/LOGOS/hit-the-fit-logo (zzz).png" width="300px" height="75px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> 
            </button>
            <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
                <!-- Navbar-nav "Start" -->
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item"><a class="btn" href="#index"><img src="IMAGES/IMG_HOME_PICS/home_5801367.png"width="30px">Home</a></li>
                    <li class="nav-item"><a class="btn " href="#about"><img src="IMAGES/IMG_HOME_PICS/info_147277.png"width="30px">ABOUT US</a></li>
                    <!--dropdown for Workout Exercise List-->
                    <li>
                        <div class="dropdown">
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
                        </div>
                    </li>
                    
                    
                    <!--Workout-Plans-->
                    <li class="nav-item"><a class="btn" href="workout_plans.php"><img src="IMAGES/WORKOUT-LIST/workout_plans-red.png"width="30px">WORKOUT-PLANS</a></li>
                    

                    <!--dropdown for Workout Exercise Type-->
                    <li>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" data-bs-toggle="dropdown">
                                <img src="IMAGES/WORKOUT-LIST/planning_5071237.png"width="30px">WORKOUT-TYPE
                                <img src="IMAGES/WORKOUT-LIST/planning_5071237.png"width="30px">
                            </button>
                            <ul class="dropdown-menu bg-black">
                                <li><a class="dropdown-item" href="home_workout.php">HOME-WORKOUT</a></li>
                                <li><a class="dropdown-item" href="gym_workout.php">GYM-WORKOUT</a></li>
                            </ul>
                        </div>
                    </li>
                    <!--Dropdown for sign-up/Register-->
                    
                    <!--<div class="menu-login has-dropdown">
        <div class="menu-login-button logged-out dropdown-button" data-event="hover" aria-controls="user-dropdown" tabindex="0">
          <div class="vue menu-login-avatar" data-app="AvatarApp" data-v-app=""><div class="avatar-container" data-hj-suppress=""><span class="iconfont-profile-icon avatar-guest"></span><i class="material-symbols-outlined fill nav-carrot" aria-hidden="true" data-icon="arrow_drop_down"></i></div></div>
          <div class="menu-id" data-hj-suppress="">
            <span class="menu-login-name">Hi! Sign In</span>
            <span class="menu-login-label">My Fitness<i class="material-symbols-outlined fill nav-carrot" aria-hidden="true" data-nosnippet="" data-icon="arrow_drop_down"></i></span>
          </div>
        </div>
        <div class="menu-login-dropdown the-dropdown" id="user-dropdown">
                      <div class="menu-login-join">
              <h2 class="heading -x-small upper demi">Join for Free!</h2>
              <p class="small regular">Join for free and start building and tracking your workouts, get support from other Fitness Blender members and more!</p>
              <a href="/membership" class="btn -main -block">Join</a>
              <a href="/login" class="btn -link-reverse -block upper">Sign In</a>
            </div>
                  </div>
      </div> -->
                    <li>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"  data-bs-auto-close="outside">
                            <img src="IMAGES/IMG_HOME_PICS/file_12653114.png" width="30px">REGISTER
                        </button>
                        <form action="insert.php" method="post" class="dropdown-menu p-5 bg-black" data-bs-popper="static" style="width: 300px">
                            <div class="mb-3">
                                <label for="exampleDropdownForuser_name" class="form-label">USER NAME</label>
                                <input type="text" name="user_name" class="form-control" id="exampleDropdownForuser_name" placeholder="Enter Your Name">
                                <label for="exampleDropdownFormEmail" class="form-label">EMAIL</label>
                                <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail" placeholder="Enter Email">
                                <label for="exampleDropdownForPassword" class="form-label">PASSWORD</label>
                                <input type="password" name="password" class="form-control" id="exampleDropdownForPassword" placeholder="Enter Password">
                                <label for="exampleDropdownForContact" class="form-label">CONTACT</label>
                                <input type="number" name="contact" class="form-control" id="exampleDropdownForContact" placeholder="Enter Contact">
                                <label for="exampleDropdownForDate_of_Birth" class="form-label">DATE OF BIRTH</label>
                                <input type="date" name="date_of_birth" class="form-control" id="exampleDropdownForDate_of_Birth" placeholder="Enter DOB">
                                <label for="exampleDropdownForGender" class="form-label">GENDER</label>
                                <input type="text" name="gender" class="form-control" id="exampleDropdownForGender" placeholder="Enter Gender">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                                    <label class="form-check-label" for="dropdownCheck2">Remember me</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <img src="IMAGES/IMG_HOME_PICS/file_12653114.png" width="30px">SIGN UP
                            </button>
                           
                            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">YOU ARE REGISTERED</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>
</div>

                        </form>
                    </div>
                    </li>
                    
                   
                    <!--Dropdown for Login-->
                    <li>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"  data-bs-auto-close="outside">
                                <img src="IMAGES/IMG_HOME_PICS/profile_6914786.png" width="30px">Login
                            </button>
                            <form action="logininsert.php" method="post" class="dropdown-menu p-5 bg-black" data-bs-popper="static" style="width: 280px">
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
                                        <label class="form-check-label" for="dropdownCheck2">Remember me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-dark"><img src="IMAGES/IMG_HOME_PICS/profile_6914786.png" width="30px">LOGIN</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
                </header>

    <!------------------SECTION IDs for pages-------------------->
    <!--Section id for home page-->
    <section class="slider-area" id="index">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div id="carouselCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <!-- The slideshow/carousel-->
                <div class="carousel-inner" style="font-style: oblique">
                    <div class="carousel-item active">
                        <img src="IMAGES/IMG_HOME_PICS/home-1.jpg" class="d-block w-100" width="100%">
                        <div class="carousel-caption">
                            <h2>SWEAT NOW</h2>
                            <h3>SHINE LATER</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="IMAGES/IMG_HOME_PICS/home-2.jpg" class="d-block w-100" width="1350px" height="617px">
                        <div class="carousel-caption">
                            <h2>RISE</h2>
                            <h3>AND GRIND</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="IMAGES/IMG_HOME_PICS/HOME-3.jpg" class="d-block w-100" width="1500px" height="617px">
                        <div class="carousel-caption">
                            <h2>FITNESS</h2>
                            <h3>IS A LIFESTYLE</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="IMAGES/IMG_HOME_PICS/home-4.jpg" class="d-block w-100" width="1500px" height="617px">
                        <div class="carousel-caption">
                            <h2>COMMIT</h2>
                            <h3>TO BE FIT</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="IMAGES/IMG_HOME_PICS/HOME-5.jpg" class="d-block w-100" width="1500px" height="617px">
                        <div class="carousel-caption">
                            <h2>STRIVE</h2>
                            <h3>FOR PROGRESS</h3>
                        </div>
                    </div>
                </div> 
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev"> <span class="carousel-control-prev-icon"></span> </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next"> <span class="carousel-control-next-icon"></span> </button>
            </div>
        </div>
    </section>
    
    <!--GUIDES for All-->
    <div class="guides">
        <a href="body.php"><img src="IMAGES/IMG_HOME_PICS/p8.png">BODY</a>
        <a href="fitness.php"><img src="IMAGES/IMG_HOME_PICS/p6.png">FITNESS</a>
        <a href="cardio.php"><img src="IMAGES/IMG_HOME_PICS/p2.png">CARDIO</a>
        <a href="nutrition.php"><img src="IMAGES/IMG_HOME_PICS/dish_3704199.png">NUTRITION</a>
        <a href="workout_plans.php"><img src="IMAGES/WORKOUT-LIST/workout_plans-black.png">WORKOUT-PLANS</a>
    </div>

<!--Section id for about page-->

<section class="slider-area bg-black" id="about">

        <div class="row">  
            <div class="col-1"> 
                <h3>Welcome to</h3>
                <a href="index.php"><img src="IMAGES/LOGOS/hit-the-fit-logo (zzz).png" width="300px" height="75px"></a>
                <h1>ONLINE WORKOUT</h1>
                <h1>PLANNER</h1>
                <h5>FOR FREE GYM AND FITNESS PROGRAM</h5><br><br>
            </div>
            
            <div class="col-2">
                <img src="IMAGES/IMG_ABOUT_PICS/burn-man.png" style="object-fit:full" width="100%" height="100%">
            </div>
        </div>    


</section>

<div class="container">
       <div class="row">
       <div class="col-222">
       <br><br><h1>ONLINE WORKOUT PLANNER</h1><br><br><br>
       <h3>Online workouts have revolutionized the fitness industry, offering individuals a convenient and flexible way to engage in physical activity from the comfort of their homes or any location with internet access. These virtual fitness programs encompass a diverse range of exercise routines, including cardio, strength training, yoga, and more. Online workout platforms leverage video demonstrations, detailed instructions, and often live sessions, allowing users to follow professional trainers and fitness experts. The accessibility of these workouts at any time, coupled with the ability to customize routines based on individual preferences and fitness levels, has significantly contributed to their popularity. With the convenience of interactive elements, community engagement, and progress tracking, online workouts have become a go-to solution for those seeking effective and adaptable fitness experiences tailored to their unique needs.</h3><br><br><br>
        <center>
           <a href="registration_form.php"><img src="IMAGES/IMG_HOME_PICS/file_12653114.png" width="40px">REGISTER NOW<img src="IMAGES/IMG_HOME_PICS/file_12653114.png" width="40px"><br><br>
           </a>                      
           <a href="sriharshburra291@gmail.com"><img src="IMAGES/IMG_HOME_PICS/email_6244513.png"width="40px"></a>
           <a href="https://www.facebook.com/sriharsh.tanmay?mibextid=9R9pXO"><img src="IMAGES/IMG_HOME_PICS/FB.png"width="40px"></a>
           <a href="https://hit-the-fit.000webhostapp.com/index.php"><img src="IMAGES/LOGOS/hit-the-fit-logo (3)1.png"width="50px"></a>
           <a href="linkedin.com/in/sriharsh-burra-03a2a920b"><img src="IMAGES/IMG_HOME_PICS/LI.png"width="40px"></a>
           <a href="https://www.instagram.com/tanmaysriharsh/"><img src="IMAGES/IMG_HOME_PICS/INSTA.png"width="40px"></a>
        </center>
        
            <div class="phone_no">
                <h5><img src="IMAGES/IMG_HOME_PICS/phone-call_8701976.png"width="20px">+91 8074710745</h5>
            </div>
            
            <div class="email">
                <h5><img src="IMAGES/IMG_HOME_PICS/email_6244513.png"width="20px">sriharshburra291@gmail.com</h5>
            </div>
       
       </div>
       </div>
       </div>
        
           
</body>
</html>