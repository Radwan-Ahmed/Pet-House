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
$pass = $_POST['password'];
$encrypted_pass = sha1($pass);
$password = base64_encode($encrypted_pass);

$data = "INSERT INTO register (Name,Email,Password) VALUES ('$name','$email','$password')";

mysqli_query($connection,$data);
header('location:signup_sucessfull.php');
?>