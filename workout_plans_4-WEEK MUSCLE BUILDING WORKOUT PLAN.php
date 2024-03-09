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
     <!-- <link  rel="stylesheet" href="gymstyle-org.css"> -->
    
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
                
                
<br><br><br><br><br>
<div class="HEADINGS">
    <h1>4-WEEK MUSCLE BUILDING WORKOUT PLAN</h1>
    <h6>WORKOUT-PLANS</h6>
</div>

<div class="week">
    <div class="week_title">Week-1</div>
        
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-1,8,15,22.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/bench-1-icon.png">
            <div class="day">Day 1</div>
            </a>
            <div class="title">Chest + Abs</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-2,9,16,23.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/workout-1-icon.png">
            <div class="day">Day 2</div>
            </a>
            <div class="title">back</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-3,10,17,24,7,14,21,28.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/rest-1-icon.png">
            <div class="day">Day 3</div>
            </a>
            <div class="title">rest</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-4,11,18,25.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/workou-2-icon.png">
            <div class="day">Day 4</div>
            </a>
            <div class="title">shoulders + Abs</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-5,12,19,26.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/power-muscle-1-icon.png">
            <div class="day">Day 5</div>
            </a>
            <div class="title">arms</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-6,13,20,27.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/dumbbell-1-icon.png">
            <div class="day">Day 6</div>
            </a>
            <div class="title">legs</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-3,10,17,24,7,14,21,28.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/rest-1-icon.png">
            <div class="day">Day 7</div>
            </a>
            <div class="title">rest</div>
        </div>
</div>



<div class="week">
    <div class="week_title">Week-2</div>
        
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-1,8,15,22.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/bench-1-icon.png">
            <div class="day">Day 8</div>
            </a>
            <div class="title">Chest + Abs</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-2,9,16,23.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/workout-1-icon.png">
            <div class="day">Day 9</div>
            </a>
            <div class="title">back</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-3,10,17,24,7,14,21,28.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/rest-1-icon.png">
            <div class="day">Day 10</div>
            </a>
            <div class="title">rest</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-4,11,18,25.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/workou-2-icon.png">
            <div class="day">Day 11</div>
            </a>
            <div class="title">shoulders + Abs</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-5,12,19,26.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/power-muscle-1-icon.png">
            <div class="day">Day 12</div>
            </a>
            <div class="title">arms</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-6,13,20,27.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/dumbbell-1-icon.png">
            <div class="day">Day 13</div>
            </a>
            <div class="title">legs</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-3,10,17,24,7,14,21,28.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/rest-1-icon.png">
            <div class="day">Day 14</div>
            </a>
            <div class="title">rest</div>
        </div>
</div>


<div class="week">
    <div class="week_title">Week-3</div>
        
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-1,8,15,22.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/bench-1-icon.png">
            <div class="day">Day 15</div>
            </a>
            <div class="title">Chest + Abs</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-2,9,16,23.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/workout-1-icon.png">
            <div class="day">Day 16</div>
            </a>
            <div class="title">back</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-3,10,17,24,7,14,21,28.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/rest-1-icon.png">
            <div class="day">Day 17</div>
            </a>
            <div class="title">rest</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-4,11,18,25.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/workou-2-icon.png">
            <div class="day">Day 18</div>
            </a>
            <div class="title">shoulders + Abs</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-5,12,19,26.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/power-muscle-1-icon.png">
            <div class="day">Day 19</div>
            </a>
            <div class="title">arms</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-6,13,20,27.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/dumbbell-1-icon.png">
            <div class="day">Day 20</div>
            </a>
            <div class="title">legs</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-3,10,17,24,7,14,21,28.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/rest-1-icon.png">
            <div class="day">Day 21</div>
            </a>
            <div class="title">rest</div>
        </div>
</div>


<div class="week">
    <div class="week_title">Week-4</div>
        
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-1,8,15,22.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/bench-1-icon.png">
            <div class="day">Day 22</div>
            </a>
            <div class="title">Chest + Abs</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-2,9,16,23.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/workout-1-icon.png">
            <div class="day">Day 23</div>
            </a>
            <div class="title">back</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-3,10,17,24,7,14,21,28.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/rest-1-icon.png">
            <div class="day">Day 24</div>
            </a>
            <div class="title">rest</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-4,11,18,25.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/workou-2-icon.png">
            <div class="day">Day 25</div>
            </a>
            <div class="title">shoulders + Abs</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-5,12,19,26.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/power-muscle-1-icon.png">
            <div class="day">Day 26</div>
            </a>
            <div class="title">arms</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-6,13,20,27.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/dumbbell-1-icon.png">
            <div class="day">Day 27</div>
            </a>
            <div class="title">legs</div>
        </div>
        <div class="entry">
            <a href="workout_plans_4-WEEK MUSCLE BUILDING WORKOUT PLAN_day-3,10,17,24,7,14,21,28.php">
            <img src="IMAGES/WORKOUT-PLANS/WORKOUT-PLANS_4-WEEK MUSCLE BUILDING WORKOUT PLAN/rest-1-icon.png">
            <div class="day">Day 28</div>
            </a>
            <div class="title">rest</div>
        </div>
</div>
