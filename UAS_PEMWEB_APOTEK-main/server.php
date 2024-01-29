<?php 
$limit = $_GET["limit"];
$baris = ($_GET["page"] * $limit) - $limit;
$page = $_GET["page"];

if (!isset($limit, $page)) {
  $page = 1;
  $baris = 1;
  $limit = 10;
}
$data = $presets->show("obat","id", $baris,$limit);

// print_r($data);

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



 ?>
