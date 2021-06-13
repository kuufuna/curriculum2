<?php
function cube($a,$b,$c) {
    $volume = $a*$b*$c;
    print "この直方体の体積は".$volume."です！";
}
echo cube(5,10,8);