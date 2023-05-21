<html>
<head>
    <title>Aplikasi CRUD dengan PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
    <h1>Tambah Data Siswa</h1>
    </div>

    <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
        <div class="container">
            <table cellpadding="8">
                <tr>
                    <td>NIS</td>
                    <td class="field"><input type="text" name="nis"></td>
                </tr>

                <tr>
                    <td>Nama</td>
                    <td class="field"><input type="text" name="nama"></td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td class="field">
                    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                    </td>
                </tr>

                <tr>
                    <td>Telepon</td>
                    <td class="field"><input type="text" name="telp"></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td class="field"><textarea name="alamat"></textarea></td>
                </tr>

                <tr>
                    <td>Foto</td>
                    <td class="field"><input type="file" name="foto"></td>
                </tr>
            </table>
        
            <hr>
            
            <div class="submit">
                <input type="submit" value="Simpan">
                <a href="index.php"><input type="button" value="Batal"></a>
            </div>
        </div>
    </form>
</body>
</html>

