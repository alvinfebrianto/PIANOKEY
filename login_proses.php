<?php 
session_start();
include 'koneksi.php';
$kon = new Koneksi();

$email = @$_POST['temail'];
$password = @$_POST['tpass'];
$abc = $kon->kueri("SELECT * FROM user WHERE email_user = '$email' AND pass_user = MD5('$password') ");
$jumlah = $kon->jumlah_data($abc);
if ($jumlah == 0) {
	include 'index.php';
	echo "<script>alert('Login Failed')</script>";
}else{
	$hasil = $kon->hasil_data($abc);
	$_SESSION['id_user'] = $hasil['id_user'];
	$_SESSION['user_nama'] = $hasil['nama_user'];
	echo "<script>alert('Welcome $hasil[nama_user].');</script>";
	include 'homePage.php';
}
?>