<?php
$num = 0;
$n = 0;
while($n <= 40) {
    $num++;
    $x = mt_rand(1,6);
    echo $num."回目 =".$x;
    echo '<br>';
    if($n >= 40) {
        break;
    }
    $n += $x;
}
echo "合計".$num."回でゴールしました。";