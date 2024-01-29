<?php include "header.php";?>

<div class="container">

  <div class="row">
    <div class="col-md-8">
      <h1 class="inblock widthauto">List Kategori <?php echo "$_GET[kategori]"; ?></h1>
    </div>

    <div class="col-md-4">
        <div class="form-group col-xs-3 col-xs-offset-9">
          <form class="limit_f form-horizontal pull-right" method="get">
            <input id="limit" type="number" name="limit" step="5" value="<?php echo $_GET["limit"]; ?>" placeholder="limit" class="form-control limit_i" max="250" required>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
<?php

$limit = $_GET["limit"];
$kategori = $_GET["kategori"];
$page = $_GET["page"];
$baris = ($page * $limit) - $limit;
$count = $presets->countdata("kategori", "kategori", $kategori);

if (!isset($limit, $page)) {
  $baris = 1;
  $page = 1;
  $limit = 10;
}

$data = $presets->select("obat", "kategori", $kategori, $baris, $limit);

// print_r($data);
if (!$data) {
echo "<div class=bg-danger><h1>Data kategori \"$_GET[kategori]\" Tidak ditemukan</h1></div>";
}
elseif($data && $count > 0){
foreach ($data as $key => $value) {
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

  <!-- pagination -->
  <div class="row">
    <div class="col-md-12">
      <ul class="pagination">
        <li><a class="page-caption"><b>Page::</b></a></li>
        <?php
          $data = $presets->paginationAll("kategori");
          $kategori = $_GET["kategori"];

          if (!isset($_GET["limit"])) {
            $limit = 10;
            $page = 1;
          }else {
            $limit = $_GET["limit"];
            $page = $_GET["page"];
          }
          $jumlah = ceil($data / $limit);

          for ($i=1; $i <= $jumlah; $i++) {

            if($page == $i && $count > 0){
              echo "<li  class=active><a href=?kategori=$kategori&page=$i&limit=$limit>$i</a></li>";
            }elseif($data && $count > 0) {
              echo "<li><a href=?kategori=$kategori&page=$i&limit=$limit>$i</a></li>";
            }
          }
          // echo print_r($data);
         ?>
      </ul>
    </div>
  </div>

</div>




        <script>
          $(document).ready(function() {
            var kategori = $(".kategori");

            kategori.change(function(event) {
              window.location.href = `obat_kategori.php?kategori=${kategori.val()}`;
            });

            // script caption
            page_c = $(".page-caption");
            limit_f = $(".limit_f");
            limit_i = $(".limit_i");

            limit_f.submit(function(event) {
              event.preventDefault();
              data_f = limit_i.val();
              window.location.href="<?php echo "?kategori=$kategori&page=$page&limit=";?>"+data_f;
            });
            page_c.css({background:'#333', color:"white"});
          });
        </script>

<?php include 'footer.php'; ?>
