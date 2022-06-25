<?php

$servername="localhost";
$username="root";
$password="";
$dbname = "myweb";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun");


$vemail=$_POST['email'];
$vpassword=$_POST['password'];


if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    if (empty($vemail)) {
        echo 'Email tidak tidak boleh kosong';
        exit();
    }else if(empty($vpassword)){
        echo 'Password tidak boleh kosong';
        exit();
    }else{ 
    $sql = "SELECT * FROM user WHERE email='$vemail' && password='$vpassword'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $vemail && $row['password'] === $vpassword) {
                header("Location: beranda.php");
                exit();
            }else{
                echo 'Error';
                exit();
            }
        }else{
            echo 'password/ email salah';
            exit();
        }
    }
}else{
    header("Location: beranda.php");
    exit();
}
mysqli_query($conn, $sql) or die("Proses cek data ke database gagal");

    
    

?>