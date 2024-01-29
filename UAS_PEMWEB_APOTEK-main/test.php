<?php 
$pdo = new PDO("mysql:host=localhost;dbname=db_apotek", "root", "");
$query = $pdo->query("select gambar from obat");

while($row = $query->fetch(PDO::FETCH_OBJ))
{
	$data[] = $row;
}

print_r($data);

foreach ($data as $key => $value) {
	$gambar = substr($value->gambar, 6);
	$query = $pdo->query("update obat set gambar='gambar/racun.jpg'");

	if($query):
		endif;
}

?>