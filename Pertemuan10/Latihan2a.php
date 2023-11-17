<?php


$baris = 15;
$kolom = 5;


echo "<table border='1' cellpadding='3'>";

// Buat loop untuk membuat baris tabel
for ($i = 1; $i <= $baris; $i++) {

    for ($j = 1; $j <= $kolom; $j++) {

       
        echo "<td>Kolom $j</td>";
    }

    // Tambahkan baris baru
    echo "</tr>";
}

// Tutup tabel
echo "</table>";

?>