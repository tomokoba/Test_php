<?php
for ($i = 0; $i <= 30; $i++) {
  echo $i;
}
echo "\n";

$i = 2;

while ($i <= 10) {
  if ($i % 2 == 0) {
    echo $i;
  }
  $i++;
}
echo "\n";
for ($i =1; $i <= 10; $i++) {
  if ($i > 5) {
    break;
  }
  echo $i;
}
echo "\n";
for ($i = 1; $i <= 10; $i++) {
  if ($i % 3 == 0) {
    continue;
  }
  echo $i;
}

echo "\n";

$scores = array('数学' => 70, '国語' => 80, '英語' => 75);

foreach($scores as $key => $value) {
  echo $key.'は'.$value.'点です';
}

echo "\n";

$str = 'lesson';
echo strlen($str);

echo "\n";

$array = array('HTML', 'CSS', 'PHP');
echo count($array);

echo "\n";

echo rand(10,13);

?>