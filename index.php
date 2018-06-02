<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Talkok</title>
	<link href="aset/fw/build/fw.css" rel="stylesheet">
	<link href="aset/fw/build/font-awesome.min.css" rel="stylesheet">
	<link href="aset/css/style.index.css" rel="stylesheet">
	<script src="aset/js/embo.js"></script>
</head>
<body>

<div class="atas">
	<h1 class="judul">TALKOK</h1>
</div>

<div class="container rata-tengah">
	<div class="wrap">
		<h2>Join and find many friends who are interested just like your passion</h2>
		<button>JOIN NOW</button>
		<br />
		<p>or already have an account?</p>
		<div id="signIn">Sign in now!</div>
	</div>
</div>

<div class="bg"></div>
<div class="popupWrapper" id="formReg">
	<div class="popup">
		<div class="wrap">
			<h3 class="rata-tengah">REGISTER</h3>
			<hr size="1" color="#ccc">

			<div class="isi">Your name :</div>
			<input type="text" class="box">
			<div class="isi">Your email :</div>
			<input type="email" class="box">
			<div class="isi">Create password :</div>
			<input type="password" class="box">
			<div class="bag-tombol">
				<button class="biru" id="register">CREATE ACCOUNT</button>
			</div>
		</div>
	</div>
</div>

<script>
	munculPopup("#formReg")
	klik("#register", function() {
		mengarahkan("./register/step-2")
	})
</script>

</body>
</html>