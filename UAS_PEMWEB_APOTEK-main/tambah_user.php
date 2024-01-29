<?php include "header.php";  include 'loginex.php';?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <form class="form-horizontal" action="" method="post">
        <fieldset>
          <legend><h1>Tambah kasir</h1></legend>
          <input type="text" name="nama" class="form-control" placeholder="nama" required>
          <input type="text" name="username" placeholder="username" class="form-control" required>
          <input type="text" name="password" placeholder="password" class="form-control" required>
          <input type="submit" name="submit" value="submit" class="btn btn-primary col-md-6">
          <input type="reset" name="reset" value="reset" class="btn btn-danger col-md-6">
        </fieldset>
        </div>
      </form>
    </div>

    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <?php
        $id = $_POST["nama"];

        $column = [
          "nama" => $_POST["nama"],
          "username" => $_POST["username"],
          "password" => $_POST["password"]
        ];

        $column_c = "nama";
        $data_c = $id;

        $data = $presets->insert("user", $column /*data array*/, $column_c, $data_c);

        if ($data) {
          echo "<div class='bgcolor-green white padding10'>Data berhasil ditambah</div>";
        }else {
          echo "<div class='bgcolor-red white padding10'>Gagal menambah data</div>";
        }
         ?>
      </div>
    </div>
  </div>
</div>

  </body>
</html>


<?php include "footer.php";?>
