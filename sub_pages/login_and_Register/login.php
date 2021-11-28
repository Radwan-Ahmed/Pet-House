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
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from register where Email = '$email' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('location:/html/index.php');
        }  
        else{  
             
            echo "<script type='text/javascript'>alert('Invalid email or password!');
            document.location='/sub_pages/login_and_Register/login_signup.php'</script>";
        }     

?>