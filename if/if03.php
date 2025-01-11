<?php
echo "Masukan nama : ";
$nama = trim(fgets(STDIN));
echo "Masukan nilai anda : ";
$nilai = trim(fgets(STDIN));

if($nilai>=80){
    echo "Selamat $nama, Anda Lulus 🤗";
}else{
    echo "Maaf $nama, Anda Belum Lulus 😥";
}
?>