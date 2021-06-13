<?php //ceil
$x = 11.1;
echo ceil($x); //12
echo '<br>';
echo ceil(15.11); //16
echo '<br>';
echo ceil(-1.5); //-1
echo '<br>';
?>

<?php //floor
$y = 4.9;
echo floor($y); //4
echo '<br>';
echo floor(12.6); //12
echo '<br>';
echo floor(-3.1); //-4
echo '<br>';
?>

<?php //round
$y = 4.9;
echo round($y); //5
echo '<br>';
echo round(6.6); //7
echo '<br>';
echo round(-1.5); //-2
echo '<br>';
?>

<?php //pi
function circleArea($r) { 
$circle_area = $r * $r * pi(); 
echo $circle_area;
}
// 半径が4の円の面積の計算
circleArea(4);
echo '<br>';
?>

<?php //mt_rand
echo mt_rand(1,10);
echo '<br>';
?>

<?php //strlen
$x = "America japan";
echo strlen($x); //13
echo '<br>';
?>

<?php //strpos
$str = "endoukunn";
echo strpos($str, "k"); //5
echo '<br>';
?>

<?php //substr
echo substr('america japan', 0,7);
echo '<br>';
echo substr('america japan', 8,5);
echo '<br>';
?>

<?php //str_replace
$str = "funayamasou";
echo str_replace("funayama","FUNAYAMA","$str");
echo '<br>';
?>

<?php //printf
$name = "船山";
$x = 3;
$y = 4;
printf("%sはテストに%d回落ちたが%d回目で受かることができた！！",$name,$x,$y);
echo '<br>';
?>

<?php //sprintf
$name = "船山";
$x = 3;
$y = 4;
$z = sprintf("%sはテストに%d回落ちたが%d回目で受かることができた！！",$name,$x,$y);
echo $z;
?>