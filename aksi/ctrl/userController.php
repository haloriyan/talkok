<?php
include 'controller.php';

class user extends controller {
	public function info($u, $struktur) {
		$q = $this->select("user", array(
			"key" => "username",
			"val" => $u
		));
		$r = $this->fetch($q);
		return $r[$struktur];
	}
	public function login($u, $p) {
		$uname 	= $this->info($u, "username");
		$pwd 	= $this->info($u, "password");
		if($uname == $u and $pwd == $p) {
			session_start();
			$_SESSION['uchat']=$u;
		}else {
			setcookie('kukiLogin', 'Username / Password salah!', time() + 30, "/");
		}
	}
	public function hapus($id) {
		$q = $this->delete("user", $id);
		return $q;
	}
	public function ubah($id, $struktur, $val) {
		$q = $this->update("user", $id, $struktur, $val);
		return $q;
	}
	public function tambah($a, $b, $c, $d, $e) {
		$q = $this->insert("user", "'$a','$b','$c','$d','$e'");
		return $q;
	}
	public function auth($mundur = NULL) {
		session_start();
		$this->sesi = $_SESSION['uchat'];
		if(empty($this->sesi)) {
			if($mundur == "") {
				header("location: ../");
			}else {
				header("location: ./");
			}
		}
	}
}