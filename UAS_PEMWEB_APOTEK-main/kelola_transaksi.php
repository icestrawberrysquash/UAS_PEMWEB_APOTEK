<?php include "header.php"; ?>
    <h1>Kelola transaksi</h1>

<?php
include "koneksi.php"; $presets->errorrep(0);
$data = $presets->show("transaksi", "id", 0, 10);

echo "
<a href=tambah_transaksi.php>+Tambah transaksi</a><br>
<table>
<thead>
<tr>
  <th>#</th> <th>Id</th>  <th>Nama</th>  <th>Kode obat</th>  <th>Jumlah</th>
  <th>Harga</th> <th>Kategori</th>  <th>Keterangan</th>  <th>Total</th> <th>Action</th>
</tr>
</thead>
<tbody>
";

$a = 0;

foreach ($data as $key => $value) {
echo <<<EOD
<tr>
<td>$a</td> <td>$value->id</td> <td>$value->nama</td> <td>$value->kode_obat</td>  <td>$value->jumlah</td>
 <td>$value->harga</td> <td>$value->kategori</td>  <td>$value->keterangan</td>  <td>$value->total</td>
  <td><a href="edit_transaksi.php?action=edit&id=$value->id">Edit</a> | <a href="?action=delete&id=$value->id" id="delete" data-id="$value->id">Delete</a></td>
EOD;
$a++;
}

echo
"</tbody>
</table>";

if ($_GET["delete"] == "true") {
  $data = $presets->delete("transaksi", "id", $_GET["id"]);

  if ($data) {
    echo "<script>alert('berhasil menghapus data')</script>";
    header("location: kelola_transaksi.php");
  }
}

 ?>

<script>
$(document).ready(function() {
  var url_delete = $("a[id='delete']");

  url_delete.click(function(event) {
    event.preventDefault();
    var nilai = confirm("Apakah anda yakin akan menghapus data "+url_delete.attr("data-id"));
    if (nilai) {
      window.location.href = "/kelola_transaksi.php"+url_delete.attr("href")+"&delete=true";
    }
  });
});

</script>
  </body>
</html>
