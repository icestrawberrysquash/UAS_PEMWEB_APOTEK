<?php include "header.php";  include 'loginex.php';?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">


      <form class="form-horizontal transaksi" action="" method="post">
        <fieldset>
          <legend><h1>Tambah Transaksi</h1></legend>
        <input type="text" name="nama" placeholder="nama obat" class="form-control" required><br>
        <input type="text" name="kode_obat" placeholder="kode obat" required class="form-control"><br>
        <input type="number" name="jumlah" placeholder="jumlah barang" required class="jumlah form-control"><br>
        <input type="number" name="harga" placeholder="harga" required class="harga form-control"><br>
        <select name="kategori" class="form-control">
          <option>Kategori</option>
          <option value="obat bebas">Obat bebas</option>
          <option value="obat terbatas">Obat terbatas</option>
          <option value="obat keras">Obat keras</option>
          <option value="obat narkotika">Obat narkotika / psikotropika</option>
        </select> <br>
        <input type="text" name="keterangan" placeholder="keterangan" class="form-control"><br>
        <div class="">
          <h4 class="total_h">NaN</h4>
        </div>
        <input type="hidden" name="total" class="total">
        <input type="submit" name="submit" value="submit" class="btn col-md-6 btn-primary">
        <input type="reset" name="reset" value="reset" class="btn col-md-6 btn-danger">
      </fieldset>
      </form>

<div class="bg-danger">
  <div class="glyphicon glyphicon-exclamation-sign padding10"></div>
  <?php


  if(!isset($_POST["kode_obat"])){
  }

  $column = [
    "nama" => $_POST["nama"],
    "kode_obat" => $_POST["kode_obat"],
    "jumlah" => $_POST["jumlah"],
    "harga" => $_POST["harga"],
    "kategori" => $_POST["kategori"],
    "keterangan" => $_POST["keterangan"],
    "total" => $_POST["harga"]
  ];

  $column_c = "kode_obat";
  $data_c = $_POST["kode_obat"];
  $data = $presets->insert("transaksi", $column /*data array*/, $column_c, $data_c);

  if ($data) {
    echo "Berhasil menambah data";
  }else {
    echo "<script>alert('Gagal menambah data')</script>";
  }

  ?>
</div>


    </div>
  </div>
</div>

<!-- script untuk mengeksekusi form -->
<script>
  $(document).ready(function() {
    total = $(".total");
    total_h = $(".total_h");
    jumlah = $(".jumlah");
    harga = $(".harga");
    transaksi = $(".transaksi");

    jumlah.keyup(function(event) {
      total_d = parseInt(jumlah.val()) * parseInt(harga.val());
      total_h.text("Rp"+total_d);
      total.val(total_d);
    });

    harga.keyup(function(event) {
      total_d = parseInt(jumlah.val()) * parseInt(harga.val());
      total_h.text("Rp"+total_d);
      total.val(total_d);
    });
  });
</script>

<?php include "footer.php"; ?>
