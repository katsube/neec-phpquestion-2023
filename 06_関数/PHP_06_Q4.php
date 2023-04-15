<?php
$PI = 3.14;  // 円周率

// 半径5の円の面積を求める
$area = calcCircleArea(5);

// 78.5と表示されるのを期待
echo $area;

/**
 * 円の面積を求める
 */
function calcCircleArea($r){
	$area = $PI * $r * $r;
	return $area;
}