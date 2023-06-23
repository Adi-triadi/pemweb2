<?php
$Profilearray = [
    "nama"  =>  "Adi" ,
    "kelas" => "TI11"
];

echo $Profilearray["nama"] . "<br>";
echo $Profilearray["kelas"];

echo "----";

$ProfileMultiarray =[
          [
             "nama" => "Adi" ,
             "semester" => "2"
          ], [
             "nama" => "Fauzi" ,
            "semester" => "2"
          ], [
             "nama" => "Paul Pogba" ,
             "semester" => "2"
          ]
    ];
    foreach($ProfileMultiarray as $profile){
        echo $profile['nama'] . "<br>";
        echo $profile['semester'] . "<br>";
    }

