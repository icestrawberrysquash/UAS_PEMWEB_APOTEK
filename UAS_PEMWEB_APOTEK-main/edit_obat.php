<?php include 'header.php';  include 'loginex.php';?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">


<?php
$data = $presets->select("obat", "id", $_GET["id"], 0, 10, "asc", true);
foreach ($data as $key => $value) {
echo <<<EOD

<form class="" action="" method="post">
<fieldset>
<legend><h1>Edit data obat</h1></legend>
<input type="text" name="kode_obat" placeholder="kode obat" value="$value->kode_obat" class="form-control" required><br>
<input type="text" name="nama" placeholder="nama obat" value="$value->nama" class="form-control" required><br>
<input type="text" name="jenis" placeholder="jenis" value="$value->jenis" class="form-control" required><br>
<input type="text" name="satuan" placeholder="satuan" value="$value->satuan" class="form-control" required><br>
<input type="number" name="stok" placeholder="stok" value="$value->stok" class="form-control" required><br>
<input type="number" name="harga" placeholder="harga" value="$value->harga" class="form-control" required><br>
<input type="url" name="gambar" placeholder="gambar" value="$value->gambar" class="form-control" required><br>
<input type="text" name="keterangan" placeholder="Keterangan" value="$value->keterangan" class="form-control"><br>

<input type="submit" name="submit" value="submit" class="btn col-md-6 btn-primary">
<input type="reset" name="reset" value="reset"  class="btn col-md-6 btn-danger">
</form>

EOD;

}
?>

    </div>

    <div class="col-md-6 col-md-offset-3 padding10">
      <?php

      $id = $_GET["id"];

      $column = [
        "kode_obat" => $_POST["kode_obat"],
        "nama" => $_POST["nama"],
        "jenis" => $_POST["jenis"],
        "satuan" => $_POST["satuan"],
        "stok" => $_POST["stok"],
        "harga" => $_POST["harga"],
        "gambar" => $_POST["gambar"],
        "keterangan" => $_POST["keterangan"]
      ];

      $column_c = "id";
      $data = $id;

      $data = $presets->update("obat", $column /*data array*/, $column_c, $data);

      if ($data) {
        echo "<div class='bgcolor-green white padding10'>Data berhasil diupdate</div>";
      }else {
        echo "<div class='bg-danger padding10'>Gagal mengupdate data</div>";
      }
       ?>
    </div>
  </div>
</div>
<p>

<?php include 'footer.php'; ?>
