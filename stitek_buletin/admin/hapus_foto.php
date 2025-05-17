<?php
require_once '../inc/koneksi.php';
require_once '../inc/fungsi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (hapus_foto($id)) {
        echo "<script>alert('Foto berhasil dihapus.'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus foto.'); window.location.href = 'index.php';</script>";
    }
} else {
    header("Location: index.php");
    exit();
}
?>