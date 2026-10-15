<?php

function kalkulator($angka1, $operator, $angka2) {
    switch ($operator) {
        case '+':
            return $angka1 + $angka2;

        case '-':
            return $angka1 - $angka2;

        case '*':
            return $angka1 * $angka2;

        case '/':
            if ($angka2 == 0) {
                return "Error: Tidak bisa dibagi nol!";
            }
            return $angka1 / $angka2;

        default:
            return "Operator tidak valid!";
    }
}

echo "============================\n";
echo "     KALKULATOR PHP\n";
echo "============================\n";

$angka1 = (float) readline("Masukkan angka pertama: ");
$operator = readline("Pilih operator (+, -, *, /): ");
$angka2 = (float) readline("Masukkan angka kedua: ");

$hasil = kalkulator($angka1, $operator, $angka2);

echo "----------------------------\n";
echo "Hasil: " . $hasil . "\n";
echo "============================\n";

?>
