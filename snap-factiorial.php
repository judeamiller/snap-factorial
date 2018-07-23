<?php

//write a function that calculates the factorial of n, where:
//n! = n * (n-1) *  (n - 2) * ... *2 * 1
//
// 0! = 1
//throw exception if n< 0 so do notn allow negatives
// throw an exception if n> 20 so 21 and above are overflow in type



function factorial(int $n): int {
	if($n < 0) {
		throw(new \RangeException("no negatives"));
	}
	if ($n > 20){
		throw(new \RangeException("numbers greater than 21"));
	}

	$answer = 1;  // default to 0!=1
	for($i = 1; $i <= $n; $i++) {
		$answer = $answer * $i;
		//what this is doing is 1•1•2•3... it works backwards
	}
	return $answer;
}

echo factorial(3) . PHP_EOL;