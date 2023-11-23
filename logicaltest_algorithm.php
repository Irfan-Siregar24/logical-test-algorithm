<?php

function sequenceExists($mainArray, $sequenceArray) {
    $mainLength = count($mainArray);
    $seqLength = count($sequenceArray);

    // Jika panjang urutan lebih besar daripada panjang utama, tidak mungkin ditemukan.
    if ($seqLength > $mainLength) {
        return false;
    }

    // Mencari posisi pertama dari elemen pertama urutan di dalam utama.
    $startPos = array_search($sequenceArray[0], $mainArray);

    if ($startPos === false || $startPos + $seqLength > $mainLength) {
        return false;
    }

    // Memeriksa apakah sisa utama setelah posisi pertama sesuai dengan urutan.
    $subArray = array_slice($mainArray, $startPos, $seqLength);
    return $subArray == $sequenceArray;
}

$main = [20, 7, 8, 10, 2, 5, 6];
$sequence1 = [7, 8];
$sequence2 = [8, 7];
$sequence3 = [7, 10];

echo "sequenceExists(\$main, [7, 8]) => " . (sequenceExists($main, $sequence1) ? 'true' : 'false') . "\n";
echo "sequenceExists(\$main, [8, 7]) => " . (sequenceExists($main, $sequence2) ? 'true' : 'false') . "\n";
echo "sequenceExists(\$main, [7, 10]) => " . (sequenceExists($main, $sequence3) ? 'true' : 'false') . "\n";

?>