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

<!--Nutrition_Vegitable-->

<div class="container">
 <br><br><br><br><br><center><img src="IMAGES/IMG_NUTRITION_PICS/VEGITABLES_PICS/vegitables.PNG" width="50%"></center>
</div>

<div class="cent-1">
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><h1>TOP 12 HEALTHY VEGITABLES</h1></center><br><br>
<h5>Healthy vegetables are essential elements of a successful diet. You’ve heard it time and time again, if you want to see optimal results with your nutrition plan, you need to be eating your vegetables.  While you may not particularly like vegetables, if you know how to prepare them well, you should be able to find at least a couple varieties that you enjoy.
</h5>


<!--About-Vegies-->
<br><br><br>
<h3>1-SPINACH</h3>
<h5>Spinach is also a very rich source of iron, with a one cup serving providing 36% of your total daily intake. This is important for those who are engaging in regular physical activity because lack of iron can lead to premature fatigue during exercise.Spinach is great for fending off cancer thanks to it’s potent dose of antioxidant and anti-cancer benefits.</h5><br><br>
<center><img src="IMAGES/IMG_NUTRITION_PICS/VEGITABLES_PICS/1-Spinach.PNG" width="100%"></center>
<br><br><br>

<h3>2-KALE</h3>
<h5>Kale provides powerful antioxidants that can help reduce your risk of inflammation and disease and will also help to bring down your bad cholesterol levels, promoting a healthier heart. Kale is also a very rich source of vitamin K, providing over 1000% of your daily needs with just one cup.  It’ll also offer a good dose of vitamin A, vitamin C, vitamin B6, iron, potassium, and even calcium.</h5><br><br>
<center><img src="IMAGES/IMG_NUTRITION_PICS/VEGITABLES_PICS/2-Kale.PNG" width="100%"></center>
<br><br><br>

<h3>3-BROCCOLI</h3>
<h5>Broccoli is also rich in a particular flavonoid called kaempferol, which can help to lower the level of allergy reactions in individuals. If you’re someone who suffers from severe allergies of any type, broccoli may just help reduce your symptoms. Broccoli is also a strong source of vitamin C, so will provide excellent antioxidant protection and boost your immune system.  It’s also been known to help detoxify the body, so if you want to cleanse your system, make sure you’re taking in high doses of this vegetable. Broccoli also contains a decent protein content at 3.7 grams per cup, which may not seem like much, but considering the fact that same cup only has 55 calories, this makes it over 25% protein.</h5><br><br>
<center><img src="IMAGES/IMG_NUTRITION_PICS/VEGITABLES_PICS/3.Borccoli.PNG" width="100%"></center><br><br><br>

<h3>4-PEPPERS</h3>
<h5>Another food very well known for its vitamin C content is bell peppers.  Whether you choose red, orange or yellow, you will be taking in an immune-boosting punch when you serve these up. Bell peppers are also a great source of vitamin B6, vitamin A, folate, vitamin E, as well as potassium. With a long list of antioxidant, they also offer strong anti-cancer benefits.</h5><br><br>
<center><img src="IMAGES/IMG_NUTRITION_PICS/VEGITABLES_PICS/4-Raw Peppers.PNG" width="100%"></center><br><br><br>

<h3>5-TOMATOES</h3>
<h5>Rich in lycopene, tomatoes are well known to be important for men to help ward off prostate cancer. And while they do that very well, that’s not all they do. Lycopene is also important to help promote strong bones in postmenopausal women as those who remove lycopene rich foods from their diet tend to notice a negative association with bone density and a higher risk of osteoporosis. Tomatoes are also great for promoting a healthier heart as well as they can lower cholesterol levels while keeping triglyceride levels in check. Tomatoes are also rich in biotin, which is important for promoting healthy growth of nails and hair, while also enhancing the absorption of nutrients in the body. Fresh tomatoes are always best as tomato sauce and ketchup typically both contain added sugar.</h5><br><br>
<center><img src="IMAGES/IMG_NUTRITION_PICS/VEGITABLES_PICS/5-Tomatos.PNG" width="100%"></center><br><br><br>

<h3>6-CABBAGE</h3>
<h5>Moving along, cabbage is the next must-have vegetable in your diet plan if you hope to promote optimal health and well-being.  Steamed cabbage is another great vegetable to eat if you hope to bring down your cholesterol levels and promote optimal heart health.  It’s also rich in sinigrin, which is a compound that can assist with the prevention of a variety of different cancers including bladder cancer, colon cancer, as well as prostate cancer. Cabbage also does contain a small dose of calcium, so while not nearly as high as some other vegetables, is still a great option for those looking to promote bone health. Steaming does tend to the best way to optimize the nutrients found in cabbage, so use this cooking method as often as possible.</h5><br><br>
<center><img src="IMAGES/IMG_NUTRITION_PICS/VEGITABLES_PICS/6-Cabbage.PNG" width="100%"></center><br><br><br>

