<?php

$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = "qwe123"; // Password (Isi jika menggunakan password)
$database = "upload_foto"; // Nama databasenya

// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);

?>