<?php include "header.php"; include 'loginex.php';?>

<!-- php script untuk mengesekusi clas active dari bootstrap -->
<?php
$action = $_GET["action"];
$page = $_GET["page"];
$limit = $_GET["limit"];
$baris = ($page * $limit) - $limit;
$action_d = ["obat", "user", "transaksi","kategori","laporan"];
$nilai = in_array($_GET["action"], $action_d);

if ($nilai) {
  $class = "active";
}

if(!isset($action)){
  $obat = "active";
}

 ?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs">
            <li><a href="#kelola_obat" data-toggle="tab" data-action="obat" data-filter="#obat_f" data-c="2" class="<?php echo $action == "obat"?$class:"";?> active" data-transaksi-p="#obat_p">Kelola obat</a></li>
            <li><a href="#kelola_user" data-toggle="tab" data-action="user"  data-filter="#user_f" data-c="1" class="<?php echo $action == "user"?$class:"";?>" data-transaksi-p="#user_p">Kelola user</a></li>
            <li><a href="#kelola_transaksi" data-toggle="tab" data-action="transaksi"  data-filter="#transaksi_f" data-c="1" class="<?php echo $action == "transaksi"?$class:"";?>" data-transaksi-p="#transaksi_p">Kelola transaksi</a></li>
            <li><a href="#kelola_kategori" data-toggle="tab" data-action="kategori"  data-filter="#kategori_f" data-c="1" class="<?php echo $action == "kategori"?$class:"";?>" data-transaksi-p="#kategori_p">Kelola kategori</a></li>
            <li><a href="#kelola_laporan" data-toggle="tab" data-action="laporan"   data-filter="#laporan_f" data-c="1" class="<?php echo $action == "laporan"?$class:"";?>"  data-transaksi-p="#laporan_p">Kelola laporan</a></li>
            <!--  untuk sorting -->
            <li class="pull-right">
              <form class="form-inline pull-left">
                 <div class="form-group">
                  <input type="text" name="search" id="filter" class="form-control" placeholder="Filter Baris Table">
                </div>
              </form>
                <form class="limit_f form-inline pull-right" method="get">

                <div class="form-group">
                  <input id="limit" type="number" name="limit" step="5" value="<?php echo $_GET["limit"]; ?>" placeholder="limit" class="form-control limit_i col-md-6" max="250" min="5"required>
                </div>

                <div class="form-group">
                  <button type="button" name="button" class="btn bgcolor-black white fright" id="print">Print</button>
                </div>
              </form>
            </li>
          </ul>
        </div>
      </div>

<!-- contant -->

<div class="row">
  <div class="col-md-12">
    <div class="tab-content">

<!-- content untuk mengelola obat-->
<div class="tab-pane <?php echo $action == "obat"?$class:""; echo $obat;?>" id="kelola_obat">
  <!-- table content -->
  <div class="row">
    <a href="tambah_obat.php" target="_blank">+Tambah Obat</a>
    <div class="col-md-12" id="obat_p">
<?php


$action_d = ["obat", "user", "transaksi","kategori","laporan"];
$nilai = in_array($class, $action_d);

if ($nilai) {
  $class = "active";
}

if (!isset($action)) {
  $action = "obat";
  $page = 1;
  $limit = 10;
  $data = $presets->show("obat", "id", 0, 10);
}elseif ($action == "obat") {
  $data = $presets->show("obat", "id", $baris, $limit);
}else {
  $data = $presets->show("obat", "id", 0, 10);
}

echo <<<EOD

<table class="table table-responsive table-hover table-bordered bgcolor-white" id="obat_f">
<thead>
<tr><th>#ID</th><th>Kode Obat</th> <th>Nama</th> <th>Jenis</th> <th>Satuan</th> <th>Stok</th>
<th>Harga</th> <th>Kategori</th> <th>Link gambar</th> <th>Keterangan</th> <th>Actions</th>
</thead>

<tbody>
EOD;

$a = 0;
foreach ($data as $key => $value) {
echo <<<EOD

<tr>
<td>$value->id</td><td>$value->kode_obat</td><td>$value->nama</td><td>$value->jenis</td><td>$value->satuan</td>
<td>$value->stok</td><td>$value->harga</td><td>$value->kategori</td><td>$value->gambar</td> <td>$value->keterangan</td> <td><a href="edit_obat.php?action=edit&kode_obat=$value->kode_obat&id=$value->id" target="_blank">Edit</a> | <a href="#"class="delete" data-action-d="obat" data-delete="$value->id">Delete</a></td>
</tr>

EOD;
$a++;
}
echo "</tbody></table>";


?>
  </div>
</div>

