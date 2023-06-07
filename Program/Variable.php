<?php
function add1() {
  static $number = 0;
  $number++;
  return $number;
}

echo add1();
echo "<br>";
echo add1();
echo "<br>";
echo add1();
?>