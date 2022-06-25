<?php
$host=" dinus.net ";
$username="20082010124";
$password="passwor_username";
mysql_connect($host, $username, $password) or die("Koneksi gagal dibangun");
mysql_select_db("situspersonal") or die("Database tidak dapat dibuka");
//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$vnama=$_POST['nama'];
$vjkel=$_POST['jkel'];
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];
$sql="insert kontak set nama='$vnama',
		jkel='$vjkel',
		email='$vemail',
		alamat='$valamat',
		kota='$vkota',
		pesan='$vpesan'";
mysql_query($sql) or die("Proses simpan ke database gagal");
mysql_close();
header("location:kontak.html");
?>