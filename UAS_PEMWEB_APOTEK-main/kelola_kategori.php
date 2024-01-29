<?php include "header.php"; ?>
    <h1>Kelola kategori</h1>

<?php
include "koneksi.php"; $presets->errorrep(0);
$data = $presets->show("kategori", "id", 0, 10);

echo "
<a href=tambah_kategori.php>+Tambah kategori</a><br>
<table>
<thead>
<tr>
  <th>#</th> <th>Id</th>  <th>Kategori</th>  <th>Keterangan</th>  <th>Gambar</th>
  <th>Action</th>
</tr>
</thead>
<tbody>
";

$a = 0;

foreach ($data as $key => $value) {
echo <<<EOD
<tr>
<td>$a</td> <td>$value->id</td> <td>$value->kategori</td> <td>$value->keterangan</td>  <td>$value->gambar</td>
  <td><a href="edit_kategori.php?action=edit&id=$value->id">Edit</a> | <a href="?action=delete&id=$value->id" id="delete" data-id="$value->id">Delete</a></td>
EOD;
$a++;
}

echo
"</tbody>
</table>";

if ($_GET["delete"] == "true") {
  $data = $presets->delete("kategori", "id", $_GET["id"]);

  if ($data) {
    echo "<script>alert('berhasil menghapus data')</script>";
    header("location: kelola_kategori.php");
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
      window.location.href = "/kelola_kategori.php"+url_delete.attr("href")+"&delete=true";
    }
  });
});

</script>
  </body>
</html>
