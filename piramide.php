<?php
echo("Hoeveel stapels wil je hebben?").PHP_EOL;
$a = readline("");
$s = "*";

for($i = 1; $i<= $a; $i++){
    echo str_repeat($s , $i).PHP_EOL;
}
?>