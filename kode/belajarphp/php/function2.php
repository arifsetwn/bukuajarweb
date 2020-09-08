<?php
function hello($nama)
{
    echo "<h1>Selamat Datang $nama</h1>";
}

hello("Zidane"); //pemanggilan funcion
?>
<em>Kita dapat menggunakan kembali function hello() dengan argumen yang berbeda</em>
<?php
hello("Mourinho");
?>