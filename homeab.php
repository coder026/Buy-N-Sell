<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:index.html');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<h1>welcome <?php echo $_SESSION['username'] ?></h1>

<a href="logoutab.php">USER LOGOUT</a>
<a href="logoutab2.php">SELLER LOGOUT</a>
<a href="index.html">USER LOGIN</a>
<a href="sellerab.html">SELLER</a>


</body>
</html>