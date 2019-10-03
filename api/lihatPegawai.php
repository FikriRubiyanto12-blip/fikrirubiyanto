<?php
include_once(__DIR__ . "/../lib/Pegawai.php");
include_once(__DIR__ . "/../lib/DataFormat.php");
header("Access-Control-Allow-Origin:*");
error_reporting(E_ALL ^ E_NOTICE);

$pegawai = new Pegawai();

if(isset($_GET['id'])){
    $data=$pegawai->lihatPegawai($_GET['id']);
} else {
    $data=$pegawai->getAll();
}
$format = new DataFormat();

if ($_GET['view']=='xml'){
	
	header("Content-Type: application/xml; charset=utf-8");
	echo $format->asXML($data,'Pegawai');
} else if ($_GET['view']=='json'){
	header("Content-Type: application/json");
	echo $format->asJSON($data);
} else {
	echo $format->asHTML($data);
}