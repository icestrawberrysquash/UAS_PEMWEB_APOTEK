<?php include "header.php"; ?>
    <h1>Data transaksi penjualan obat</h1>
    <a href="tambah_transaksi.php">Tambah Transaksi</a> <p>
  </body>
</html>
<?php include "koneksi.php";
$data = $presets->show("transaksi", "id", 0, 10);

foreach ($data as $key => $value) {
echo <<<EOD
Id : $value->id <br>
Nama : $value->nama <br>
Kode obat : $value->kode_obat <br>
Jumlah : $value->jumlah <br>
Harga : Rp$value->harga <br>
Kategori : $value->kategori <br>
Keterangan : $value->keterangan <br>
Total : Rp$value->total <p>
EOD;
}

 ?>