<!--  paging untuk mengelola obat -->
<div class="row">
  <div class="col-md-12">
    <!-- pagging untuk kelola obat -->
    <ul class="pagination padding5">
      <li><a class="page-caption"><b>Page::</b></a></li>
      <?php
      $data = $presets->paginationAll("obat");
      $action = $_GET["action"];

      $limit = $_GET["limit"];
      $page = $_GET["page"];
      $baris = $page * $limit;

      if (!isset($action)) {
        $page = 1;
        $limit = 10;
        $action = "obat";
      }

      $jumlah = ceil($data / $limit);
      $page = $_GET["page"];

      if(!isset($page)){
        $page=1;
      }
      for ($i=1; $i <= $jumlah; $i++) {

        if($page == $i && $action == "obat"){
          echo "<li  class=active><a href=?action=obat&page=$i&limit=$limit>$i</a></li>";
        }else {
          echo "<li><a href=?action=obat&page=$i&limit=$limit>$i</a></li>";
        }
      }
      ?>
    </ul>
  </div>
</div>
</div>
<!-- div penutup content mengelola obat -->

<!-- content untuk mengelola user -->
<div class="tab-pane <?php echo $action == "user"?$class:"";?>" id="kelola_user">
  <div class="row">
    <a href="tambah_user.php" target="_blank">+Tambah user</a> <br>
    <div class="col-md-12" id="user_p">
<?php

$baris = ($page * $limit) - $limit;
if (!isset($action)) {
  $action = "user";
  $data = $presets->show("user", "id", $baris, $limit);
}elseif ($action == "user") {
  $data = $presets->show("user", "id", $baris, $limit);
}else {
  $data = $presets->show("user", "id", 0, 10);
}

echo <<<EOD
<table class="table table-responsive table-hover table-bordered bgcolor-white" id="user_f">
<thead> <tr><th>#ID</th><th>Nama</th> <th>Username</th> <th>Password</th> <th>Action</th></thead>

<tbody>

EOD;
$a = 0;
foreach ($data as $key => $value) {
echo <<<EOD

<tr>
<td>$value->id</td><td>$value->nama</td><td>$value->username</td><td>$value->password</td><td><a href="edit_user.php?action=edit&id=$value->id" target="_blank">Edit</a> | <a href="#"class="delete" data-action-d="user" data-delete="$value->id">Delete</a></td>
</tr>

EOD;
$a++;
}

echo "</tbody></table>";
?>
    </div>
  </div>

<!-- paging untuk kelola user -->
<div class="row">
    <div class="col-md-12">
      <ul class="pagination padding5">
        <li><a class="page-caption"><b>Page::</b></a></li>
        <?php
        $data = $presets->paginationAll("user");
        $action = $_GET["action"];

        if (!isset($action)) {
          $action = "user";
          $limit = 10;
        }else {
          $limit = $_GET["limit"];
        }
        $jumlah = ceil($data / $limit);
        $page = $_GET["page"];

        if(!isset($page)){
          $page=1;
        }
        for ($i=1; $i <= $jumlah; $i++) {

          if($page == $i && $action == "user"){
            echo "<li  class=active><a href=?action=user&page=$i&limit=$limit>$i</a></li>";
          }else {
            echo "<li><a href=?action=user&page=$i&limit=$limit>$i</a></li>";
          }
        }
        ?>
      </ul>

    </div>
  </div>
</div>
<!-- div penutup kelola user -->

<!-- kelola transaksi -->
    <div class="tab-pane  <?php echo $action == "transaksi"?$class:"";?>" id="kelola_transaksi">
      <div class="row">
        <a href='tambah_transaksi.php' target='_blank'>+Tambah transaksi</a><br>
        <div class="col-md-12" id="transaksi_p">
<?php
if (!isset($action)) {
  $action = "transaksi";
  $page = 1;
  $limit = 10;
  $data = $presets->show("transaksi", "id", 0, 10);
}elseif ($action == "transaksi") {
  $data = $presets->show("transaksi", "id", $baris, $limit);
}else {
  $data = $presets->show("transaksi", "id", 0, 10);
}

echo "
<table class='table table-bordered table-responsive bgcolor-white' id='transaksi_f'>
<thead>
<tr>
<th>#ID</th> <th>Nama</th>  <th>Kode obat</th>  <th>Jumlah</th>
<th>Harga</th> <th>Kategori</th>  <th>Keterangan</th>  <th>Total</th> <th>Action</th>
</tr>
</thead>
<tbody>
";

$a = 0;

