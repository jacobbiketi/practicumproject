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
    echo "registration succefully";
    $stmt->close();
    $link->close();
}




?>