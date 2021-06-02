<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style-auth.css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>My PHP App</title>
</head>
<body>

	<div class="sign-up-form">
		<h3 class="form-title">Sign In</h3>
		<form action="ajax/auth.php" id="form" method="post" class="action">
			<input type="text" name="login" id="login" placeholder="login" class="form-control">
			<p class="alert-p" id="login-error"></p>
			<input type="password" name="password" id="password" placeholder="password" class="form-control">
			<p class="alert-p" id="password-error"></p>
			<button class="btn btn-primary" id="btn">Authorization</button>
			<p>Don't have account? <a href="sign-up.php">Sign-up.</a></p>
		</form>
	</div>

	

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="js/sign-in.js"></script>
</body>
</html>