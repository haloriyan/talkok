<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Home</title>
	<link href="aset/fw/build/fw.css" rel="stylesheet">
	<link href="aset/fw/build/font-awesome.min.css" rel="stylesheet">
	<link href="aset/css/style.home.css" rel="stylesheet">
	<script src="aset/js/embo.js"></script>
</head>
<body>

<div class="kiri">
	<div class="profile rata-tengah">
		<div class="wrap">
			<div id="closeMenu"><i class="fa fa-close"></i></div>
			<img src="aset/gbr/sponbob.jpg" class="fotoProfil">
			<h3>Riyan Satria</h3>
		</div>
	</div>
	<nav class="menu">
		<div class="wrap">
			<a href="#">
				<li>
					<div id="icon"><i class="fa fa-download"></i></div>
				Saved Message
				</li>
			</a>
			<a href="./settings">
				<li>
					<div id="icon"><i class="fa fa-cog"></i></div>
				Settings
				</li>
			</a>
			<a href="#">
				<li>
					<div id="icon"><i class="fa fa-sign-out"></i></div>
				Logout
				</li>
			</a>
		</div>
	</nav>
</div>

<div class="container">
	<div class="atas">
		<div id="tblMenu" aksi="bkMenu"><i class="fa fa-bars"></i></div>
		<div class="pencarian">
			<input type="text" class="box" placeholder="Cari grup...">
		</div>
		<div id="notif"><i class="fa fa-bell"></i> (2)</div>
	</div>
	<div class="wrap" id="listGrup">
		<div class="list">
			<div class="wrap">
				<div id="icon">RS</div>
				<div id="kanan">
					<h3>My group</h3>
					<p>
						<b>Riyan Satria </b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...
					</p>
				</div>
			</div>
		</div>
		<div class="list">
			<div class="wrap">
				<div id="icon">RS</div>
				<div id="kanan">
					<h3>My group</h3>
					<p>
						<b>Riyan Satria </b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...
					</p>
				</div>
			</div>
		</div>
		<div class="list">
			<div class="wrap">
				<div id="icon">RS</div>
				<div id="kanan">
					<h3>My group</h3>
					<p>
						<b>Riyan Satria </b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod...
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	klik("#tblMenu", function() {
		pengaya(".kiri", "left: 0%;")
	})
	klik("#closeMenu", function() {
		pengaya(".kiri", "left: -100%;")
	})
	klik("#listGrup", function() {
		mengarahkan("./chat")
	})
</script>

</body>
</html>