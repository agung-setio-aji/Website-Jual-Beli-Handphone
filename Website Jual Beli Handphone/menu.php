<?php 
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>AGUNG SMARTPHONE</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container">
	<ul class="nav navbar-nav">
		<li><a href="index.php">Home</a></li>
		<li><a href="keranjang.php">Keranjang</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="checkout.php">Checkout</a></li>
	</ul>
	<form action="pencarian.php" method="get" class="navbar-form navbar-right">
		<input type="text" class="form-control" name="keyword">
		<button class="btn btn-primary">Cari</button>
	</form>
	</div>
</nav>
</body>
</html>