<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone_no = $_POST['phone_no'];
$room_selected = $_POST['room_selected'];
$days = $_POST['days'];
$amount = $_POST['amount'];



$link = mysqli_connect('localhost', 'root',"","finalproject_registration");
if ($link===false){
	die ("error: unable to link ".mysqli_connect_error());
}else{
    $stmt= $link->prepare("insert into orders(firstname,lastname,phone_no,room_selected,days,amount) values (?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$firstname,$lastname,$phone_no,$room_selected,$days,$amount);
    $stmt->execute();
    echo '<script type="text/javascript"> alert("booked succesfully") </script>';
    $stmt->close();
    $link->close();
}

?>