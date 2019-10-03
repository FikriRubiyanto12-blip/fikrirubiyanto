<?php
include_once(__DIR__ . "/../lib/Pegawai.php");
include_once(__DIR__ . "/../lib/DataFormat.php");
header("Access-Control-Allow-Origin:*");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
//error_reporting(E_ALL ^ E_NOTICE);

$pegawai = new Pegawai();
$pegawai->setValue($_POST['pegawai_id'],$_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['phone_number'],$_POST['hire_date'],$_POST['job_id'],$_POST['salary'],$_POST['commission_pct'],$_POST['manager_id'],$_POST['department_id']);
$result = $pegawai->create();
$format = new DataFormat();
echo $format->asJSON($result);
