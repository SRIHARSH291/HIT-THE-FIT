<?php
require("connection.php");
$uid = $_GET['id'];
$query = "SELECT * FROM registration_tb where user_id = '$uid'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <form action="update.php" method="post">

        <div>
        <label>NAME</label>    
        <input type="text" name="user_name" value ="<?php echo $data['user_name']?>"><br><br>
        </div>
       
        <input type="hidden" name="user_id" value ="<?php echo $uid?>"><br><br>
       
        <div>
        <label>EMAIL</label>    
        <input type="email" name="email" value ="<?php echo $data['email']?>"><br><br>
        </div>

        <div>
        <label>PASSWORD</label>    
        <input type="text" name="password" value ="<?php echo $data['password']?>"><br><br>
        </div>

        <div>
        <label>CONTACT</label>    
        <input type="number" name="contact" value ="<?php echo $data['contact']?>"><br><br>
        </div>

        <div>
        <label>DATE OF BIRTH</label>    
        <input type="date" name="date_of_birth" value ="<?php echo $data['date_of_birth']?>"><br><br>
        </div>
       
        <div>
        <label>GRNDER</label>    
        <input type="text" name="gender" value ="<?php echo $data['gender']?>"><br><br>
        </div>
    
        <input type="submit" value="UPDATE"> <br><br>
    </form>


    

</body>
</html>