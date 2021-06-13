<?php
$testFile="test.txt";
$contents="こんにちは！";
if(is_readable($testFile)){
    $a=fopen($testFile,"r");
    while($line=fgets($a)){
        echo $line.'<br>';
    }
    fclose($a);
}