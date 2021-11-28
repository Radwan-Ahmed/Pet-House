<?php

$connection = mysqli_connect('localhost','root');

if($connection){
    echo "Connection is Established";
}
else {
    echo "Connection Failed";
}

mysqli_select_db($connection,'pet_house_headache');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$data = "INSERT INTO review (Name,Email,Message) VALUES ('$name','$email','$message')";

mysqli_query($connection,$data);
header('location:/html/index.php');
?>