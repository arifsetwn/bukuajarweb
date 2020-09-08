<?php
    $host = "localhost";
    $user = "root";
    $password = "S3t14w4n";
    $db = "nilaiMahasiswa";

    $conn = mysqli_connect($host,$user,$password,$db);
  
    if (mysqli_connect_errno()){
      echo "koneksi gagal". mysqli_connect_error();
  }
