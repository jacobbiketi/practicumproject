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
                      <h2>Login Form</h2>

                </div>
                <div class="card-body">
        <form action="" method="POST">
        
        <label for="room_selected">room_selected:</label>
        <input type="text" name="room_selected" id="" placeholder="enter  phone number" required> <br> <br>


        

        <input type  ="submit" class="btn btn-primary w-100"
         name="submit" id="" value="check">
         
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

$room_selected = $_POST['$room_selected'];

// database connection
$link = mysqli_connect('localhost','root',"","finalproject_registration");
if ($link===false){
    die ("error: unable to connect".mysqli_connect_error());
}else{
    $stmt = $link->prepare("select * from orders where room_selected= ?");
    $stmt-> bind_param("i",$room_selected);
    $stmt->execute();
    $stmt_result= $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result->fetch_assoc();
        if($data['room_selected']===$room_selected){
            echo '<script type="text/javascript"> alert("Room booked now pay!") </script>';
            header('location:finalproject.php');
        }else{
            echo '<script type="text/javascript"> alert("room already booked ! kindly cheeck other rooms available!") </script>';
            
            
        }
  
    }
}
?>