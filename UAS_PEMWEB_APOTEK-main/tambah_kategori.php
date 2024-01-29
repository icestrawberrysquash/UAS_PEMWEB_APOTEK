<?php include "header.php";  include 'loginex.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

<?php
$data = $presets->select("kategori", "id", $_GET["id"], 0, 10, "asc", true);

echo <<<EOD

<form class="" action="" method="post">
<fieldset>
<legend><h3>Tambah Kategori</h3></legend>
<input type="text" name="kategori" placeholder="Kategori" class="form-control" required><br>
<textarea name="keterangan" placeholder="Keterangan" cols="20" rows="15" class="form-control" required> keterangan </textarea><br>
<input type="url" name="gambar" placeholder="Gambar" class="form-control" required><br>

<input type="submit" name="submit" value="submit" class="btn col-md-6 btn-primary">
<input type="reset" name="reset" value="reset" class="btn col-md-6 btn-danger">
</fieldset>
</form>

EOD;

       ?>


    </div>
    <div class="col-md-6 col-md-offset-3 padding10">
      <?php

      $column = [
        "kategori" => $_POST["kategori"],
        "keterangan" => $_POST["keterangan"],
        "gambar" => $_POST["gambar"]
      ];

      $column_c = "kategori";
      $data_c = $_POST["kategori"];

      $data = $presets->insert("kategori", $column /*data array*/, $column_c, $data_c);

      if ($data) {
        echo "<div class='bgcolor-green white padding10'>Data berhasil ditambah</div>";
      }else {
        echo "<div class='bg-danger padding10'>Gagal menambah data</h3>";
      }

      ?>

    </div>
  </div>
</div>
<p>
<?php include 'footer.php'; ?>
