<?php
include "koneksi.php";
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $asal_sekolah = $_POST['asal_sekolah']; // Fix variable name
    $sql = "INSERT INTO calon_siswa(nama, tgl_lahir, jk, agama, alamat, asl_sklh) VALUES ('$nama', '$tgl_lahir', '$jk', '$agama', '$alamat', '$asal_sekolah')";
    $query = mysqli_query($koneksi, $sql); // Fix variable name
    if ($query) {
        header("Location: daftar_siswa.php");
    } else {
        die("Gagal simpan data");
    }
} else {
    die("Akses dilarang");
}
?>
