<?php
include '../ctrl/userController.php';

$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

$user->login($uname, $pwd);