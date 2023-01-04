<?php

function hasNumber5(int $number)
{
    $lastDigit = getLastDigit($number);

    if ($lastDigit === 5) return true;
    
    if ($number < 10 && $number !== 5) return false;

    return hasNumber5($number / 10);
}


function getLastDigit(int $number)
{
    return ($number % 10);
}

// assume unsigned integers
function sumAndskip5(int $number1, int $number2)
{
    // Check if both are ths same and not equal to 5
    if ($number1 === $number2 && $number1 !== 5) return $number1;
    
    // Check if both are ths same and equal to 5
    if ($number1 === $number2 && $number1 === 5) return 0;

    $sum = 0;
    for (;$number1 <= $number2; $number1++) {

        // Start Count if Digit Ends with 5 
        if (hasNumber5($number1)) {
            continue;
        }

        $sum = $sum+$number1;
    }

    return $sum;
}

// Test your test cases
require_once __DIR__ . "/../test.php";

var_dump(
    testCases([
        assertEqual(
            // Output
            sumAndskip5(200, 252),
            
            // Expected
            10100
        )
    ])
);
