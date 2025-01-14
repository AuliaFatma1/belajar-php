<?php
// Membuka/Membuat file
$file = fopen("halo.txt", "w");

// Menulis teks
$teks = "Halo \n";
fwrite ($file, $teks);

$teks = "Saya sedang belajar PHP.";
fwrite ($file, $teks);

fclose($file);
?>