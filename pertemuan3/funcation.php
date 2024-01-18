<?php

// built in function
// fungsi yang sudah disediakan oleh php
// echo "hello world"

// date_default_timezone_set(asia/jakarta);
// $tanggal = date ("d-m-y");
// $waktu = date("h:i:s")

// echo "di jakarta hari ini tanggal :$tanggal <br />
// jam di jakrta :$waktu";

// user defined fuction
// fungsi yang kita buat sendiri

// function namaSaya($nama, $umur){
//     // $namaLengkap = "nama saya adalah $nama";
//     $umurSaya = "umur saya adalah : $umur";
//     return $umurSaya;
// }
// // echo namaSaya("Oktavia R",16);
// funcation jumlahDuaBilangan($a, $b){
//     $total = $a + $b;
//     return $total;
// }

//echo namaSaya("Oktavia R", 16);
//echo jumblahDuaBilangan(5, 3);
//}

// $a = 10;
// function nilaiSaya(){
//     global $a;
//     echo $a;
// }
// echo nilaiSaya ();


function Angkot($noBuku, $kondisiTerminasi, $kondisiTerminasi1, $kondisiTerminasi2){
    for($noAngkot; $noAngkot <= $kondisiTerminasi; $noAngkot++){
        if($noAngkot <= $kondisiTerminasi1){
            echo "Angkot no - $noAngkot tersedia <br/>";
        }else if($noAngkot <= $kondisiTerminasi2){
            echo "Angkot no - $noAngkot sedang diperbaiki <br/>";
        }else{
            echo "Angkot No - $noAngkot tidak tersedia <br/>";
        }
    }    
}

 echo pengulanganBuku(1, 13, 15, 20);

?>