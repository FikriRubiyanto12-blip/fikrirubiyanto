<?php
include_once(__DIR__ . "/lib/Pegawai.php");
include_once(__DIR__ . "/lib/DataFormat.php");
header("Access-Control-Allow-Origin:*");

$pegawai = new Pegawai();
$pegawai->setValue('CEO001','FIKRI','RUBIYANTO','fikrirubiyanto9@gmail.com','085698351283','2019-10-03','10','5.000.000','1.500.000','45','40');
//echo $pegawai->id;
$result=$pegawai->create();

$format= new DataFormat();
//print_r($result);
 echo $format->asJSON($result);
 
 //$data = $pegawai->getAll();