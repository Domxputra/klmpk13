<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <div class=mt-3>
            <h3 class="text-center">TABEL</h3>
            <h3 class="text-center">MATAKULIAH</h3>

            <div class="card mt-3">
                <div class="card-header bg-primary text-white">
                    Siswa yang sudah mendaftar
                </div>
                <div class="card-body">

                    <!-- Button trigger modal -->
                    <a href="tambah_siswa.php" class="btn btn-success mb-3">Tambah Data</a>
                    <table class="table table-bordered table-striped table-hover">
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
                                <td><?= $row['asl_sklh'] ?></td>
                                <td>
                                    <a href="ubah_siswa.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                                    <a href="aksi.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah akan menghapus?')">Hapus</a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        endwhile;
                        ?>
                    </table>
                    </table>
                </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
<?= $this->endSection() ?>