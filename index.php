<?php 
if (isset($_SESSION['username'])) {   
session_unset();
session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>KVP Healthcare INC</title>
	<link rel="icon" href="image/icon.jpg" type="image/gif" sizes="16x16"> 
    <link rel="stylesheet" href="css/signin.css">
</head>
<body >
    <section id ="logo-container">
		<img class="logo" src="image/kvp.jpg" alt="">
    </section>
    <section id = "form-con">
        <div class="container float-right" id="container">
            <div class="form-container sign-up-container">
                <form  autocomplete="off">
                    <h5>Create your Account</h5>
					<input type="text" name="username" id="username" placeholder="Username" class="form-control"/>
					<div id="check_user"></div>
                    <input type="email" name="email" id="password" minlength="8" placeholder="Email" required>	
					<div id="checK_password"></div>					
					<input type="password" name="password" minlength="8" placeholder="Password" required>		
                    <input type="password" name="cpassword" minlength="8" placeholder="Confirm Password" required>	
					<button href="#" name="signup">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="inc/login_query.php" method="post" autocomplete="off">
                    <h1>Sign In</h1>
                    <h5>or Use Your Account</h5>
                    <input type="text" name="username" placeholder="Username" required/>
                    <input type="password" name="password" placeholder="Password" required/>
                    <a class="text-red" href="forgot_pass.php">forgot your password?</a>
                    <button type="submit" name="login">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Sign Up</h1>
                        <p>Enter your personal details </p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<footer>
		<div class = "footer-con">
			<p>&copy; Copyright 2022 KVP Healthcare Inc.<a href="#">Management System</a></p>
		</div>
	</footer>
<script src="js/jquery-3.4.1.js"></script>
<script src="js/script.js"></script>
    <script>
    	const signUpButton = document.getElementById('signUp');
    	const signInButton = document.getElementById('signIn');
    	const container = document.getElementById('container');
    	signUpButton.addEventListener('click', () => {
    	    container.classList.add("right-panel-active");
    	});
    	signInButton.addEventListener('click', () => {
    	    container.classList.remove("right-panel-active");
    	});
	</script>
</body>
</html>