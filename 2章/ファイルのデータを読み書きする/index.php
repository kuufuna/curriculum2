<?php
$file="test2.txt";
if(is_readable($file)){
    $x =fopen($file,"r");
    while($line=fgets($x)){
        echo $line .'<br>';
    }
    fclose($x);
}