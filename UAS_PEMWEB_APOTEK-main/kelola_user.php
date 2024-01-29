<?php include "header.php"; ?>
    <h1>Kelola user</h1>

<?php include 'koneksi.php'; $presets->errorrep(0);

$data = $presets->show("user", "id", 0, 10);

echo <<<EOD
<a href="tambah_user.php">+Tambah user</a> <br>
<table>
<thead> <tr><th>#</th><th>Nama</th> <th>Username</th> <th>Password</th> <th>Action</th></thead>

<tbody>

EOD;
$a = 0;
foreach ($data as $key => $value) {
echo <<<EOD

<tr>
<td>$a</td><td>$value->nama</td><td>$value->username</td><td>$value->password</td><td><a href="edit_user.php?action=edit&id=$value->id">Edit</a> | <a href="?action=delete&id=$value->id" id="delete" data-username="$value->username">Delete</a></td>
</tr>

EOD;
$a++;
}

    if ($_GET["delete"] == "true") {
      $data = $presets->delete("user", "id", $_GET["id"]);

      if ($data) {
        echo "<script>alert('berhasil menghapus data')</script>";
        header("location: kelola_user.php");
      }
    }

    ?>


    <script>
    $(document).ready(function() {
      var url_delete = $("a[id='delete']");

      url_delete.click(function(event) {
        event.preventDefault();
        var nilai = confirm("Apakah anda yakin akan menghapus data "+url_delete.attr("data-username"));
        if (nilai) {
          window.location.href = "/kelola_user.php"+url_delete.attr("href")+"&delete=true";
        }
      });
    });
    </script>

  </body>
</html>


<?php



 ?>
