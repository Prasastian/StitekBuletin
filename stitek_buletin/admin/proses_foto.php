<?php
require_once '../inc/koneksi.php';
require_once '../inc/fungsi.php';

if (isset($_POST['tambah'])) {
    $foto = $_FILES['foto'];
    $deskripsi = $_POST['deskripsi'];
    $artikel = $_POST['artikel'];

    $nama_file_baru = upload_foto($foto);

    if ($nama_file_baru) {
        if (simpan_foto($nama_file_baru, $deskripsi, $artikel) > 0) {
            echo "<script>alert('Foto berhasil ditambahkan.'); window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan foto.'); window.location.href = 'tambah_foto.php';</script>";
        }
    } else {
        echo "<script>alert('Gagal mengupload foto. Pastikan format dan ukuran sesuai.'); window.location.href = 'tambah_foto.php';</script>";
    }
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $deskripsi = $_POST['deskripsi'];
    $artikel = $_POST['artikel'];

    if (update_foto($id, $deskripsi, $artikel) > 0) {
        echo "<script>alert('Data foto berhasil diubah.'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Gagal mengubah data foto.'); window.location.href = 'edit_foto.php?id=" . $id . "';</script>";
    }
}
?>