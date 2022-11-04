<?php
$link = mysqli_connect('localhost', 'root',"","finalproject_registration");
if ($link===false){
	die ("error: unable to link ".mysqli_connect_error());
}
?>