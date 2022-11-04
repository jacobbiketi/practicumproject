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
                      <h2>User Login Form</h2>
                      
                </div>
                <div class="card-body">
        <form action="" method="POST">
        <a href="adminlogin.php" style="text-align: center;color:red;"> Admin Login</a><br> <br>
        
        <label for="phone_no">phone_no:</label>
        <input type="tel" name="phone_no" id="" placeholder="enter  phone number" required> <br> <br>


        <label for="password">password:</label>
        <input type="password" name="password" id="" placeholder="enter a strong password" max="10" required> <br> <br>

        <input type  ="submit" class="btn btn-primary w-100"
         name="submit" id="" value="LOGIN">
         <a href="registration1.php" style="text-align: center;color:red;"> Click here to register</a>
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
$phone_no = $_POST['phone_no'];
$password = $_POST['password'];

// database connection
$link = mysqli_connect('localhost','root',"","finalproject_registration");
if ($link===false){
    die ("error: unable to connect".mysqli_connect_error());
}else{
    $stmt = $link->prepare("select * from registration_details where phone_no= ?");
    $stmt-> bind_param("i",$phone_no);
    $stmt->execute();
    $stmt_result= $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result->fetch_assoc();
        if($data['password']===$password){
            echo '<script type="text/javascript"> alert("Login succefully") </script>';
            header('location:finalproject.php');
        }else{
            echo '<script type="text/javascript"> alert("Invalid Phone number or password") </script>';
            
            
        }
  
    }
}
?>