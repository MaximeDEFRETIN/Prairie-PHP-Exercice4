<?php
$I = 1;
for ($I; $I <= 100; $I++) {
  if (($I % 3 == 0) && ($I % 5 == 0)) {
    echo 'FizzBuzz' . "<br />";
  } elseif ($I % 5 == 0) {
    echo 'Buzz' . "<br />";
  } elseif ($I % 3 == 0) {
    echo 'Fizz' . "<br />";
  } else {
    echo $I . "<br />";
  }
}
?>
