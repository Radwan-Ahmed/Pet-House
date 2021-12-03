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
$query = mysqli_query($connection, "SELECT * FROM register WHERE Email= '$email'");
if(mysqli_num_rows($query)>0){
    echo "<script type='text/javascript'>alert('Account Already Exists! Please Try with another Email. Thank You');
            document.location='/sub_pages/login_and_Register/login_signup.php'</script>";
}
else{

    $data = "INSERT INTO register (Name,Email,Password) VALUES ('$name','$email','$password')";
    mysqli_query($connection,$data);
        header('location:signup_sucessfull.php');
}

?>