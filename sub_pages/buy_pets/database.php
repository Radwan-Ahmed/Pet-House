<?php

$connection = mysqli_connect('localhost','root');

if($connection){
    echo "Connection is Established";
}
else {
    echo "Connection Failed";
}

mysqli_select_db($connection,'pet_house_headache');

$Animal_id = $_POST['id'];
$Animal_name = $_POST['name'];
$Color = $_POST['color'];
$Price = $_POST['price'];
$Age = $_POST['age'];
$Quantity = $_POST['qty'];
$Net_price = $_POST['net_price'];
$Buyer_name = $_POST['full-name'];
$Phone_number = $_POST['contact'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Zilla = $_POST['zilla'];
$Upazilla = $_POST['upazilla'];
$Union = $_POST['union'];
$Zip = $_POST['zip'];


$data = "INSERT INTO buy (Animal_id, Animal_name, Color, Price, Age, Quantity, Net_price, Buyer_name, Phone_number, Email, Password, Zilla,	Upazilla,Unionn,Zip)
 VALUES ('$Animal_id','$Animal_name','$Color','$Price','$Age','$Quantity','$Net_price','$Buyer_name','$Phone_number','$Email','$Password','$Zilla','$Upazilla','$Union','$Zip')";

mysqli_query($connection,$data);
header('location:/html/index.php');
?>