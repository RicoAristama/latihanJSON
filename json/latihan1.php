<?php 

// $mahasiswa = [
// 	[
// 		"nama" => "Rico Aristama",
// 		"nrp" => "173040052",
// 		"email" => "raristama@gmail.com"
// 	],
// 	[
// 		"nama" => "Dina Apriansyah",
// 		"nrp" => "173040040",
// 		"email" => "dapriansyah@gmail.com"
// 	],
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', "root", "");
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data ;

 ?>