foreach ($data as $key => $value) {
echo <<<EOD
<tr>
<td>$value->id</td> <td>$value->nama</td> <td>$value->kode_obat</td>  <td>$value->jumlah</td>
<td>$value->harga</td> <td>$value->kategori</td>  <td>$value->keterangan</td>  <td>$value->total</td>
<td><a href="edit_transaksi.php?action=edit&id=$value->id" target="_blank">Edit</a> | <a href=""class="delete" data-action-d="transaksi" data-delete="$value->id">Delete</a></td>
EOD;
$a++;
}

echo
"</tbody>
</table>";
?>

    </div>
  </div>

<!-- paging untuk kelola transaksi -->
<div class="row">
    <div class="col-md-12">
      <ul class="pagination padding5">
        <li><a class="page-caption"><b>Page::</b></a></li>
        <?php
        $data = $presets->paginationAll("transaksi");
        $action = $_GET["action"];

        if (!isset($action)) {
          $action = "transaksi";
          $limit = 10;
        }else {
          $limit = $_GET["limit"];
        }
        $jumlah = ceil($data / $limit);
        $page = $_GET["page"];

        if(!isset($page)){
          $page=1;
        }
        for ($i=1; $i <= $jumlah; $i++) {

          if($page == $i && $action == "transaksi"){
            echo "<li  class=active><a href=?action=transaksi&page=$i&limit=$limit>$i</a></li>";
          }else {
            echo "<li><a href=?action=transaksi&page=$i&limit=$limit>$i</a></li>";
          }
        }
        ?>
      </ul>

    </div>
  </div>
</div>
<!-- div penutup kelola transaksi -->

<!-- kelola kategori -->
<div class="tab-pane <?php echo $active; echo $action == "kategori"?$class:"";?>" id="kelola_kategori">
  <div class="row">
    <a href='tambah_kategori.php' target='_blank'>+Tambah kategori</a><br>
    <div class="col-md-12" id="kategori_p">
<?php
if (!isset($action)) {
  $action = "kategori";
  $page = 1;
  $limit = 10;
  $data = $presets->show("kategori", "id", $baris, $limit);
}elseif ($action == "kategori") {
  $data = $presets->show("kategori", "id", $baris, $limit);
}else {
  $data = $presets->show("kategori", "id", 0, 10);
}
// print_r($data);

echo "
<table class='table table-bordered table-responsive table-hover bgcolor-white' id='kategori_f'>
<thead>
<tr>
<th>#ID</th>  <th>Kategori</th>  <th>Keterangan</th>  <th>Gambar</th>
<th>Action</th>
</tr>
</thead>
<tbody>
";

$a = 0;

foreach ($data as $key => $value) {
echo <<<EOD
<tr>
<td>$value->id</td> <td>$value->kategori</td> <td>$value->keterangan</td>  <td>$value->gambar</td>
<td><a href="edit_kategori.php?action=edit&id=$value->id" target="_blank">Edit</a> | <a href="" class="delete" data-action-d="kategori" data-delete="$value->id">Delete</a></td>
</tr>
EOD;
$a++;
}

echo
"</tbody>
</table>";
?>
    </div>
  </div>

<!-- paging untuk kelola kategori -->
<div class="row">
  <div class="col-md-12">
    <ul class="pagination padding5">
      <li><a class="page-caption"><b>Page::</b></a></li>
      <?php
      $data = $presets->paginationAll("kategori");
      $action = $_GET["action"];

      if (!isset($action)) {
        $action = "kategori";
        $limit = 10;
      }else {
        $limit = $_GET["limit"];
      }
      $jumlah = ceil($data / $limit);
      $page = $_GET["page"];

      if(!isset($page)){
        $page=1;
      }
      for ($i=1; $i <= $jumlah; $i++) {

        if($page == $i && $action == "kategori"){
          echo "<li  class=active><a href=?action=kategori&page=$i&limit=$limit>$i</a></li>";
        }else {
          echo "<li><a href=?action=kategori&page=$i&limit=$limit>$i</a></li>";
        }
      }
      ?>
    </ul>

  </div>
</div>
</div>
<!-- div penutup kelola kategori -->

<!-- kelola laporan -->

<div class="tab-pane <?php echo $action == "laporan"?$class:"";?>" id="kelola_laporan">
  <div class="row">
    <div class="col-md-12" id="laporan_p">
<?php
if (!isset($action)) {
  $action = "laporan";
  $page = 1;
  $limit = 10;
  $data = $presets->show("laporan", "id", $baris, $limit);
}elseif ($action == "laporan") {
  $data = $presets->show("laporan", "id", $baris, $limit);
}else {
  $data = $presets->show("laporan", "id", 0, 10);
}

