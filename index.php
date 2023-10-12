<!-- A basic Log in in php !-->





<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
	<!--  The Start of php code!-->



	<?php

	//Required for email and password if its empty//
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["email"])){
        echo "Email is Required";
    }
}
echo "<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["password"])){
        echo "password is Required";
    }
}


// Not allow the (/ back slash in word ////)
function test_input($data) {
	
	$data = htmlspecialchars($data);
	return $data;
  }



	
	
	?>






















<div class="container" >
	
	<div class="screen">
		<div class="screen__content">
			<form    class="login"     method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <!--Make the php code run in same page=server!--> 
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="User name / Email"  name="email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password"  name="password">
				</div>
				<button class="button login__submit">
					<span class="button__text">Log In :)</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<div class="social-login">
				<h3>Log in PHP/ Mohamed.
					abolhassen</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
    
</body>
</html>