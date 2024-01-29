<?php include "header.php";   include 'loginex.php';?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

<?php
$data = $presets->select("laporan", "id", $_GET["id"], 0, 10, "asc", true);

foreach ($data as $key => $value) {
echo <<<EOD

<form class="" action="" method="post">
<fieldset>
<legend><h3>Edit Laporan</h3></legend>
<input type="text" name="tanggal" placeholder="Total jenis" value="$value->tanggal" class="form-control" required><br>
<input type="text" name="total_jenis" placeholder="Total jenis" value="$value->total_jenis" class="form-control" required><br>
<input type="number" name="total" placeholder="Total" value="$value->total"  class="form-control" required><br>
<input type="number" name="uang" placeholder="Uang" value="$value->uang" class="form-control" required><br>

<input type="submit" name="submit" value="submit" class="btn col-md-6 btn-primary">
<input type="reset" name="reset" value="reset" class="btn col-md-6 btn-danger">
</fieldset>
</form>

EOD;

}
?>

</div>

<div class="col-md-6 col-md-offset-3 padding10">
  <?php
  if (isset($_POST["submit"])) {


  $id = $_GET["id"];

  $column = [
    "tanggal" => $_POST["tanggal"],
    "total_jenis" => $_POST["total_jenis"],
    "total" => $_POST["total"],
    "uang" => $_POST["uang"]
  ];

  $column_c = "id";
  $data = $id;

  $data = $presets->update("laporan", $column /*data array*/, $column_c, $data);

  if ($data) {
    echo "<div class='padding10 bgcolor-green white'>Data berhasil diupdate</div>";
  }else {
    echo "<div class='padding10 bg-danger'>Gagal mengupdate data</div>";
  }

}else {
  echo "Silakan isi data laporan";
}

  ?>
</div>

  </div>
</div>

<?php include "footer.php"; ?>
