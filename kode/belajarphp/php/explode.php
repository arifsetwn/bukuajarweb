<?php
$kalimat = "Selamat Datang di UMS";
echo $kalimat;

//menggunakan fungsi strlen
echo "</br>Jumlah huruf adalah : " . strlen($kalimat);

//menggunakan fungsi str_word_count
echo "</br> Jumlah kata adalah : " . str_word_count($kalimat);

//menggunakan fungsi explode
$kata = explode(" ", $kalimat);
echo "</br>Array dengan indeks 1 adalah = " . $kata[1];
