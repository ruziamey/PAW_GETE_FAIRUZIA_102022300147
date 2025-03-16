<?php
echo ("FAIRUZIA MEYLA FATINAH | 102022300147 | SI4708");

// ==================1==================
// Definisikan variabel2 yang akan digunakan untuk melakukan koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "db_perpustakaan";
$port = 3306;


// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database 
$conn = mysqli_connect($host, $username, $password, $database, $port);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>