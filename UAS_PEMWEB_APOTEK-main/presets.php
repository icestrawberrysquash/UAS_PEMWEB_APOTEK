<?php
class presets
{
  public $data;
  //fungsi construct untuk inital data
  function __construct($dbname, $dbuser, $dbpass){
    $this->dbname = $dbname; $this->dbuser = $dbuser; $this->dbpass = $dbpass;
  }

  //fungsi untuk koneksi dan database
  function koneksi(){
    try {
      $this->pdo = new PDO("mysql:host=localhost;dbname=$this->dbname", $this->dbuser, $this->dbpass);
      return $this->pdo;
    } catch (PDOException $e) {
      //echo "terjadi kesalahan yaitu : {$e->getMessage()}";
    }
  }

  // fungsi untuk cek data ada atau tidak
  function exist($table, $column, $data, $integer = false){

    if ($integer) {
      $this->query = $this->koneksi()->query("select * from $table where $column=$data");
    }else {
      $this->query = $this->koneksi()->query("select * from $table where $column='$data'");
    }

    if($this->query){
      return $this->query->rowCount();
    }
  }

  //fungsi untuk cek data login
  function login($table, $column1, $column2, $data1, $data2){

    $this->query = $this->koneksi()->query("select * from $table where $column1='$data1' AND $column2='$data2'");

    if ($this->query) {
      return $this->query->rowcount();
    }
  }

  //fungsi untuk error reporting
  function errorrep($code){
    error_reporting($code);
  }

  //fungsi untuk select semua data dengan limit dan kondisi where
  function select($table, $column, $data, $mulai, $batas, $sort = "ASC", $integer = false){
    if($integer){
      $this->sql = "select * from $table where $column=$data ORDER BY $column $sort LIMIT $mulai,$batas";
    }else {
      $this->sql = "select * from $table where $column='$data' ORDER BY $column $sort LIMIT $mulai,$batas";
    }

    $this->query = $this->koneksi()->query($this->sql);

    if($this->query){
      while ($this->row = $this->query->fetch(PDO::FETCH_OBJ)) {
        $this->data[] = $this->row;
      }

      return $this->data;
    }
  }

//fungsi untuk show semua data
function show($table, $column, $mulai, $batas, $sort = "ASC"){
  unset($this->data);
  $this->sql = "select * from $table ORDER BY $column $sort LIMIT $mulai,$batas";
  $this->query = $this->koneksi()->query($this->sql);

  if ($this->query) {
    while($this->row = $this->query->fetch(PDO::FETCH_OBJ)){
      $this->data[] = $this->row;
    }
    return $this->data;
  }
}

//fungsi untuk show berdasarkan column saja dengan kodisi where
function column($table, $column_o, $column /*adalah data text dengan separator koma*/, $mulai, $batas, $column_c, $data, $sort="asc"){
  $this->sql = "select $column from $table where $column_c='$data' ORDER BY $column_o $sort LIMIT $mulai,$batas";
  $this->query = $this->koneksi()->query($this->sql);

  if ($this->query) {
    while($this->row = $this->query->fetch(PDO::FETCH_OBJ)){
      $this->data[] = $this->row;
    }
    return $this->data;
  }
}

//fungsi untuk show semua colom tanpa where
function columnAll($table, $column_o, $column, $mulai, $batas, $sort = "asc"){
$this->sql = "select $column from $table ORDER BY $column_o $sort LIMIT $mulai,$batas";
$this->query = $this->koneksi()->query($this->sql);

if ($this->query) {
  while($this->row = $this->query->fetch(PDO::FETCH_OBJ)){
    $this->data[] = $this->row;
  }
  return $this->data;
}
}

  //fungsi untuk update dari database
  function update($table, $column /*data array*/, $column_c, $data){

    foreach($column as $key => $value){
      $this->sql = "update $table set $key='$value' where $column_c='$data'";
      $this->query = $this->koneksi()->query($this->sql);
      if(!$this->query){return false; die();}
    }
    return true;
  }

