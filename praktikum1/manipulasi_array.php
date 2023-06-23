<?php
$arrayBuah = ["Jeruk","Mangga","Pisang","Apel"];

//mengurutkan nilai suatu array
sort($arrayBuah);

//menghapus nilai array yang paling akhir
array_pop($arrayBuah);

//menghapus keseluruhan isi variabel
//bisa juga menghapus spesifik nilai array tertentu
unset($arrayBuah[1]);

//untuk menambahkan nilai array di paling belakang 
array_push($arrayBuah, "durian");

//menghapus nilai array yang paling depan/awal
array_shift($arrayBuah);

//menambahkan nilai array di paling depan 
array_unshift($arrayBuah, "semangka");

//mengubah spesifik nilai array tertentu
$arrayBuah[0] = "Manggis";
foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}