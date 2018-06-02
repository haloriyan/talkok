<?php

$cek = $_COOKIE['cekUname'];

if($cek == "1") {
	echo "<script>".
		 	"munculPopup('#nextReg')".
		 "</script>";
}else {
	echo $cek;
	// echo "Username sudah digunakan :(";
}