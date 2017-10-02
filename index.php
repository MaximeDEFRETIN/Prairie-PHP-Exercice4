<?php
$I = 1;
for ($I; $I <= 100; $I++) {
if (($I % 3 == 0) and ($I % 5 == 0)) { echo 'FizzBuzz'; }
elseif ($I % 5 == 0) { echo 'Buzz'; }
elseif ($I % 3 == 0) { echo 'Fizz';}
else { echo $I; } }
?>
