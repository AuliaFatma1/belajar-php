<?php
$nama = "Dini"; // variable global

function sapa (){
    $orang = "Sehat "; // variable local
    echo $orang;
}

sapa();
echo $nama;
?>