<?php

//Task 1 : Looping with Increment using a Function
function printEvenNumbersForLoop($start, $end, $increment) {
	for ($i = $start; $i <= $end; $i += $increment) {
    	if ($i % 2 == 0) {
        	echo $i . " ";
    	}
	}
	echo PHP_EOL;
};

function printEvenNumbersWhileLoop($start, $end, $increment) {
	$i = $start;
	while ($i <= $end) {
    	if ($i % 2 == 0) {
        	echo $i . " ";
    	}
    	$i += $increment;
	}
	echo PHP_EOL;
};

function printEvenNumbersDoWhileLoop($start, $end, $increment) {
	$i = $start;
	do {
    	if ($i % 2 == 0) {
        	echo $i . " ";
    	}
    	$i += $increment;
	} while ($i <= $end);
	echo PHP_EOL;
};


echo "Using For Loop: ";
printEvenNumbersForLoop(1, 20, 2);

echo "Using While Loop: ";
printEvenNumbersWhileLoop(1, 20, 2);

echo "Using Do-While Loop: ";
printEvenNumbersDoWhileLoop(1, 20, 2);


//Task 2 : Skip Multiples of 5

for ($i = 1; $i <= 50; $i++) {
	if ($i % 5 == 0) {
    	continue; // Skip multiples of 5
	}
	echo $i . " ";
};


//Task 3 : Break on Condition

$first = 0;
$second = 1;
$count = 0;

while ($count < 10) {
	$fibonacci = $first + $second;
    
	if ($fibonacci > 100) {
   	break; // If Fibonacci number is greater than 100 then Exit the loop
	}
    
	echo $fibonacci . " ";
    
	$first = $second;
	$second = $fibonacci;
    
	$count++;
};

//Task 4: Fibonacci Series printing using a Function

function printFibonacciSeries($count) {
	$first = 0;
	$second = 1;
    
	for ($i = 0; $i < $count; $i++) {
    	echo $first . " ";
   	 
    	$next = $first + $second;
    	$first = $second;
    	$second = $next;
	}
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacciSeries(15);




