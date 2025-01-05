<?php
$servername = "localhost";
$username = "root";
$password = "";//Sesuaikan jika ada password untuk user root
$dbname = "db_alumni";

//Membuat Koneksi
$conn = new mysqli($servername,$username,$password,$dbname);

//Memeriksa Koneksi
if($conn->connect_error){
    die("Koneksi gagal:".$conn->connect_error);
}
?>