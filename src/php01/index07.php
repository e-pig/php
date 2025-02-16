<?php
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(2);
?>

<?php
function outputHello()
{
  echo "Hello world";
}

outputHello(); //　①
?>

<?php
function text($number1, $number2)
{
  $value =$number1 - $number2;
  return $value;
}

$total = text(6, 1);
echo $total;
?>

//test

<?php
// 四角形の面積を求める関数
function getsquareArea($base, $height) {
  return $base * $height;
}

// 三角形の面積を求める関数
function getTriangleArea($base, $height) {
  return $base * $height / 2;
}

// 台形の面積を求める関数
function TrapezoidArea($upperBase, $lowBase, $height) {
  return ($upperBase + $lowBase) * $height / 2;
}

// 関数を実行して結果を表示
echo "四角形の面積: " . getsquareArea(5, 5) . " 平方cm<br>";
echo "三角形の面積: " . getTriangleArea(10, 5) . " 平方cm<br>";
echo "台形の面積: " . TrapezoidArea(4, 5, 4) . " 平方cm<br>";
?>
