<?php
$cart = new ShoppingCart();
$cart->addItem(['apple',  120]); //りんご 120円
$cart->addItem(['banana', 150]); //バナナ 150円
$cart->addItem(['milk',   230]); //ミルク 230円

// 現在の合計金額を計算
$price = $cart->calcPrice();

// 結果表示
// "合計金額: 500円"と表示される
printf("合計金額: %d円\n", $price);
