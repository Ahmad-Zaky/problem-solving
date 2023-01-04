<?php

function assertEqual($output, $expected)
{
    return $output === $expected;
}

function testCases($testCases)
{
    $failed = [];
    foreach ($testCases as $key => $testCase) {
        if ($testCase === false) {
            $failed[] = $key+1;
        }
    }

    if (count($failed) > 0) {
        return $failed;
    }

    return true;
}