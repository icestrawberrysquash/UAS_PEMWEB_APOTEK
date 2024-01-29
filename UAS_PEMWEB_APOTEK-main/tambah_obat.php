<?php include "header.php";  include 'loginex.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <form class="" action="" method="post">
        <fieldset>
          <legend><h1>Tambah obat</h1></legend>
          <input type="text" name="kode_obat" placeholder="kode obat" required class="form-control"><br>
          <input type="text" name="nama" placeholder="nama obat" required class="form-control"><br>
          <input type="text" name="jenis" placeholder="jenis" required class="form-control"><br>
          <input type="text" name="satuan" placeholder="satuan" required class="form-control"><br>
          <input type="number" name="stok" placeholder="stok" required class="form-control"><br>
          <input type="number" name="harga" placeholder="harga" required class="form-control"><br>
          <select name="kategori" required class="form-control">
            <option>Kategori</option>
            <option value="obat bebas">Obat bebas</option>
            <option value="obat terbatas">Obat terbatas</option>
            <option value="obat keras">Obat keras</option>
            <option value="obat narkotika">Obat narkotika / psikotropika</option>
          </select> <br>
          <input type="url" name="gambar" placeholder="gambar" required class="form-control"><br>
          <input type="text" name="keterangan" placeholder="Keterangan" class="form-control"><br>

          <input type="submit" name="Submit" value="submit" class="btn btn-primary col-md-6">
          <input type="reset" name="Reset" value="reset" class="btn btn-danger col-md-6">
        </fieldset>
      </form>

    </div>
    <p>
    <div class="col-md-6 col-md-offset-3 padding10">
      <?php
      $column = [
        "kode_obat" => $_POST["kode_obat"],
        "nama" => $_POST["nama"],
        "jenis" => $_POST["jenis"],
        "satuan" => $_POST["satuan"],
        "stok" => $_POST["stok"],
        "harga" => $_POST["harga"],
        "kategori" => $_POST["kategori"],
        "gambar" => $_POST["gambar"],
        "keterangan" => $_POST["keterangan"]
      ];

      $column_c = "kode_obat";
      $data_c = $_POST["kode_obat"];

      $data = $presets->insert("obat", $column /*data array*/, $column_c, $data_c);

      if ($data) {
        echo "<div class='padding10 bgcolor-green white'>Berhasil Menambah Data</div>";
      }else {
        echo "<div class='padding10 bgcolor-danger'>Gagal menambah data </div>";
      }
      ?>

    </div>
  </div>
</div>
<p>
<?php include "footer.php"; ?>
