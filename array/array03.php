<?php

// Array 2 dimensi
$siswa = [
    "nama" => "Dita",
    "kelas" => 11,
    "jurusan" => "PPLG",
    "alamat" => [
        "desa" => "Rejosari",
        "kec" => "Kebonsari",
        "kab" => "Madiun",
    ]
];

echo $siswa["nama"].PHP_EOL;
echo $siswa["jurusan"].PHP_EOL;
echo $siswa["alamat"]["desa"].PHP_EOL;
echo $siswa["alamat"]["kec"].PHP_EOL;
echo $siswa["alamat"]["kab"].PHP_EOL;


?>