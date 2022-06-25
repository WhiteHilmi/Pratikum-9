<?php

$servername="localhost";
$username="root";
$password="";
$dbname = "myweb";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun");

$vnama=$_POST['nama'];
$vaddress=$_POST['address'];
$vemail=$_POST['email'];
$vhomepage=$_POST['homepage'];
$vusername=$_POST['username'];
$vpassword=$_POST['password'];

$sql = "INSERT INTO user SET nama='$vnama',
address='$vaddress',
email='$vemail',
homepage='$vhomepage', 
username='$vusername',
password='$vpassword'";

mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
header("location:login.php");

?>