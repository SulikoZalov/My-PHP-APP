<?php 
	setcookie('user', 'true', time() - 3600, '/');
	header("Location: /index.php");
?>