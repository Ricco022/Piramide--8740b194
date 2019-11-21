<?php

$nm = readline("Hoeveel stapels wil je hebben?");

for ($i = 1; $i <= $nm; $i++) {
echo str_repeat("*" , $i);
    echo PHP_EOL;
}
?>