<?php
$hari = array("Senin", "Selasa", "Rabu", "Kamis");
$mhs = array("nama" => "Adit", "prodi" => "PTI", "angkatan" => 2014);

//perulangan array
foreach ($hari as $h) {
    echo "$h ";
}

//perulangan array asosiatif
foreach ($mhs as $key => $value) {
    echo "</br> $key = $value";
}