  //fungsi untuk insert data baru
function insert($table, $column /*data array*/, $column_c, $data){
    $this->sql = "insert into $table($column_c) values('$data')";
    $this->query = $this->koneksi()->query($this->sql);

    if ($this->query) {
      foreach ($column as $key => $value) {
        $this->sql = "update $table set $key='$value' where $column_c='$data'";
        $this->query = $this->koneksi()->query($this->sql);
        if(!$this->query){
          return false; die();
        }
      }
    }
    return true;
  }

  //fungsi untuk delete semua data
  function delete($table, $column, $data){
    $this->sql = "delete from $table where $column='$data'";
    $this->query = $this->koneksi()->query($this->sql);

    if ($this->query) {
      return true;
    }else {
      return false;
    }
  }

//fungsi untuk mencari data (algoritma kata termirip)
  function search($table, $column, $data, $mulai, $batas, $sort = "asc"){
    unset($this->data_z);
    $this->sql = "select * from $table ORDER BY $column $sort";
    $this->query = $this->koneksi()->query($this->sql);

    if($this->query){
      while($this->row = $this->query->fetch(PDO::FETCH_OBJ)){
        $this->data[] = $this->row;
      }
    }

    $this->data_o = [];
    $this->data_n = explode(" ", $data);
    $this->count = 0;
    $this->index = 0;

    for ($a=0; $a < count($this->data); $a++) {
      for ($b=0; $b < count($this->data_n); $b++) {
        $this->nilai = preg_match("/{$this->data_n[$b]}/i", $this->data[$a]->$column);
        if ($this->nilai) {
          $this->count += 1;
        }
      }

      if ($this->count > 0) {
        $this->data_o[$this->index] = ["count" => $this->count, "data" => $this->data[$a]];
        $this->index++;
      }
      $this->count = 0;
    }

    //fungsi untuk sorting data berdasarkan count
    for ($d=0; $d < count($this->data_o); $d++) {

      for($e=$d+1; $e < count($this->data_o); $e++){
        if(strtolower($sort) == "asc"){
          $this->nilai = $this->data_o[$d]["count"] > $this->data_o[$e]["count"];
        }else {
          $this->nilai = $this->data_o[$d]["count"] < $this->data_o[$e]["count"];
        }

        if($this->nilai){
          $this->temp = $this->data_o[$d];
          $this->data_o[$d] = $this->data_o[$e];
          $this->data_o[$e] = $this->temp;
        }
      }

    }

    //fungsi untuk menampilkan data pencarian dengan limit
    for ($i=$mulai; $i < $mulai + $batas; $i++) {
      $this->data_z[] = $this->data_o[$i];
    }
      $this->data_z["total_data"] = count($this->data_o);

      return $this->data_z;
  }

//fungsi untuk pagination
function pagination($table){

}

//function pagination semua data
function paginationAll($table){
  unset($this->data);
  $this->sql = "select * from $table";
  $this->query = $this->koneksi()->query($this->sql);

  if ($this->query) {
    $this->data = $this->query->rowCount();
    return $this->data;
  }else {
    return "Gagal mengambil jumlah pagination";
  }
}

//function untuk menghitung jumlah data berdasarkan kata
function countdata($table, $column, $data, $integer = false){
  $data = explode( " ", $data);
  $data = $data[0];



  $this->sql = "select * from $table where $column='$data'";

  if ($integer) {
    $this->sql = "select * from $table where $column=$data";
  }

  $this->query = $this->koneksi()->query($this->sql);

  if ($this->query) {
    return $this->query->rowCount();
  }else {
    return "Gagal mengambil jumlah data";
  }
}

// fungsi untuk logout dari situs
function logout($var1, $redirect, $var2 = false, $var3 = false){
  unset($var1, $var2, $var3);

  header("Location: $redirect");
}

//fungsi untuk cek apakah user sudah login
function loginCek($var1, $var2 = false, $var3 = false){
if(isset($var1, $var2, $var3)){
  return true;
}else {
  return false;
}

}

//fungsi untuk
}

 ?>
