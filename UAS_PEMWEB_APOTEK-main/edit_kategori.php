<?php include "header.php";  include 'loginex.php';?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

<?php
$data = $presets->select("kategori", "id", $_GET["id"], 0, 10, "asc", true);

foreach ($data as $key => $value) {
echo <<<EOD

<form class="" action="" method="post">
<fieldset>
<legend><h1>Edit Kategori</h1></legend>
<input type="text" name="kategori" placeholder="Kategori" value="$value->kategori" required class="form-control"><br>
<input type="text" name="gambar" placeholder="Gambar" value="$value->gambar" required class="form-control"><br>
<textarea name="keterangan" placeholder="Keterangan" cols="20" rows="15" class="form-control"> $value->keterangan </textarea><br>

<input type="submit" name="submit" value="submit" class="col-md-6 btn btn-primary">
<input type="reset" name="reset" value="reset" class="col-md-6 btn btn-danger">
</fieldset>
</form>

EOD;

}


?>
    </div>

    <div class="col-md-6 col-md-offset-3 padding10">
      <?php
      $id = $_GET["id"];

      $column = [
        "kategori" => $_POST["kategori"],
        "keterangan" => $_POST["keterangan"],
        "gambar" => $_POST["gambar"]
      ];

      $column_c = "id";
      $data = $id;

      $data = $presets->update("kategori", $column /*data array*/, $column_c, $data);

      if ($data) {
        echo "<div class='padding10 bgcolor-green white'>Data berhasil diupdate</div>";
      }else {
        echo "<div class='padding10 bg-danger'>Gagal mengupdate data</div>";
      }

      ?>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>
