<?php
function getCircleArea($radius) {
  return $radius * $radius * 3;
}

$circleArea = getCircleArea(5);

echo $circleArea;
?>