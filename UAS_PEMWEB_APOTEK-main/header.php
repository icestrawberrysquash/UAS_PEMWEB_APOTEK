<?php include "koneksi.php"; $presets->errorrep(0); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php include "title.php"; ?></title>
    <script src="jquery.js" charset="utf-8"></script>
    <script src="presets.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="presets.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  </head>
  <body class="bgcolor-default">


    <div class="container margin-topbot10">
      <div class="row">
        <div class="col-md-6">
          <div class="left"><a href="/"><div class="glyphicon glyphicon-home btn-lg"></div><h3 class="inblock">My Site</h3></a></div>
        </div>
        <div class="col-md-6">
          <div class="right">
            <ul class="nav nav-pills pull-right">

              <!--  form pencarian data-->
              <li>
                <form action="cari.php" method="get">
                  <input type="search" name="q" placeholder="Cari data obat..." class="form-control" required>
                </form>
              </li>
              <li>
                <?php if($presets->loginCek($_COOKIE["username"], $_COOKIE["password"], $_COOKIE["session"]) && $_COOKIE["session"] == "kasir"){echo '<a href="logout.php">Logout Kasir</a>';}else {
                echo '<a href="login.php">Login Kasir</a>';
              }  ?>
            </li>
              <li>
                <?php if($presets->loginCek($_COOKIE["username"], $_COOKIE["password"], $_COOKIE["session"]) && $_COOKIE["session"] == "admin"){echo '<a href="logout.php">Logout Admin</a>';}else {
                echo '<a href="loginadmin.php">Login Admin</a>';
              }  ?>
              </li>

              <!-- dropdown kategori -->
              <li>
              <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Kategori <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="obat_kategori.php?kategori=Obat bebas">Obat bebas</a></li>
                  <li><a href="obat_kategori.php?kategori=Obat terbatas">Obat terbatas</a></li>
                  <li><a href="obat_kategori.php?kategori=Obat keras">obat keras</a></li>
                  <li><a href="obat_kategori.php?kategori=Narkotika">Obat narkotika</a></li>
                </ul>
              </div>
            </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
