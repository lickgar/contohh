<?php
/*$db_name = "jadwalrapat";

$conn =mysqli_connect("localhost","root","");
mysqli_select_db("jadwalrapat");

// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: ");
}
echo "Koneksi berhasil";
//mysqli_close($conn);
*/
?>
 

  <!-- awal dari koneksi mysql -->
<?php
$hostname = "localhost";
$database = "jadwalrapat";
$username = "root";
$password = "";
$conn = mysqli_connect($hostname, $username, $password, $database);
// script cek koneksi
if (!$conn) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
?> 

<!-- akhir dari koneksi mysql -->


