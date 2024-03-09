<?php
require("connection.php");
$query = "SELECT * FROM registration_tb"; //inner join product_tb on
 //profuct_tb.p_id = order_tb.order_product 
 //inner join client_tb on client_tb.client_id = product_tb.order_client";
$result = mysqli_query($connection, $query);
?>

<html>
    <head>
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="index.css" rel="stylesheet"/>
    </head>

<body>
    <a href="registration_form.php" class="buttselect btn btn-info " >ADD ACCOUNT</a>

        <br>
        <br>

        <table class="table table bordered">
        <div class="title1">REGISTED USERS</div>
        <br>
        <br>
        <thead>
            <th>USER ID</th>
            <th>USER NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>CONTACT</th>           <!-- client name mobile no.-->
            <th>DATE OF BIRTH</th>
            <th>GENDER</th>
        </thead> 
<?php

$n = 1;
    while($data = mysqli_fetch_assoc($result)){
        $mid = $data['user_id'];
    echo "<tr>    
    <td>".$n."</td>
    <td>".$data['user_name']."</td>
    <td>".$data['email']."</td>
    <td>".$data['password']."</td>
    <td>".$data['contact']."</td>
    <td>".$data['date_of_birth']."</td>
    <td>".$data['gender']."</td>
    <td><a href='edit.php?id=$mid'>EDIT</a> | <a href='delete.php?id=$mid'>DETELE</a></td>
    </tr>";
    $n++;
    }
?>
</tbody>
</body>
</html>