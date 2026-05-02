<?php

$mahasiswa = ["King", "Hita", "Samsul", "Suparman", "Dika"];

foreach ($mahasiswa as $index => $nama) {
    echo "mahasiswa ke-" . ($index + 1) . ": $nama" . PHP_EOL;
}

echo "Program selesai.";
?>