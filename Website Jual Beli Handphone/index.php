<?php 
session_start();
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

<section class="konten">
	<div class="container">
		<h1>Produk Terbaru</h1>
		<div class="row">

			<?php $ambil=$koneksi->query("SELECT * FROM produk"); ?>
			<?php while($perproduk = $ambil->fetch_assoc()){ ?>

			<div class="col-md-3">
			<div class="thumbnail">
				<img src="foto_produk/<?php echo $perproduk['foto_produk']?>" alt="">
			<div class="caption">
					<h3><?php echo $perproduk['nama_produk']?></h3>
					<h5>Rp.<?php echo number_format($perproduk['harga_produk']);?></h5>
					<a href="" class="btn btn-primary">Beli</a>
			</div>
			</div>
			</div>
		<?php } ?>
		</div>
	</div>
</section>

</body>
</html>