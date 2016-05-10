<?php
$a = ['A'=>1, 3=>2, 'Z'=>'Hello', 'v'=>344];
var_dump($a);
echo "<br />";
echo "<br />";
foreach ( $a as $key => $value) {
  echo $key .",". $value ."<br />";
}
?>
