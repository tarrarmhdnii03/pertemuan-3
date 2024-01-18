<?php

$program ="<h3>=== Program Biodata Saya ===<br/></h3>";
echo "$program";

$namaLengkap = "Oktavia R";
$kelas = "X RPL 2";
$umur = "16 Tahun";
$tempat_tanggalLahir = "Tanggerang ,03 October 2008";
$no = "0858 1748 7634";
$alamat = "GG KingKit 11 no 4";


function biodata( ){
    global $namaLengkap, $umur, $kelas, $tempat_tanggalLahir, $no, $alamat;
    echo "Nama Lengkap = $namaLengkap <br/>";
    echo "Umur = $umur <br/>";
    echo "Kelas = $kelas <br/>";
      echo "Tempat/Tanggal lahir = $tempat_tanggalLahir <br/>";
      echo "No WhatsApp = $no <br/>";
      echo "Alamat = $alamat <br/>";
}

echo biodata();

?>