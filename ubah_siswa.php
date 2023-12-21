<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
</head>

<body>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Matakuliah</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Corrected the form tag placement -->
            <form action="aksi.php" method="post">
                <input type="hidden" name="id" value="<?= $data['id'] ?? '' ?>">

                <div class="modal-body">
                    <!-- Your form fields -->
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?? '' ?>"
                            placeholder="Masukkan Nama Dosen" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" value="<?= $data['tgl_lahir'] ?? '' ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jk" required>
                            <option value="laki_laki" <?= isset($data['jk']) && $data['jk'] == 'laki_laki' ? 'selected' : '' ?>>
                                Laki-laki</option>
                            <option value="prempuan" <?= isset($data['jk']) && $data['jk'] == 'prempuan' ? 'selected' : '' ?>>
                                Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Agama</label>
                        <select class="form-select" name="agama" required>
                            <option value="islam" <?= isset($data['agama']) && $data['agama'] == 'islam' ? 'selected' : '' ?>>
                                Islam</option>
                            <option value="kristen" <?= isset($data['agama']) && $data['agama'] == 'kristen' ? 'selected' : '' ?>>
                                Kristen</option>
                            <option value="khatolik" <?= isset($data['agama']) && $data['agama'] == 'khatolik' ? 'selected' : '' ?>>
                                Khatolik</option>
                            <option value="hindu" <?= isset($data['agama']) && $data['agama'] == 'hindu' ? 'selected' : '' ?>>
                                Hindu</option>
                            <option value="budha" <?= isset($data['agama']) && $data['agama'] == 'budha' ? 'selected' : '' ?>>
                                Budha</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea type="text" class="form-control" name="alamat"
                            placeholder="Masukkan Alamat"><?= $data['alamat'] ?? '' ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Asal Sekolah</label>
                        <input type="text" class="form-control" name="asl_sklh" value="<?= $data['asl_sklh'] ?? '' ?>"
                            placeholder="Masukkan Asal Sekolah" required>
                    </div>
                </div>
                <input type="submit" name="update" value="Update" class="btn btn-warning">
            </form>

            <br>
            <a href="aksi.php">Back to Action Page</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
