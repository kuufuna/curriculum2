<?php
$testFile="test.txt";
$contents="こんにちは！";
if(is_writable($testFile)){
    $a=fopen($testFile,"a");
    fwrite($a,$contents);
    fclose($a);
}else{
    echo "書き込みできませんでした";
}