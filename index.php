<?php
$I = 0;
for (I; I <= 100; I++) { if (I % 3) { echo Fizz; }
	                     else if (I % 5) { echo Buzz; }
	                     else if ((I % 3) && (I % 5)) { echo FizzBUzz; }
	                     else { echo I; } }
?>
