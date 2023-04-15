<?php
$max = 10;

// $maxまでの数字を足し算する
$total = 0;
for($i = 1; $i <= $max; $i++){
	$total += $i;
}
echo $total;	// 55と表示される

