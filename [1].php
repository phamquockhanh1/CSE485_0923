<?php
function hamtinhtong($arrs) {
    $tong = 0;
    for ($i = 0; $i < count($arrs); $i++) {
        $tong += $arrs[$i];
    }
    echo 'Tổng các phần tử = ' . implode(' + ', $arrs) . ' = ' . $tong.'<br/>';
}
function hamtinhtich($arrs) {
    $tich = 1;
    for ($i = 0; $i < count($arrs); $i++) {
        $tich *= $arrs[$i];
    }
    echo 'Tích các phần tử  = ' . implode(' * ', $arrs) . ' = ' . $tich;
}
function hamtinhhieu($arrs) {
    $hieu = 0;
    for ($i = 0; $i < count($arrs); $i++) {
        $hieu -= $arrs[$i];
    }
    echo 'Hiệu các phần tử = ' . implode(' - ', $arrs) . ' = ' . $hieu;
}
function hamtinhthuong($arrs) {
    $thuong = 1;
    for ($i = 0; $i < count($arrs); $i++) {
        $thuong /= $arrs[$i];
    }
    echo 'Thương các phần tử = ' . implode(' / ', $arrs) . ' = ' . $thuong;
}
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
hamtinhtong($arrs);
hamtinhhieu($arrs);
hamtinhtich($arrs);
hamtinhthuong($arrs);
