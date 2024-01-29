<?php include 'header.php'; ?>
<!-- script php initial data  -->
<?php
$page = $_GET["page"];
$limit = $_GET["limit"];
$query = $_GET["q"];
$data = $presets->search("obat", "nama", $_GET["q"], 0, 10);
$jumlah = $data["total_data"];

if(!isset($page) && $jumlah < 10){
  $limit = $jumlah;
  $page = 1;
}elseif(!isset($page) && $jumlah >= 10){
  $limit = 10;
  $page = 1;
  $limit = 10;
}elseif(isset($page) && $jumlah < 10){
  $limit = $jumlah;
}

$baris = ($page * $limit) - $limit;
$data = $presets->search("obat", "nama", $_GET["q"], $baris, $limit);
 ?>

<div class="container">
  <!-- atas pencarian -->
  <div class="row">
      <!-- judul list kategori -->
      <div class="col-md-8">
        <h1 class="inblock widthauto">List Pencarian <?php echo "\"$_GET[q]\" Sebanyak <i>"; echo $jumlah."</i> Data";?></h1>
      </div>
      <!-- limit hasil pencarian -->
      <div class="col-md-4">
        <div class="form-group col-xs-3 col-xs-offset-9">
          <form class="limit_f form-horizontal pull-right" method="get">
            <input id="limit" type="number" name="limit" step="5" value="<?php echo $_GET["limit"]; ?>" placeholder="limit" class="form-control limit_i" max="250" required min="5">
          </form>
        </div>
      </div>
  </div>

<!--  list hasil pencarian akan tampil disini-->
  <div class="row">
    <div class="col-md-12">
<?php
unset($data["total_data"]);
// echo "<pre>";
// print_r($data);
if (!$data) {
echo "<div class=bg-danger><h1>List pencarian \"$_GET[q]\" Tidak Ditemukan</h1></div>";
}
elseif($data && $jumlah > 0){
foreach ($data as $key => $value) {
$value = $value["data"];
// echo $value->gambar;

echo <<<EOD
<div class="col-md-3 col-xs-12" >
<div class="thumbnail">
<img src="$value->gambar" style="width:300px; height:300px;"/>

<div class="caption">

<table class="table table-bordered table-hover">
<tr><th>Id obat</th><td>$value->id</td></tr>
<tr><th>Nama obat</th><td>$value->nama</td></tr>
<tr><th>Jenis obat</th><td>$value->jenis</td></tr>
<tr><th>Satuan obat</th><td>$value->satuan</td></tr>
<tr><th>Stok</th><td>$value->stok</td></tr>
<tr><th>Kategori</th><td>$value->kategori</td></tr>
<tr><th>Harga</th><td><b>Rp$value->harga</b></td></tr>
<tr><th>Keterangan</th>
<td>
<button type="button" class="btn btn-xs btn-info" data-toggle="collapse" data-target="#obat$value->id"><b>+Lihat</b></button>
</td>
</tr>
</table>
<div class="collapse" id="obat$value->id">$value->keterangan</div>
</div>

</div>
</div>
EOD;
}

}
?>

    </div>
  </div>

<!-- fungsi untuk pagination dan limit -->
<div class="row">
  <div class="">
    <ul class="pagination">
      <li><a class="page-caption"><b>Page::</b></a></li>
      <?php

        if (!isset($_GET["limit"])) {
          $limit = 10;
        }else {
          $limit = $_GET["limit"];
        }
        $jumlah = ceil($jumlah / $limit);

        for ($i=1; $i <= $jumlah; $i++) {

          if($page == $i){
            echo "<li  class=active><a href=?q=$query&page=$i&limit=$limit>$i</a></li>";
          }else {
            echo "<li><a href=?q=$query&page=$i&limit=$limit>$i</a></li>";
          }
        }
       ?>
    </ul>
  </div>
</div>
</div>

<!-- script javascript -->
<script>
  $(document).ready(function() {
    // script caption
    page_c = $(".page-caption");
    limit_f = $(".limit_f");
    limit_i = $(".limit_i");
    page_c.css({background:'#333', color:"white"});

    //script limit
    limit_f.submit(function(event) {
      event.preventDefault();
      data_f = limit_i.val();
      window.location.href="<?php echo "?q=$query&page=$page&limit=";?>"+data_f;
    });

    //script
  });
</script>

<!-- footer -->
<?php  include 'footer.php';?>
