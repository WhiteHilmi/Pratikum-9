
host="isi_dengan_nama_host";
$username="isi_dengan_username";
$password="";
mysql_connect($host, $username, $password) or die("Koneksi gagal dibangun");
mysql_select_db("situspersonal") or die("Database tidak dapat dibuka");
