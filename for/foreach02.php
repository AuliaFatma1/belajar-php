<?php
// Foreach Array 2 dimensi
$siswa =[
    "siswa1" => [
        "nama" => "Aulia",
        "kelas" => 11
    ],
    "siswa2"=>[
        "nama"=> "Fatma",
        "kelas"=> 12
    ]
    ];

foreach($siswa as $murid => $san3){
    echo strtoupper($murid).PHP_EOL;
    foreach($san3 as $data => $isi){
        echo ucwords($data)." : ".$isi . PHP_EOL;
    }
}
?>