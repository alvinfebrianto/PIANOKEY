<?php
session_start();
include 'koneksi.php';
$kon = new Koneksi();

$id = @$_POST['id'];
$nama = @$_POST['tnama'];
$email = @$_POST['temail'];
$password = @$_POST['tpass'];
$password2 = @$_POST['tpass2'];

if($password==$password2){ 
    include 'login.php';
    echo "<script>alert('Daftar Berhasil');</script>";
    $abc = $kon->kueri("INSERT INTO user VALUES ('$id', '$nama', '$email', MD5('$password'))");
  }else{ 
  echo "<script>alert('Maaf password anda tidak sama, silahkan coba lagi');</script>";
  include 'login_page.php';
 }

?>
<meta http-equiv="refresh" content="1;/>
