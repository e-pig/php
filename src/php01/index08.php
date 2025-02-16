<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

echo $people[0];
?>

<?php
$people = [
  ["name" => "Taro", "age" => 29],
  ["name" => "Jiro", "age" => 25],
];

echo $people[0]["name"]; // Taro
echo $people[1]["age"];  // 25

echo $people[0]["name"];

?>

<?php
$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
  echo $person;
  echo '<br />';
}
?>

//test
<?php
$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
?>
