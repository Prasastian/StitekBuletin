<?php
require_once '../inc/koneksi.php';
require_once '../inc/fungsi.php';

$foto_berita = tampil_foto();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Buletin STITEK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container admin-panel">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Panel Admin Buletin STITEK</h2>
            <a href="../" class="btn btn-secondary">Home</a>
        </div>
        <p><a href="tambah_foto.php" class="btn btn-success">Tambah Foto Baru</a></p>

        <?php if (!empty($foto_berita)): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Upload</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($foto_berita as $foto): ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><img src="../img/<?= $foto['nama_file']; ?>" alt="<?= $foto['deskripsi']; ?>" width="100"></td>
                            <td><?= substr($foto['deskripsi'], 0, 50); ?>...</td>
                            <td><?= date('d-m-Y H:i:s', strtotime($foto['tanggal_upload'])); ?></td>
                            <td>
                                <a href="edit_foto.php?id=<?= $foto['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="hapus_foto.php?id=<?= $foto['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus foto ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Belum ada foto berita yang ditambahkan.</p>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>