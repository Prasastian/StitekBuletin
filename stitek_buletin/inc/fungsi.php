<?php
function tampil_foto() {
    global $koneksi;
    $query = "SELECT * FROM foto_berita ORDER BY tanggal_upload DESC";
    $result = mysqli_query($koneksi, $query);
    $foto_berita = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $foto_berita[] = $row;
    }
    return $foto_berita;
}

function tampil_detail_berita($id) {
    global $koneksi;
    $query = "SELECT * FROM foto_berita WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        echo "Error MySQL: " . mysqli_error($koneksi);
        return false;
    }
    return mysqli_fetch_assoc($result);
}

function upload_foto($file) {
        $namaFile = $file['name'];
        $ukuranFile = $file['size'];
        $error = $file['error'];
        $tmpName = $file['tmp_name'];

        if ($error === 4) {
            return false; // Tidak ada file yang diupload
        }

        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            return false; // Ekstensi tidak valid
        }

        if ($ukuranFile > 20000000) { // Contoh batas ukuran 2MB
            return false; // Ukuran terlalu besar
        }

        $namaFileBaru = uniqid();
        $namaFileBaru .= '.' . $ekstensiGambar;

        // Menggunakan path absolut
        if (move_uploaded_file($tmpName, __DIR__ . '/../img/' . $namaFileBaru)) {
            return $namaFileBaru;
        } else {
            echo "Gagal memindahkan file. Pastikan folder img ada dan dapat diakses.";
            return false;
        }
    }
    
function simpan_foto($nama_file, $deskripsi, $artikel) {
    global $koneksi;
    $tanggal_upload = date("Y-m-d H:i:s");
    $query = "INSERT INTO foto_berita (nama_file, deskripsi, artikel, tanggal_upload) VALUES ('$nama_file', '$deskripsi', '$artikel', '$tanggal_upload')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function update_foto($id, $deskripsi, $artikel) {
    global $koneksi;
    $query = "UPDATE foto_berita SET deskripsi = '$deskripsi', artikel = '$artikel' WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapus_foto($id) {
    global $koneksi;
    $query_select = "SELECT nama_file FROM foto_berita WHERE id = $id";
    $result_select = mysqli_query($koneksi, $query_select);
    $row = mysqli_fetch_assoc($result_select);
    $nama_file = $row['nama_file'];

    $query_delete = "DELETE FROM foto_berita WHERE id = $id";
    mysqli_query($koneksi, $query_delete);

    if (mysqli_affected_rows($koneksi) > 0 && file_exists('img/' . $nama_file)) {
        unlink('img/' . $nama_file);
        return true;
    }
    return false;
}
?>