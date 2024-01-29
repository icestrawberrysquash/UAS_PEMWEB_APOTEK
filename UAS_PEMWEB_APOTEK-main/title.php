<?php
// echo "<pre>";
// print_r($_SERVER);

$title = [
  "/admin.php" => "Halaman Admin",
  "/edit_kategori.php" => "Edit Kategori",
  "/edit_laporan.php" => "Edit Laporan",
  "/edit_obat.php" => "Edit Obat",
  "/edit_transaksi.php" => "Edit Trasaksi",
  "/edit_user.php" => "Edit User",
  "/login.php" => "Login User",
  "/loginadmin.php" => "Login Admin",
  "/obat_kategori.php" => "Obat Berdasarkan Kategori",
  "/tambah_kategori.php" => "Tambah Kategori",
  "/tambah_obat.php" => "Tambah Obat",
  "/tambah_transaksi.php" => "Tambah Transaksi",
  "/tambah_user.php" => "Tambah User",
  "/index.php" => "Halaman Utama",
  "/user.php" => "Halaman User"
];

foreach ($title as $key => $value) {
  if ($_SERVER["PHP_SELF"] == $key) {
    echo $value;
  }
}
 ?>
