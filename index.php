<?php
$counter = 1;

//FizzBuzz with a while loop
while ($counter < 101) {
    if ($counter % 15 === 0) {
        echo "FizzBuzz\n";
    } elseif ($counter % 3 === 0) {
        echo "Fizz\n";
    } elseif ($counter % 5 === 0) {
        echo "Buzz\n";
    } else {
        echo "$counter\n";
    }
    $counter++;
}

//FizzBuzz with a for and foreach loop
$output = [];
for ($i = 1; $i < 101; $i++) {
    if ($i % 15 === 0) {
        array_push($output, "FizzBuzz");
    } elseif ($i % 3 === 0) {
        array_push($output, "Fizz");
    } elseif ($i % 5 === 0) {
        array_push($output, "Buzz");
    } else {
        array_push($output, $i);
    }
}

foreach ($output as $value) {
    echo $value . "\n";
}

//FizzBuzz foreach loop that skips over "Fizz"
foreach ($output as $value) {
    if ($value === "Fizz") {
        continue;
    }
    echo $value . "\n";
}

//FizzBuzz foreach loop that skips over "Fizz" and stops at first "FizzBuzz"
foreach ($output as $value) {
    if ($value === "Fizz") {
        continue;
    } elseif ($value === "FizzBuzz") {
        echo $value;
        break;
    }
    echo $value . "\n";
}
