<?php
include '../ctrl/userController.php';

$uname = $_POST['uname'];

$cek = $user->info($uname, "nama");

if($cek == "") {
	setcookie('cekUname', '0', time() + 34, "/");
}else {
	setcookie('cekUname', '1', time() + 34, "/");
}