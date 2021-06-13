<?php //count
$members = ["funayama", "hituoka", "koga", "arashima"];
echo count($members);
echo '<br>';
?>

<?php //sort
$members = ["funayama", "hituoka", "koga", "arashima"];
sort($members);
var_dump($members);
echo '<br>';
?>

<?php //in_array
$members = ["funayama", "hituoka", "koga", "arashima"];
if (in_array("funayama",$members)) {
    echo "船山はいるよ！";
} else {
    echo "船山はいないよ！";
}
echo '<br>';
?>

<?php //implode
$members = ["funayama", "hituoka", "koga", "arashima"];
$atstr = implode(",",$members);
var_dump($atstr);
echo '<br>';
?>

<?php //explode
$member = ["funayama", "hituoka", "koga", "arashima"];
$atstr = implode(",",$members);
var_dump($atstr);
echo '<br>';
$x = explode(",",$atstr);
var_dump($x);
?>