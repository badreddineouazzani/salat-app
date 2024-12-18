<?php
$city= "fez";
$country = "morocco";
$date="today";
$url="https://api.aladhan.com/v1/timingsByCity/$date?city=$city&country=$country";
$response=file_get_contents($url);
$data=json_decode($response,false);

$fajr=$data->data->timings->Fajr;
$dhuhr=$data->data->timings->Dhuhr;
$Asr=$data->data->timings->Asr;
$Maghrib=$data->data->timings->Maghrib;
$Isha=$data->data->timings->Isha;

echo json_encode([
    "fajr" => $fajr,
    "dhuhr" => $dhuhr,
    "asr" => $Asr,
    "maghrib" => $Maghrib,
    "isha" => $Isha
]);


?>