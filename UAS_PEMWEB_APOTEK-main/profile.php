<?php
include "koneksi.php";

$data = $presets->select("user", "username", $_COOKIE["username"], 0, 1);

foreach ($data as $key => $value) {
  echo <<<EOD
  Id : $value->id <br>
  Nama : $value->nama <br>
  Username : $value->username <br>
EOD;
}
 ?>
