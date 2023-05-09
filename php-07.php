<?php
session_start();

// Cek apakah user sudah login atau belum
if (isset($_SESSION['username'])) {
  // Jika sudah login, tampilkan halaman utama
  // Tambahkan kode HTML untuk halaman utama di sini
  // ...

} else {
  // Jika belum login, periksa apakah form login sudah disubmit atau belum
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username dan password sudah benar
    if ($username === 'admin' && $password === 'admin123') {
      // Jika sudah benar, buat session dan redirect ke halaman utama
      $_SESSION['username'] = $username;
      header('Location: index.php');
      exit;
    } else {
      // Jika salah, tampilkan pesan kesalahan
      $error = 'Username atau password salah';
    }
  }

  // Tampilkan form login
  // Tambahkan kode HTML untuk form login di sini
  // ...
}
?>
