<?php
include '../functions/functions.php';

// Ambil ID mahasiswa dari URL
$id = $_GET['id'];

// Hapus data mahasiswa berdasarkan ID
if (hapus($id) > 0) {
    // Redirect kembali ke halaman index.php jika penghapusan berhasil
    echo "<script>
            alert('Data berhasil dihapus!');
            document.location.href = '../index/index.php';
          </script>";
} else {
    // Tampilkan pesan error jika penghapusan gagal
    echo "<script>
            alert('Data gagal dihapus!');
            document.location.href = '../index/index.php';
          </script>";
}
?>