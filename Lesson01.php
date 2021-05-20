<?php
$money = 2000; // 所持金
$price = 1000;
$taxRate = 0.1;

$taxIncludedPrice = $price + $price * $taxRate; // 税込価格
if ($money > $taxIncludedPrice) {
  echo '商品を買うことができます';
} elseif ($money == $taxIncludedPrice) {
  echo '商品を買うことができますが、所持金はゼロです';
} else {
  echo '商品を買うことができません';
}
?>