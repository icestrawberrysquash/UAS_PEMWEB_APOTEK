
<?php include "header.php"; include "cekcookie.php"; include_once 'koneksi.php'; $presets->errorrep(0);?>
<?php
include "loginex.php";
$page = $_GET["page"];
$limit = $_GET["limit"];
$baris = ($page * $limit) - $limit;
$active = "active";
$action = $_GET["action"];
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-tabs">
        <li><a href="#transaksi" class="active <?php echo $action == "transaksi"?$active:""; ?>"  data-filter="#transaksi_f" data-c="1" data-toggle="tab" data-action="transaksi" data-transaksi-p="#transaksi_p">Data transaksi</a></li>
        <li><a href="#laporan"  data-toggle="tab" data-action="laporan" class="<?php echo $action == "laporan"?$active:""; ?>" data-filter="#laporan_f" data-c="1" data-transaksi-p="#laporan_p">Laporan</a></li>
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

      <!-- isi dari tabs -->
      <div class="tab-content">

<!-- khusus untuk transaksi -->
<div class="tab-pane <?php echo $action == "transaksi"?$active:""; ?> bgcolor-white active" id="transaksi" data-action="transaksi">

<div class="row">
  <div class="col-md-12" id="transaksi_p">
    <table class="table table-bordered table-hover bgcolor-white" id="transaksi_f">
      <tr><th>#Id</th> <th>Nama</th> <th>Kode obat</th> <th>Jumlah</th> <th>Harga</th> <th>Kategori</th> <th>Keterangan</th> <th>Total</th></tr>
      <?php
      if(!isset($_GET["page"])){
        $page = 1;
        $data_t = $presets->show("transaksi", "id", 0, 10);
      }

      if($_GET["action"] == "transaksi"){
        $data_t = $presets->show("transaksi", "id", $baris, $limit);
      }else {
        $data_t = $presets->show("transaksi", "id", 0, 10);
      }

      for ($i=0; $i < count($data_t); $i++) {
        $value = $data_t[$i];
        echo"<tr><td>$value->id</td><td>$value->nama</td><td>$value->kode_obat</td><td>$value->jumlah</td><td>$value->harga</td><td>$value->kategori</td> <td>$value->keterangan</td> <td>$value->total</td></tr>";}


        ?>

      </table>
  </div>

<!-- paging untuk transaksi -->
  <div class="col-md-12">
    <ul class="pagination padding5">
      <li><a class="page-caption"><b>Page::</b></a></li>
      <?php
      $data = $presets->paginationAll("transaksi");
      $action = $_GET["action"];

      if (!isset($_GET["limit"], $action)) {
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

<!-- pagination transaksi -->
</div>

<!-- khusus untuk laporan -->
<div class="tab-pane <?php echo $action == "laporan"?$active:""; ?>" id="laporan" data-action="laporan">
  <div class="row">
    <div class="col-md-12" id="laporan_p">
<table class="table table-hover table-bordered bgcolor-white" id="laporan_f">
<tr><th>#Id</th><th>Tanggal</th><th>Total jenis</th> <th>Total</th><th>Uang</th></tr>
<?php

if($_GET["action"] == "laporan"){
$page = $_GET["page"];
$limit = $_GET["limit"];
$baris = $page * $limit;
$data = $presets->show("laporan", "id", $baris, $limit);
}else {
$data = $presets->show("laporan", "id", 0, 10);
}

foreach ($data as $key => $value) {
echo <<<EOD
<tr><td>$value->id</td><td>$value->tanggal</td><td>$value->total_jenis</td><td>$value->total</td><td>$value->uang</td></tr>
EOD;
}
?>
</table>

    </div>
  </div>

<!-- pagination untuk laporan -->
  <div class="row">
      <div class="col-md-12">
        <ul class="pagination padding5">
          <li><a class="page-caption"><b>Page::</b></a></li>
          <?php
          $data = $presets->paginationAll("laporan");
          $action = $_GET["action"];

          if (!isset($_GET["limit"], $action)) {
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
<!--  -->
      </div>
    </div>
  </div>


</div>

<!-- script php tambahan -->
<?php
if (!isset($_GET["page"])) {
  $page = 1;
}
 ?>

<!-- scrip javascript -->
<script>
  $(document).ready(function() {
    page_c = $(".page-caption");
    limit_f = $(".limit_f");
    limit_i = $(".limit_i");
    data_d = $("a[data-action]");
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
    });

    limit_f.submit(function(event) {
      event.preventDefault();
      data_f = limit_i.val();
      window.location.href="<?php echo "?action=";?>"+data_a+"<?php echo "&page=$page&limit=";?>"+data_f;
    });
    page_c.css({background:'#333', color:"white"});

    // untuk melakukan print
    $('#print').click(function(){
      var url='data:application/vnd.ms-excel,' + encodeURIComponent($(transaksi_p).html())
      location.href=url
    })

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

<?php include "footer.php"; ?>
