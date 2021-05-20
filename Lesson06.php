<?php
$colors = array('赤', '青', '黄');
echo $colors[0];
$colors[] = '白'; // 配列の最後に白を代入
echo $colors[3];

// 連想配列
$scores = array(
  '数学' => 70,
  '国語' => 90,
  '英語' => 80
);
$scores['国語'] += 5;
echo $scores['国語'];
?>