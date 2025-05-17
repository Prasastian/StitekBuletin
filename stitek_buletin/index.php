<?php
require_once 'inc/koneksi.php';
require_once 'inc/fungsi.php';

$foto_berita = tampil_foto();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buletin STITEK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Buletin STITEK</h1>
            <a href="admin/" class="btn btn-info">Admin</a>
        </div>
        <div class="timeline-foto">
            <?php if (!empty($foto_berita)): ?>
                <?php foreach ($foto_berita as $foto): ?>
                    <div class="foto-item">
                        <img src="img/<?= $foto['nama_file']; ?>" alt="<?= $foto['deskripsi']; ?>" onclick="window.location.href='detail_berita.php?id=<?= $foto['id']; ?>'">
                        <div class="foto-overlay">
                            <p><?= $foto['deskripsi']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Belum ada berita terbaru.</p>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>