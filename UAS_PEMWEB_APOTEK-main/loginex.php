<?php
if (!$presets->loginCek($_COOKIE["username"], $_COOKIE["password"]) && $_COOKIE["session"] != "kasir") {
  echo "<script>alert('Harap Login Terlebih Dahulu')</script>";
  header("Location: /");
}
elseif (!$presets->loginCek($_COOKIE["username"], $_COOKIE["password"]) && $_COOKIE["session"] != "admin") {
  echo "<script>alert('Harap Login Terlebih Dahulu')</script>";
  header("Location: /");
}

$halaman_admin = ["/edit_kategori.php", "/edit_laporan.php", "/edit_obat.php", "/edit_transaksi.php", "/edit_user.php","/admin.php", "/tambah_obat.php", "/tambah_user.php", "/tambah_transaksi.php", "/tambah_kategori.php"];

if ($_COOKIE["session"] == "kasir" && in_array("$_SERVER[PHP_SELF]", $halaman_admin)) {
  echo "<script>alert('Kasir Tidak Dapat Mengakses Halaman Ini')</script>";
  header("Location: /");
}

?>
