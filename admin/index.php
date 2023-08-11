<!DOCTYPE html>
<html lang="en">
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<link rel="stylesheet" href="style.css">


	<!-- j quer cdn -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>





</head>

<body>
	<div class="main">
		<div class="over">
			<h1>Welcome Boss</h1>
			<div class="hr"></div>

			<input type="text" class="textbox" id="username" placeholder="Enter your username">
			<input type="password" class="textbox" id="password" placeholder="Enter your password">
			<button class="btn" id="login">Login</button>

			<h5>Forgot your password?</h5>
			<h6>Click <button onclick="showForgotDiv()">here</button> to reset</h6>
		</div>
	</div>

	<!-- forgot password -->
	<div class="forgot" style="display: none;">
		<div class="change">
			<h1>Reset your password</h1>
			<h3>Enter your Registered Mobile Number below to reset your password.</h3>
			<input type="text" class="textbox" placeholder="Enter your registered mobile number">

			<div class="twobtns">
				<button class="btn" onclick="closeforgot()">Close</button>
				<button class="btn">Submit</button>
			</div>
		</div>
	</div>





	<!-- javascript -->
	<script src="jsForAdmin.js"></script>
</body>

</html>