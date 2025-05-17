<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Foto Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container admin-panel">
        <h2>Tambah Foto Baru</h2>
        <form action="proses_foto.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="foto">Pilih Foto:</label>
                <input type="file" class="form-control-file" id="foto" name="foto" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Foto:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="artikel">Artikel Berita:</label>
                <textarea class="form-control" id="artikel" name="artikel" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>