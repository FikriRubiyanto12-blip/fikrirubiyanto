<?php
include_once(__DIR__ . "/../lib/Pegawai.php");
include_once(__DIR__ . "/../lib/DataFormat.php");
header("Access-Control-Allow-Origin:*");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
//error_reporting(E_ALL ^ E_NOTICE);

$pegawai = new Pegawai();
$pegawai->deleteValue($_DELETE['pegawai_id']);
$result = $pegawai->delete();
$format = new DataFormat();
echo $format->asJSON($result);