<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>My PHP App</title>
</head>
<body>
	<?php require "components/header.php"?>
	<div class="container">
		<h3>Contact Form</h3>
		<form action="check.php" method="post" class="action">
			<input type="email" name="email" placeholder="Add Email" class="form-control">
			<textarea name="message" placeholder="Add your meassage here" class="form-control"></textarea>
			<button type="submit" name="send" class="btn btn-success">Send</button>
		</form>
	</div>
	

	<?php require 'components/footer.php'?>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>