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
    $user_id = $_POST['id']; 
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);
        $user_id = stripcslashes($user_id);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);
        $user_id = mysqli_real_escape_string($con, $user_id);   
      
        $sql = "select *from admin_login where Email = '$email' and Password = '$password' and User_id = '$user_id'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('location:/sub_pages/admin_login/login_message.php'); 
        }  
        else{  
            echo "<script type='text/javascript'>alert('Invalid email or password!');
            document.location='admin_login.php'</script>";
            
             
            
        }     

?>