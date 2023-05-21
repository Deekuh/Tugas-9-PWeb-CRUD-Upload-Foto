<html>
<head>
    <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>Data Siswa</h1>
    </div>
    <table border="1" width="70%">
        <tr>
            <th>Foto</th>
            <th style>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th colspan="2">Aksi</th>
        </tr>
  
        <?php
        // Load file koneksi.php
        include "koneksi.php";
        
        // Buat query untuk menampilkan semua data siswa
        $sql = $pdo->prepare("SELECT * FROM siswa");
        $sql->execute(); // Eksekusi querynya
        while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
            echo "<tr>";
            echo "<td style='padding:10px'><img src='images/".$data['foto']."' width='100'></td>";
            echo "<td>".$data['nis']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['jenis_kelamin']."</td>";
            echo "<td>".$data['telp']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "<td><a class='edit-button' href='form_ubah.php?id=".$data['id']."'>&#9998 Ubah</a></td>";
            echo "<td><a class='del-button' href='proses_hapus.php?id=".$data['id']."'>&#128465 Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    
    <div class="header">
        <a class="button" href="form_simpan.php">Tambah Data</a><br><br>
    </div>

</body>
</html>




