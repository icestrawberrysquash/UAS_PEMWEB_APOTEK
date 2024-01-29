<?php include "header.php"; ?>

<h1>Kelola Obat</h1>
<a href="tambah_obat.php">+Tambah Obat</a>

<?php include 'koneksi.php'; $presets->errorrep(0);

$data = $presets->show("obat", "kode_obat", 0, 10);

echo <<<EOD

<table>
<thead><tr><th>#</th><th>Kode Obat</th> <th>Nama</th> <th>Jenis</th> <th>Satuan</th> <th>Stok</th>
<th>Harga</th> <th>Kategori</th> <th>Link gambar</th> <th>Keterangan</th> <th>Actions</th>
</thead>

<tbody>

EOD;
$a = 0;
foreach ($data as $key => $value) {
echo <<<EOD

<tr>
<td>$a</td><td>$value->kode_obat</td><td>$value->nama</td><td>$value->jenis</td><td>$value->satuan</td>
<td>$value->stok</td><td>$value->harga</td><td>$value->kategori</td><td>$value->gambar</td> <td>$value->keterangan</td> <td><a href="edit_obat.php?action=edit&kode_obat=$value->kode_obat&id=$value->id">Edit</a> | <a href="?action=delete&kode_obat=$value->kode_obat&id=$value->id" id="delete" data-kode="$value->kode_obat">Delete</a></td>
</tr>

EOD;
$a++;
}

if ($_GET["delete"] == "true") {
  $data = $presets->delete("obat", "id", $_GET["id"]);

  if ($data) {
    echo "<script>alert('berhasil menghapus data')</script>";
    header("location: kelola_obat.php");
  }
}

?>

</tbody>
</table>

  </body>
</html>
