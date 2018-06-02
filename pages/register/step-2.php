<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>Being member in Talkok</title>
	<link href="../aset/fw/build/fw.css" rel="stylesheet">
	<link href="../aset/fw/build/font-awesome.min.css" rel="stylesheet">
	<link href="../aset/css/style.index.css" rel="stylesheet">
	<script src="../aset/js/jquery-3.1.1.js"></script>
	<style>
		.container p {
			font-size: 20px;
		}
		.container .box {
			background: none;
			border-radius: 0px;
			border: none;
			border-bottom: 1px solid #fff;
			color: #fff;
			height: 80px;
			font-size: 23px;
			width: 92.5%;
		}
	</style>
</head>
<body>

<div class="container">
	<div class="wrap">
		<h1>Hello Riyan!</h1>
		<p>
			Glad to know you. Before you registering, please create an username for your account
		</p>
		<form>
			<input type="text" class="box">
			<button id="next" style="display: none;"></button>
		</form>
	</div>
</div>

<script>
	$(function() {
		$("#next").click(function() {
			document.location = "./step-3"
			return false
		})
	})
</script>

</body>
</html>