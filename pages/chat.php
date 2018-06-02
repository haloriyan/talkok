<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>My group | Talkok</title>
	<link href="aset/fw/build/fw.css" rel="stylesheet">
	<link href="aset/fw/build/font-awesome.min.css" rel="stylesheet">
	<link href="aset/css/style.home.css" rel="stylesheet">
	<link href="aset/css/style.chat.css" rel="stylesheet">
	<script src="aset/js/embo.js"></script>
	<script src="aset/js/jquery-3.1.1.js"></script>
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
		<div id="back"><i class="fa fa-angle-left"></i></div>
		<h1 class="judul">My group</h1>
		<div id="notif"><i class="fa fa-bell"></i> (2)</div>
	</div>
	<div class="tagar">
		<div class="listTagar">#lounge</div>
		<div class="listTagar">#oot</div>
		<div class="listTagar">#test</div>
		<div class="listTagar">#thisIsTopic</div>
	</div>
	<div class="wrap" id="listObrolan">
		<div class="chat" id="chatDia">
			<div class="wrap">
				<img src="aset/gbr/sponbob.jpg">
				<div id="detail">
					<h3>Riyan Satria</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
		<div class="chat" id="chatSaya">
			<div class="wrap">
				<img src="aset/gbr/sponbob.jpg">
				<div id="detail">
					<h3>Riyan Satria</h3>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					</p>
				</div>
			</div>
		</div>
		<div class="chat contoh" id="chatSaya">
			<div class="wrap">
				<img src="aset/gbr/sponbob.jpg">
				<div id="detail">
					<h3>Riyan Satria</h3>
					<p>
					hello world
					</p>
				</div>
			</div>
		</div>
		<div id="bawah"></div>
	</div>
	<div id="typeChat">
		<form>
			<input type="text" class="box" placeholder="Type message..." id="msg">
			<button id="send" style="display: none;"></button>
		</form>
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

	$(function() {
		$("#send").click(function() {
			$(".contoh").show()
			$("#msg").val('')
			scrollKe("#bawah")
			return false
		})
	})
</script>

</body>
</html>