<?php
require_once 'inc/koneksi.php';
require_once 'inc/fungsi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $detail_berita = tampil_detail_berita($id);
    if (!$detail_berita) {
        header("Location: index.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($detail_berita['deskripsi']); ?> - Buletin STITEK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .berita-detail-container {
            margin-top: 30px;
        }

        .berita-title {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 20px;
            color: #343a40; /* Warna teks gelap */
        }

        .berita-image {
            width: 100%;
            max-height: 500px; /* Atur tinggi maksimum gambar */
            object-fit: cover; /* Agar gambar mengisi kontainer tanpa distorsi */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 25px;
        }

        .berita-content {
            font-size: 1.1em;
            line-height: 1.7;
            color: #555; /* Warna teks agak gelap */
            margin-bottom: 20px;
            text-align: justify; /* Rata kiri kanan untuk teks */
        }

        .berita-meta {
            font-size: 0.9em;
            color: #777; /* Warna teks abu-abu */
            margin-bottom: 20px;
        }

        .kembali-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container berita-detail-container">
        <h2 class="berita-title"><?= htmlspecialchars($detail_berita['deskripsi']); ?></h2>
        <img src="img/<?= htmlspecialchars($detail_berita['nama_file']); ?>" alt="<?= htmlspecialchars($detail_berita['deskripsi']); ?>" class="berita-image">
        <p class="berita-content"><?= nl2br(htmlspecialchars($detail_berita['artikel'])); ?></p>
        <p class="berita-meta">Diunggah pada: <?= date('d F Y H:i:s', strtotime($detail_berita['tanggal_upload'])); ?></p>
        <a href="index.php" class="btn btn-outline-secondary kembali-button">Kembali ke Beranda</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>