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
  
    }else{
        echo '<script type="text/javascript"> alert("Invalid Phone number or password") </script>';


    }
}
?>