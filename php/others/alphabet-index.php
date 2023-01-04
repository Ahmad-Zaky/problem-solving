<?php

$alpha = [
    "A",
    "B",
    "C",
    "D",
    "E",
    "F",
    "G",
    "H",
    "I",
    "J",
    "K",
    "L",
    "M",
    "N",
    "O",
    "P",
    "Q",
    "T",
    "S",
    "T",
    "U",
    "V",
    "W",
    "X",
    "Y",
    "Z"
];

// Assume we get only one char
function alphaIndex(string $char)
{
    global $alpha;

    return array_search($char, $alpha, true) + 1;
}

function getStringIndex($inputString)
{
    global $alpha;
    
    $strCount = strlen($inputString);
    
    $index = 0;
    foreach ( str_split($inputString) as $key => $char) {
        $charIndex = alphaIndex($char);
        $keyIndex = $strCount - $key;
        $index += ($charIndex * pow(count($alpha), ($keyIndex-1)));
    }

    return $index;
}

// Test your test cases
require_once __DIR__ . "/../test.php";

var_dump(
    testCases([
        assertEqual(
            // Output
            getStringIndex("AZA"),
            
            // Expected
            1353
        )
    ])
);