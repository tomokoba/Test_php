<?php
for ($i = 1; $i <= 1000; $i++) {
  if ($i > 500) { // 501以上は表示しない
    break;
  }
  echo $i."\n";
}
?>