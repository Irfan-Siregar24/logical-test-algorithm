<?php

function sequenceExists($main, $seq) {
    $mainLength = count($main);
    $seqLength = count($seq);

    // Jika panjang urutan lebih besar dari panjang array utama, langsung kembalikan false
    if ($seqLength > $mainLength) {
        return false;
    }

    for ($i = 0; $i <= $mainLength - $seqLength; $i++) {
        $found = true;

        for ($j = 0; $j < $seqLength; $j++) {
            // Periksa setiap elemen urutan
            if ($main[$i + $j] != $seq[$j]) {
                $found = false;
                break;
            }
        }

        // Jika ditemukan, kembalikan true
        if ($found) {
            return true;
        }
    }

    // Jika tidak ditemukan, kembalikan false
    return false;
}

$main = array(20, 7, 8, 10, 2, 5, 6);
$seq1 = array(7, 8);
$seq2 = array(8, 7);
$seq3 = array(7, 10);

// Contoh penggunaan
var_dump(sequenceExists($main, $seq1)); // true
var_dump(sequenceExists($main, $seq2)); // false
var_dump(sequenceExists($main, $seq3)); // false

?>