<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $asl_sklh = $_POST['asl_sklh'];

    $sql = "INSERT INTO calon_siswa(nama, tgl_lahir, jk, agama, alamat, asl_sklh) VALUES ('$nama', '$tgl_lahir', '$jk', '$agama', '$alamat', '$asl_sklh')";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header("Location: daftar.php");
    } else {
        die("Gagal simpan data");
    }
} else {
    die("Akses dilarang");
}
$data = array();
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $asl_sklh = $_POST['asl_sklh'];

    $sql = "UPDATE calon_siswa SET 
            nama='$nama', 
            tgl_lahir='$tgl_lahir', 
            jk='$jk', 
            agama='$agama', 
            alamat='$alamat', 
            asl_sklh='$asl_sklh' 
            WHERE id=$id";

    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header("Location: daftar.php");
    } else {
        die("Gagal update data: " . mysqli_error($koneksi));
    }
} elseif (isset($_GET['id'])) {
    // Fetch existing data for editing
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM calon_siswa WHERE id=$id");

    if ($result) {
        $data = mysqli_fetch_assoc($result);
    } else {
        die("Gagal ambil data: " . mysqli_error($koneksi));
    }
} else {
    die("Akses dilarang");
}

// Include your database connection file

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $asl_sklh = $_POST['asl_sklh'];

    // Perform the delete operation
    $sql = "DELETE FROM calon_siswa WHERE id = $id";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header("Location: daftar.php");
        exit();
    } else {
        die("Gagal hapus data: " . mysqli_error($koneksi));
    }
} else {
    die("Akses dilarang");
}


?>
