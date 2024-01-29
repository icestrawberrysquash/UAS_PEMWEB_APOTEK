<?php include "header.php"; ?>
    <h1>Kelola laporan</h1>

<?php
include "koneksi.php"; $presets->errorrep(0);
$data = $presets->show("laporan", "id", 0, 10);

echo "
<table>
<thead>
<tr>
  <th>#</th> <th>Id</th>  <th>Tanggal</th>  <th>Total jenis</th>  <th>Total</th>
  <th>Uang</th><th>Action</th>
</tr>
</thead>
<tbody>
";

$a = 0;

foreach ($data as $key => $value) {
echo <<<EOD
<tr>
<td>$a</td> <td>$value->id</td> <td>$value->tanggal</td> <td>$value->total_jenis</td>  <td>$value->total</td>
 <td>$value->uang</td>
  <td><a href="edit_laporan.php?action=edit&id=$value->id">Edit</a> | <a href="?action=delete&id=$value->id" id="delete" data-id="$value->id">Delete</a></td>
EOD;
$a++;
}

echo
"</tbody>
</table>";

if ($_GET["delete"] == "true") {
  $data = $presets->delete("laporan", "id", $_GET["id"]);

  if ($data) {
    echo "<script>alert('berhasil menghapus data')</script>";
    header("location: kelola_laporan.php");
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
      window.location.href = "/kelola_laporan.php"+url_delete.attr("href")+"&delete=true";
    }
  });
});

</script>
  </body>
</html>
