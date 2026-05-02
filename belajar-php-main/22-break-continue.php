<?php

$number = 1;

while ($number <= 10) {

    // Lewati angka 5
    if ($number == 5) {
        $number++;
        continue;
    }

    // Hentikan saat angka 9
    if ($number == 9) {
        break;
    }

    echo "mahasiswa nomor: $number" . " yang tamvan" . PHP_EOL;

    $number++;
}

echo "Program selesai.";
?>