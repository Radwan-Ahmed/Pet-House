<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "pet_house_headache";  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 

    $email = $_POST['email'];  
    $password = $_POST['password'];
    $decode = base64_encode($password);  
    $sql =mysqli_query($con, "SELECT count(*) AS total from register where Email = '$email' and Password = '$decode'");   
        
    $row = mysqli_fetch_array($sql);

    if($row["total"]>0){
    header('location:/sub_pages/admin_login/login_message.php');
} 
        else{  
             
            echo "<script type='text/javascript'>alert('Invalid email or password!');
            document.location='/sub_pages/login_and_Register/login_signup.php'</script>";
        }     

?>