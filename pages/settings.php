<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Settings</title>
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
			<a href="#">
				<li aktif="ya">
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
		<div id="back"><i class="fa fa-angle-left"></i></div>
		<h1 class="judul">Settings</h1>
		<div id="notif"><i class="fa fa-bell"></i> (2)</div>
	</div>
	<div class="wrap" id="listSettings">
		<div class="bagSet">
			<div class="wrap">
				<h3>Basic Information</h3>
				<div class="isi">Name :</div>
				<input type="text" class="box" value="Riyan Satria">
				<div class="isi">E-Mail :</div>
				<input type="email" class="box" value="login@riyansatria.tk">
				<button class="tbl biru" id="saveBasic">SAVE</button>
			</div>
		</div>

		<div class="bagSet">
			<div class="wrap">
				<h3>Change password</h3>
				<div class="isi">Old Password :</div>
				<input type="password" class="box">
				<div class="isi">New Password :</div>
				<input type="password" class="box">
				<div class="isi">Confirm New Password :</div>
				<input type="password" class="box">
				<button class="tbl biru">SAVE</button>
			</div>
		</div>
	</div>
</div>

<div class="bg"></div>
<div class="popupWrapper" id="notifPopup">
	<div class="popup">
		<div class="wrap">
			<h3 class="rata-tengah">HELLO!</h3>
			<hr size="1" size="1" color="#ddd">
			<p>
				Setting has been changed
			</p>
			<div class="bag-tombol">
				<button class="biru" id="xNotif">CLOSE</button>
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
	klik("#back", function() {
		mengarahkan("./home-signed-in")
	})

	klik("#saveBasic", function() {
		munculPopup("#notifPopup")
	})
	klik("#xNotif", function() {
		hilangPopup("#notifPopup")
	})
	tekan("Escape", function() {
		hilangPopup("#notifPopup")
	})
</script>

</body>
</html>