<?php include "header.php";  include 'loginex.php';?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
<?php
$data = $presets->select("transaksi", "id", $_GET["id"], 0, 10, "asc", true);

foreach ($data as $key => $value) {
echo <<<EOD

<form class="" action="" method="post">
<fieldset>
<legend><h3>Edit Transaksi</h3></legend>
<input type="text" name="nama" placeholder="Nama" value="$value->nama" class="form-control" required><br>
<input type="text" name="kode_obat" placeholder="Kode obat" value="$value->kode_obat" class="form-control" required><br>
<input type="number" name="jumlah" placeholder="Jumlah" value="$value->jumlah"  class="form-control" required><br>
<input type="number" name="harga" placeholder="Harga" value="$value->harga" class="form-control" required><br>
<input type="text" name="keterangan" placeholder="Keterangan" value="$value->keterangan" class="form-control"><br>
<input type="number" name="total" placeholder="Total" value="$value->total" class="form-control required"><br>

<input type="submit" name="submit" value="submit" class="btn col-md-6 btn-primary">
<input type="reset" name="reset" value="reset" class="btn col-md-6 btn-danger">
</fieldset>
</form>

EOD;

}
?>
<div class="col-md-12 padding10">
  <?php
  if (isset($_POST["submit"])) {

  $id = $_GET["id"];

  $column = [
    "nama" => $_POST["nama"],
    "kode_obat" => $_POST["kode_obat"],
    "jumlah" => $_POST["jumlah"],
    "harga" => $_POST["harga"],
    "keterangan" => $_POST["keterangan"],
    "total" => $_POST["total"]
  ];

  $column_c = "id";
  $data = $id;

  $data = $presets->update("transaksi", $column /*data array*/, $column_c, $data);

  if ($data) {
    echo "<div class='bgcolor-green white padding10'>Data berhasil diupdate</div>";
  }else {
    echo "<div class='bg-danger padding10'>Gagal mengupdate data</div>";
  }
}else {
  echo "Silakan isi data";
}

  ?>

</div>

    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
