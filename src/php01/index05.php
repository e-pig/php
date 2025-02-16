<?php
$a = 7;

if ($a === 5) {
    echo "\$aは５です";
}else{
    echo "\$aは５以外です";
}
?>

<?php
$people = Saburo;

switch ($people) {
case "Taro";
echo "太郎です";
break;
case "jiro";
echo "次郎です";
break;
case "Saburo";
echo "三郎です";
break;
}
?>

<?php
$a = 7;
$b = ($a > 5) ? "true" : "false";
echo "$b";
?>