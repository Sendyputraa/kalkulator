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

        case '%':
            if ($angka2 == 0) {
                return "Error: Tidak bisa dibagi nol!";
            }
            return $angka1 % $angka2;

        default:
            return "Operator tidak valid!";
    }
}

echo "=== KALKULATOR PHP ===" . PHP_EOL;

$angka1 = 20;
$operator = '+';
$angka2 = 10;

$hasil = kalkulator($angka1, $operator, $angka2);

echo "Angka pertama : $angka1" . PHP_EOL;
echo "Operator      : $operator" . PHP_EOL;
echo "Angka kedua   : $angka2" . PHP_EOL;
echo "Hasil         : $hasil" . PHP_EOL;

?>
