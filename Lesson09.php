<?php
for ($i = 1; $i <= 1000; $i++) {
  if ($i % 3 == 0) {
    continue;
  }
  echo $i."\n";
}
?>