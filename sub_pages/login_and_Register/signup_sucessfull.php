<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_signup.css">
	<link rel="shortcut icon" href="/assets/pet.jpg" type="image icon">
    <title>Log In || Sign Up</title>

    <style>
        .login_message{
    width: 100%;
    background-color: rgb(140, 240, 140);
    color: rgb(0, 151, 0);
    height: 80px;
    border: none;
    

}
.login_message h2{
   text-align: center;
}
@media screen and (max-width: 720px){
    .login_message{
        width: 100%;
        background-color: rgb(140, 240, 140);
        color: rgb(9, 99, 9);
        text-align: center;
        height: 80px;
        border: none;
        
    
    }
}
    </style>
</head>
<script>
        function hidediv()
        {
            document.getElementById("login_message").style.visibility="hidden";
        }
        setTimeout("hidediv()",4000);
    </script>
<body>
<!--Login Message-->
<div class="login_message" id="login_message">
        <h2>Signup Sucessfully... Now Login Here</h2>
    </div>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="signup.php" method="POST">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="https://www.facebook.com" class="social" title="Facebook"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social" title="Google Plus"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>Use Social account or use your email for registration</span>
			<input type="text" placeholder="Name" name="name" required />
			<input type="email" placeholder="Email" name="email" required />
			<input type="password" placeholder="Password" name="pass" required />
			<button onclick="sign_up()">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login.php" method="POST">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social" title="Facebook"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social" title="Google plus"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>Use Social account or use your email for Login</span>
			<input type="email" placeholder="Email" name="email" required />
			<input type="password" placeholder="Password" name="pass" required />
			<button onclick="sign_in()">Sign In</button>
            <a href="#">Forgot your password?</a>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Click here to Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Dear Users!</h1>
				<p>If you haven't any Account.</p>
				<button class="ghost" id="signUp">Click here to Sign Up</button>
			</div>
		</div>
	</div>
</div>
<footer>
</footer>
<script src="login_signup.js"></script>
<script src="https://kit.fontawesome.com/7792b446f3.js" crossorigin="anonymous"></script>
</body>
</html>