<?php
function a($base,$height){
    $a = $base*$height/2;
    print "さっきの三角形の面積は".$a."だよ！";
}
a(10,5);
echo '<br>';
$b = 10*5/2;
print "さっきの三角形の面積は".$b."だよ！";
?>

<?php //引数
function cube($a){
    $cube = pow($a,3);
    print "この立方体の体積は".$cube."です！";
}
echo '<br>';
cube (1,1,1);
echo '<br>';
cube (3,3,3);
echo '<br>';
cube (5,5,5);
echo '<br>';
cube (7,7,7);
echo '<br>';
cube (9,9,9);
echo '<br>';
?>

<?php
function sayHi($name = "goto") { 
    // 関数の中で定義する変数 => ローカル変数 
    $myname = "php"; 
    return "Hi! ".$name." from ".$myname;
}
echo sayHi();
?>