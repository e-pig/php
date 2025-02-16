<?php
for ($i = 0; $i < 4; $i++) {
  echo $i;
}
?>

<?php
for ($i = 1; $i < 10; $i++) {
  echo $i * 2 . "<br />";
}
?>

<?php
$i = 0;

while ($i < 3) {
  echo 'i = ' . $i . '<br />';
  $i += 1;
}
?>

<?php
$num = 0;

do {
  echo 'num =' . $num .'<br />';
  $num += 1;
} while ($num < 3);
?>

<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}
?>