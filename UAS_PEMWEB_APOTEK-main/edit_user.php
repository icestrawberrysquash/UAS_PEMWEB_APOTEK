<?php include "header.php";  include 'loginex.php';?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

<?php
$data = $presets->select("user", "id", $_GET["id"], 0, 10, "asc", true);
foreach ($data as $key => $value) {
  echo <<<EOD

  <form class="" action="" method="post">
  <fieldset>
  <legend><h1>Edit data user</h1></legend>
  <input type="text" name="nama" placeholder="nama" value="$value->nama" class="form-control" required>
  <input type="text" name="username" placeholder="username" value="$value->username" class="form-control" required>
  <input type="text" name="password" placeholder="password" value="$value->password" class="form-control" required>

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
      $id = $_GET["id"];

      $column = [
        "nama" => $_POST["nama"],
        "username" => $_POST["username"],
        "password" => $_POST["password"]
      ];

      $column_c = "id";
      $data = $id;

      $data = $presets->update("user", $column /*data array*/, $column_c, $data);

      if ($data) {
        echo "<div class='bgcolor-green white padding10'>Data berhasil diupdate</div>";
      }else {
        echo "<div class='bg-danger padding10'>Gagal mengupdate data</div>";
      }
       ?>

    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
