<?php
echo time();
// index.php
var_dump(time());
echo '<br>';
?>
<?php
// 現在時刻を取得
echo date("Y-m-d H:i:s", time());
echo '<br>';
?>

<?php //課題
echo strtotime("2017/12/31 23:59:59");
echo '<br>';
echo date("Y-m-d H:i:s", 1514764799);
?>