<?php include "header.php";?>


<!-- isi dari list obat akan tampil disini -->
<div class="container">

<div class="row">
  <div class="col-md-8">
    <h1 class="inblock widthauto">List Obat</h1>
  </div>

  <div class="col-md-4">
      <div class="form-group col-xs-3 col-xs-offset-9">
        <form class="limit_f form-horizontal pull-right" method="get">
          <input id="limit" type="number" name="limit" step="5" value="<?php echo $_GET["limit"]; ?>" placeholder="limit" class="form-control limit_i" max="250" required min="5">
      </div>
  </div>
</div>

<!-- data obat yang akan ditampilkan -->
<div class="row">
  <?php include "server.php"; ?>
</div>

<!-- pagination -->
<div class="row">
  <div class="col-md-12">
    <ul class="pagination">
      <li><a class="page-caption"><b>Page::</b></a></li>
      <?php
        $data = $presets->paginationAll("obat");

        if (!isset($_GET["limit"])) {
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

          if($page == $i){
            echo "<li  class=active><a href=?page=$i&limit=$limit>$i</a></li>";
          }else {
            echo "<li><a href=?page=$i&limit=$limit>$i</a></li>";
          }
        }
       ?>
    </ul>
  </div>
</div>

</div>

<!-- scrip javascript -->
<script>
  $(document).ready(function() {
    page_c = $(".page-caption");
    limit_f = $(".limit_f");
    limit_i = $(".limit_i");

    limit_f.submit(function(event) {
      event.preventDefault();
      data_f = limit_i.val();
      window.location.href="<?php echo "?page=$page&limit=";?>"+data_f;
    });
    page_c.css({background:'#333', color:"white"});
  });
</script>
<!-- footer -->
<?php include "footer.php";?>