<h3>7-ONIONS</h3>
<h5>The next vegetable you’ll want to add into your diet is the onion.  With a strong taste, this vegetable is very often used to add more flavor into dishes and can be used in a wide number of ways. One thing to note however is that if you want to see optimal health benefits, you should eat this one raw.  The cancer-fighting antioxidants are going to be most potent when it’s in the raw state, so if you are looking for this benefit in particular, this is how you’ll want to be eating it. Try adding it to salads or slicing it up and placing it on your salads, in wraps, or on top of a home made healthy burger.</h5><br><br>
<center><img src="IMAGES/IMG_NUTRITION_PICS/VEGITABLES_PICS/7-Onions.PNG" width="100%"></center><br><br><br>

<h3>8-GREEN PEAS</h3>
<h5>While you may often pass up green peas as they are slightly higher in total starch content compared to other vegetables, if you have the calorie and carb allowance, start adding them to your diet plan. Peas are a great way to combat stomach cancer and also offer anti-inflammatory protection.  Despite the fact this vegetable is very low in total fat content, the fat it does contain is also the important omega-3 variety, so it’s one way to help get your intake of this important nutrient up. Peas will provide a rich source of vitamin K, B vitamins, zinc, iron, copper, and manganese.</h5><br><br>
<center><img src="IMAGES/IMG_NUTRITION_PICS/VEGITABLES_PICS/8-Green Peas.PNG" width="100%"></center><br><br><br>

<h3>9-BOK CHOY</h3>
<h5>Next up on the list is Bok Choy, another of the healthiest vegetables you could be taking in.  This one has over 70 different types of antioxidants, making it one of the most powerful sources available. It’s also a great source of calcium, providing 16% of your total daily needs in a one cup serving.  Bok coy is also a great way to get your vitamin K, vitamin C, as well as vitamin A in, and will help to promote anti-inflammatory benefits. Try it steamed, stir-fried, or even eaten raw in your salad.

</h5><br><br>
<center><img src="IMAGES/IMG_NUTRITION_PICS/VEGITABLES_PICS/9-Bok Choy.PNG" width="100%"></center><br><br><br>

<h3>10-CAULIFLOWER</h3>
<h5>A cruciferous vegetable, cauliflower is the next food that you should be getting into your diet on a regular basis. Cauliflower is high in vitamin C content, so will help to strengthen your immune system, making it easier to recover between workout sessions. It also offers great detoxification benefits as it actives detoxification enzymes in your body that help clear away waste and get you feeling your absolute best. Cauliflower is also an excellent way to fend off inflammation, so may help to relieve some of the symptoms of those who suffer from inflammatory based conditions such as arthritis. Finally, cauliflower is also a fiber all-star containing 8 grams of fiber for every 100 calories consumed.  If you’re trying to bring your fiber intake up, it’s one vegetable you’ll definitely want to consider.</h5><br><br>
<center><img src="IMAGES/IMG_NUTRITION_PICS/VEGITABLES_PICS/10-Cauliflower.PNG" width="100%"></center><br><br><br>

<h3>11-ASPARAGUS</h3>
<h5>Often used by fitness and bodybuilding competitors as they prepare for their contest diets, asparagus is a great vegetable to add into the mix.  Asparagus is a rich source of saponins, which are compounds that can help to regulate blood pressure levels, improve blood sugar regulation, and help to promote a leaner overall body composition. Asparagus is also good for promoting healthy digestion as well, so can help to relieve gas, bloating, or other digestive troubles you may be facing. Finally, it’s also a great vegetable for anyone who suffers from diabetes to be consuming thanks to the blood glucose regulating properties it offers.

</h5><br><br>
<center><img src="IMAGES/IMG_NUTRITION_PICS/VEGITABLES_PICS/11-Asparagus.PNG" width="100%"></center><br><br><br>

<h3>12-MUSHROOMS</h3>
<h5>Mushrooms are also a rich source of vitamin B2, B3, B1, and B6, all of which are important for proper metabolism and energy regulation. Mushrooms can also help bring down the overall levels of inflammation in the body, while offering strong antioxidant support as well. So there you have a closer look at the healthiest vegetables you should be making an effort to get into your regular diet plan.</h5><br><br>
<center><img src="IMAGES/IMG_NUTRITION_PICS/VEGITABLES_PICS/12-Mushrooms.PNG" width="100%"></center><br><br><br>

</div>
</body>
