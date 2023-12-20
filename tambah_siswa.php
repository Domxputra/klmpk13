<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Tambah Siswa</h3>
    <form action="aksi.php" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>

        <label>Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" required><br>

        <label>Jenis Kelamin:</label>
        <select name="jk" required>
            <option value="laki_laki">Laki-laki</option>
            <option value="prempuan">Perempuan</option>
        </select><br>

        <label>Agama:</label>
        <select name="jk" required>
            <option value="laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>

        <label>Alamat:</label>
        <textarea name="alamat" required></textarea><br>

        <label>Asal Sekolah:</label>
        <input type="text" name="asl_sklh" required><br>

        <input type="submit" name="simpan" value="Simpan" class="button">
    </form>
</body>
</html>
