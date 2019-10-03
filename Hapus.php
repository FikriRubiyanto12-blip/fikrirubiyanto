<?php
include_once(__DIR__ . "/lib/Pegawai.php");
include_once(__DIR__ . "/lib/DataFormat.php");
header("Access-Control-Allow-Origin:*");

$pegawai = new Pegawai();
$pegawai->deleteValue('CEO001');
//echo $pegawai->id;
$result=$pegawai->delete();

$format= new DataFormat();
//print_r($result);
 echo $format->asJSON($result);
 
 //$data = $pegawai->getAll();