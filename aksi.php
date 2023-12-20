<?php
include "koneksi.php";
$query = "SELECT * FROM calon_siswa";
$trx = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Siswa yang sudah mendaftar</h3>
    <a href="tambah_siswa.php" class="button">[+] Tambah Baru</a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($trx)) :
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['tgl_lahir'] ?></td>
            <td><?= $row['jk'] ?></td>
            <td><?= $row['agama'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td><?= $row['asal_sekolah'] ?></td>
            <td>
                <a href="form_ubah_siswa.php?id=<?= $row['id'] ?>" class="button">Edit</a>
                <a href="proses_hapus.php?id=<?= $row['id'] ?>" class="button" onclick="return confirm('Apakah akan menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php
        $no++;
        endwhile;
        ?>
    </table>
</body>
</html>
