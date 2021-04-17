<?php
include 'conf.php';
if (empty($_SESSION["username"])) {
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deshboard</title>
</head>
<body>
<div class="message box">
	
</div>
</body>
</html>