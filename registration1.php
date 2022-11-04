<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <div class="container vh-100">
        <div class="row justify-content-center h-100">
            <div class="card my-auto shadow">
                <div class="card-header text-center bg-primary text-white">
                      <h2>Registration Form</h2>

                </div>
                <div class="card-body">
        <form action="" method="POST" target="_self">
        <!-- <form action="https://formsubmit.co/jacobbiketi2023@gmail.com" method="POST"> -->
        <label for="firstname">firstname:</label>
        <input type="text" name="firstname" id="" required autofocus> <br> <br>

        <label for="lastname">lastname:</label>
        <input type="text" name="lastname" id="" required> <br> <br>

        <label for="phone_no">phone_no:</label>
        <input type="tel" name="phone_no" id="" placeholder="enter  phone number" max="5" required> <br> <br>


        <label for="password">password:</label>
        <input type="password" name="password" id="" placeholder="enter a strong password" required> <br> <br>

        <input type  ="submit" class="btn btn-primary w-100"
         name="submit" id="" value="REGISTER">
         <a href="login.php" style="text-align: center;color:red;"> Click here to Login</a>
    </form> 

                </div>
                <div class="card-footer text-right">
                    <small>&copy Jacob Biketi</small>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone_no = $_POST['phone_no'];
$password = $_POST['password'];
$link = mysqli_connect('localhost', 'root',"","finalproject_registration");
if ($link===false){
	die ("error: unable to link ".mysqli_connect_error());
}else{
    $stmt= $link->prepare("insert into registration_details(firstname,lastname,phone_no,password) values (?,?,?,?)");
    $stmt->bind_param("ssis",$firstname,$lastname,$phone_no,$password);
    $stmt->execute();
    echo '<script type="text/javascript"> alert("Registration succefully") </script>';
    $stmt->close();
    $link->close();
}

?>