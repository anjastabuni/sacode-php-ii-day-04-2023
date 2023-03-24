<?php

#echo "Proses Tambah";

$nama_lengkap = $_GET["nama_lengkap"];
$alamat_email = $_GET["alamat_email"];

// menampilkan Nama lengkap
echo "<b>Nama Lengkap : </b> <br>";
echo $nama_lengkap;
echo "<br><br>";

// menampilkan nama email
echo "<b>Alamat Email : </b> <br>";
echo $alamat_email;