<?php
function sapa ($nama){
    echo "Halo $nama, Apa kabar?".PHP_EOL;
}
echo "Masukkan Nama : ";
$nama = trim(fgets(STDIN));
sapa($nama);

?>