<?php
// [1]
echo '[1]';
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
    echo 'Tích các phần tử  = ' . implode(' * ', $arrs) . ' = ' . $tich.'<br/>';
}
function hamtinhhieu($arrs) {
    $hieu = 0;
    for ($i = 0; $i < count($arrs); $i++) {
        $hieu -= $arrs[$i];
    }
    echo 'Hiệu các phần tử = ' . implode(' - ', $arrs) . ' = ' . $hieu.'<br/>';
}
function hamtinhthuong($arrs) {
    $thuong = 1;
    for ($i = 0; $i < count($arrs); $i++) {
        $thuong /= $arrs[$i];
    }
    echo 'Thương các phần tử = ' . implode(' / ', $arrs) . ' = ' . $thuong.'<br/>';
}
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
hamtinhtong($arrs);
hamtinhhieu($arrs);
hamtinhtich($arrs);
hamtinhthuong($arrs);
// [2]
echo'[2]';
$mau = ['đỏ', 'xanh', 'cam', 'trắng'];

echo 'Màu <span style="color:red;">' . $mau[0] . '</span> là màu yêu thích của Anh, <span style="color:red;">' . $mau[1]
 . '</span> là màu yêu thích của Sơn, <span style="color:red;">' . $mau[2] . 
 '</span> là màu yêu thích của Thắng, còn màu yêu thích của tôi là màu <span style="color:red;">' . $mau[3] . '</span>';
?>
// <!-- [3] -->
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>

<table>
    <tr>
        <th>Tên Khóa Học</th>
    </tr>

    <?php
    foreach ($arrs as $key => $value) {
        echo "<tr>";
        echo "<td>" . $value . "</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>
<?php
echo'4';
