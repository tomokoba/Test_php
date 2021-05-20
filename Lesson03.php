<?php
$prices = array(1000, 650, 750, 800);
// 合計金額の算出

$totalPrice = 0;
$maxPrice = 0;
foreach ($prices as $price) {
  $totalPrice += $price;
  if ($price > $maxPrice) {
    $maxPrice = $price;
  }
}
echo '合計金額は'.$totalPrice.'円です';
echo "\n";
echo '最高金額は'.$maxPrice.'円です';
?>