echo "
<table class='table table-responsive table-bordered table-hover bgcolor-white' id='laporan_f'>
<thead>
<tr>
<th>#ID</th><th>Tanggal</th>  <th>Total jenis</th>  <th>Total</th>
<th>Uang</th><th>Action</th>
</tr>
</thead>
<tbody>
";

$a = 0;

foreach ($data as $key => $value) {
echo <<<EOD
<tr>
<td>$value->id</td> <td>$value->tanggal</td> <td>$value->total_jenis</td>  <td>$value->total</td>
<td>$value->uang</td>
<td><a href="edit_laporan.php?action=edit&id=$value->id" target="_blank">Edit</a> | <a href="" class="delete" data-action-d="laporan" data-delete="$value->id">Delete</a></td>
EOD;
$a++;
}

echo
"</tbody>
</table>";
?>
    </div>
  </div>

<!-- paging untuk kelola laporan -->
<div class="row">
    <div class="col-md-12">
      <ul class="pagination padding5">
        <li><a class="page-caption"><b>Page::</b></a></li>
        <?php
        $data = $presets->paginationAll("transaksi");
        $action = $_GET["action"];

        if (!isset($_GET["limit"])) {
          $action = "laporan";
          $limit = 10;
        }else {
          $limit = $_GET["limit"];
        }
        $jumlah = ceil($data / $limit);
        $page = $_GET["page"];

        if(!isset($page)){
          $page=1;
        }
        for ($i=1; $i <= $jumlah; $i++) {

          if($page == $i && $action == "laporan"){
            echo "<li  class=active><a href=?action=laporan&page=$i&limit=$limit>$i</a></li>";
          }else {
            echo "<li><a href=?action=laporan&page=$i&limit=$limit>$i</a></li>";
          }
        }
        ?>
      </ul>

    </div>
  </div>
</div>
<!-- div penutup kelola laporan -->


   </div>
  </div>
</div>
<!-- div untuk menutup content -->

</div>
<!-- div untuk menutup container -->

<!-- script untuk mengeksekusi action table -->
<script>
$(document).ready(function() {
  url_delete = $("a.delete");
  limit_f = $(".limit_f");
  data_d = $("a[data-action]");
  data_ac = $("a[data-action-d]");
  page_c = $(".page-caption");
  limit_i = $(".limit_i");
  data_a = "transaksi";
  data_fi = "#obat_f";
  data_f = "10";
  data_c = "2";
  transaksi_p = "#obat_p";

  data_d.click(function(event) {
    data_a = $(this).attr('data-action');
    transaksi_p = $(this).attr("data-transaksi-p");
    data_fi = $(this).attr('data-filter');
    data_c = $(this).attr('data-c');
    // console.log(data_f + data_c);
  });

  limit_f.submit(function(event) {
    event.preventDefault();
    data_f = limit_i.val();
    window.location.href="<?php echo "?action=";?>"+data_a+"<?php echo "&page=1&limit=";?>"+data_f;
  });

  url_delete.click(function(event) {
    event.preventDefault();
    var This = $(this);
    var nilai = confirm("Apakah anda yakin akan menghapus data "+This.attr("data-delete"));
    if (nilai) {
      window.location.href = "/admin.php?action="+This.attr("data-action-d")+"&delete="+This.attr("data-action-d")+"&id="+This.attr('data-delete')+"<?php echo "&limit=$limit&page=$page";?>";
    }
  });

  // script untuk merubah warna paging
  page_c.css({background:'#333', color:"white"});

  // untuk melakukan print
  $('#print').click(function(){
    var url='data:application/vnd.ms-excel,' + encodeURIComponent($(transaksi_p).html())
    location.href=url
  });

  //script untuk melakukan filter nama obat
  filter = $("#filter");

  filter.keyup(function(event) {
    data_ta = $(`${data_fi} tbody tr`);
    for (var i = 0; i < data_ta.length; i++) {
      data_tt = data_ta.eq(i).children('td');
      data_text = data_tt.eq(data_c).text().toUpperCase();

      filter_t = $(this).val().toUpperCase();
      nilai = data_text.indexOf(filter_t);

      if (nilai > -1) {
        data_ta.eq(i).show();
      }else {
        data_ta.eq(i).hide();
      }

    }
  });

});
</script>
<!-- end script -->

<!-- script php tambahan untuk delete data -->
<?php
if (isset($_GET["delete"])) {
  $data = $presets->delete($_GET["delete"], "id", $_GET["id"]);

  if ($data) {
    echo "<script>alert('berhasil menghapus data');</script>";
  }
}
 ?>
<?php include 'footer.php'; ?>
<!-- end script -->
<?php
// print_r($_SERVER);

 ?>
