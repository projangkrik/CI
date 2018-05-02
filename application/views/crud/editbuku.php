<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
	<!-- script -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
	<title>Edit Data Buku</title>
	<style>
	.card {
		margin-right: auto;
		margin-left: auto;
		margin-bottom: 20px;
		width: 400px;
		padding: 10px;
		border: 1px solid #ccc;
	}
	body {
    background-image: linear-gradient(to top, #209cff 0%, #68e0cf 100%);
	}
</style>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark light-blue accent-4">
		<!-- logo -->
		<a class="navbar-brand" href="/databarang"><b>Buku Fuad</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
		aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
</nav><br>
<div class="card">
	<div class="container">
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<div style='margin-bottom:55px' class='alert alert-danger text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Data yang diinput telah digunakan</div>";
			}
		}
		?>
		<?php foreach($buku as $key) {?>
			<form action="<?php echo base_url(); ?>buku/proeditbuku/<?php echo $key->isbn ?>" method="post">
				<p class="h4 text-center py-4">Ubah Data Buku</p>
				<div class="md-form">
					<i class="fa fa-id-card-o prefix grey-text"></i>
					<input type="text" name="idpgr" placeholder="ID Pengarang" value="<?php echo $key->idpgr ?>">
				</div>
				<div class="md-form">
					<i class="fa fa-list-ol prefix grey-text"></i>
					<input type="text" name="kodebk" placeholder="Kode Buku" value="<?php echo $key->kodebk ?>">
				</div>
				<div class="md-form">
					<i class="fa fa-book prefix grey-text"></i>
					<input type="text" name="judul" placeholder="Judul Buku" value="<?php echo $key->judul ?>">
				</div>
				<div class="md-form">
					<i class="fa fa-globe prefix grey-text"></i>
					<input type="text" name="kota" placeholder="Kota" value="<?php echo $key->kota ?>">
				</div>
				<div class="md-form">
					<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
					<input type="text" name="tahun" placeholder="Tahun" value="<?php echo $key->tahun ?>">
				</div>
				<div class="md-form">
					<i class="fa fa-archive prefix grey-text"></i>
					<input type="text" name="stokbk" placeholder="Stok Buku" value="<?php echo $key->stokbk ?>">
				</div>
				<div class="md-form">
					<i class="fa fa-money prefix grey-text"></i>
					<input type="text" name="hargabk" placeholder="Harga" value="<?php echo $key->hargabk ?>">
				</div>
				<br>
				<br><br>
				<center class="mb-3"><input type="submit" class="btn btn-primary" value="Simpan">
					<input class="btn btn-danger" type="submit" onclick="konfirmasi()" value="Batal"></center>
				</form>
			<?php } ?>
		</div>
	</div>
	<script type='text/javascript'>
		function konfirmasi() {
			var answer = confirm('Ingin meninggalkan form?')
			if (answer){
				window.location = 'index';
			}
		}
	</script>
	<script type='text/javascript'>
		function keluar() {
			var kel = confirm('Ingin keluar dari akun?')
			if (kel){
				window.location = '../index.php?pesan=keluar';
			}
		}
	</script>
</body>
<footer class="footer">
    <div class="footerContainer">
        <center><p class="copyright">© Institut Teknologi Kalimantan 2018</p>
    </div>
</footer>
</html>