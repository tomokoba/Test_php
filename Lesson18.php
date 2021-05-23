<?php
$colors = array('赤', '黄', '青');
echo $colors[0];
$colors[] = '黒';
echo $colors[3];

// 連想配列
$scores = array(
  '数学' => 70,
  '英語' => 60,
  '国語' => 90
);
$scores['国語'] += 5;
echo $scores['国語'];

$scores['理科'] = 30; // 値の追加

echo $scores['理科'];
?>