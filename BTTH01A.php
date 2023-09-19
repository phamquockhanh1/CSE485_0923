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
<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>

<table border="1">
    <tr>
        <th>Môn học</th>
    </tr>
    <?php foreach ($arrs as $monhoc) { ?>
        <tr>
            <td><?php echo $monhoc; ?></td>
        </tr>
    <?php } ?>
</table>
<?php
echo'4';
$arrs = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" =>
"Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" =>
"Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
"Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United
Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech
Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" =>
"Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
function intenthudo($value, $key) {
    echo 'Đất nước ' . $key . ' có thủ đô là ' . $value . '<br/>';
    
}

array_walk($arrs, 'intenthudo');

// [5]
echo'5';
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

// Lấy giá trị = 3 mà có key là 'b':
$valueB = $a['b']['o']['b'];
echo "Giá trị của key 'b' là: $valueB\n"; // Kết quả: 3

// Lấy giá trị = 1 mà có key là 'c':
$valueC = $a['a']['c'];
echo "Giá trị của key 'c' là: $valueC\n"; // Kết quả: 1

// Lấy thông tin của phần tử có key là 'a':
$infoA = $a['a'];
echo "Thông tin của key 'a':\n";
print_r($infoA); // Kết quả: Array ( [b] => 0 [c] => 1 )


// 6

$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);

$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

$keysAndValues = array();

foreach ($keys as $key => $value) {
    // Kiểm tra xem có giá trị tương ứng trong mảng $values hay không
    if (array_key_exists($key . "value", $values)) {
        $keysAndValues[$value] = $values[$key . "value"];
    }
}
echo'<br/>';
echo'6';
print_r($keysAndValues);
// [7]
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
echo'<br/>';
echo'[7]';
echo "Các số từ 100 đến 200 và chia hết cho 5 trong mảng:\n";

foreach ($array as $number) {
    if ($number >= 100 && $number <= 200 && $number % 5 == 0) {
        echo $number . "\n";
    }
}
// [8]
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

// Khởi tạo biến lưu trữ chuỗi lớn nhất và nhỏ nhất và độ dài tương ứng
$maxLengthString = '';
$minLengthString = '';
$maxStringLength = 0;
$minStringLength = PHP_INT_MAX;

// Duyệt qua mảng để tìm chuỗi lớn nhất và nhỏ nhất
foreach ($array as $str) {
    $length = strlen($str);
    if ($length > $maxStringLength) {
        $maxLengthString = $str;
        $maxStringLength = $length;
    }
    if ($length < $minStringLength) {
        $minLengthString = $str;
        $minStringLength = $length;
    }
}
echo'<br/>';
echo "[8] Chuỗi lớn nhất là $maxLengthString, độ dài = $maxStringLength\n";
echo "Chuỗi nhỏ nhất là $minLengthString, độ dài = $minStringLength\n";

// [9]

// Hàm chuyển toàn bộ các ký tự trong mảng thành ký tự thường
function convertToLowercase($array) {
    $result = array();
    foreach ($array as $item) {
        // Kiểm tra nếu $item là một số nguyên thì không chuyển đổi
        if (is_int($item)) {
            $result[] = $item;
        } else {
            $result[] = strtolower($item);
        }
    }
    return $result;
}

// Mảng ban đầu
$arr1 = ['1', 'B', 'C', 'E'];
$arr2 = ['a', 0, null, false];

// Chuyển đổi và in ra kết quả
$result1 = convertToLowercase($arr1);
$result2 = convertToLowercase($arr2);
echo"<br/>".'[9]';
echo "Kết quả 1:\n";
print_r($result1);

echo "Kết quả 2:\n";
print_r($result2);
// [10]
function convertToUpperCase($arr) {
    $result = array();
    foreach ($arr as $item) {
        if (is_string($item)) {
            $result[] = strtoupper($item);
        } else {
            $result[] = $item;
        }
    }
    return $result;
}

// Ví dụ 1
$arr1 = ['a', 'b', 'ABC'];
$result1 = convertToUpperCase($arr1);
echo "<br/>".'[10]';
echo "Kết quả ví dụ 1: \n";
print_r($result1);

// Ví dụ 2
$arr2 = ['1', 'b', 'c', 'd'];
$result2 = convertToUpperCase($arr2);
echo "\nKết quả ví dụ 2: \n";
print_r($result2);

// Ví dụ 3
$arr3 = ['a', 0, null, false];
$result3 = convertToUpperCase($arr3);
echo "\nKết quả ví dụ 3: \n";
print_r($result3);

// 11-14
// [11]. Xóa phần tử thứ 3 trong mảng và đảm bảo key tuần tự:
$array = array(1, 2, 3, 4, 5);
unset($array[2]); // Xóa phần tử thứ 3 (với key là 2)
$array = array_values($array); // Đảm bảo key là tuần tự
echo"<br/>".'[11]';
print_r($array);

// [12]. Làm việc với mảng $numbers:
$numbers = [
    'key1' => 12, 
    'key2' => 30, 
    'key3' => 4, 
    'key4' => -123, 
    'key5' => 1234, 
    'key6' => -12565, 
];

// Lấy ra phần tử đầu tiên và cuối cùng
$firstElement = reset($numbers);
$lastElement = end($numbers);

// Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị
$minValue = min($numbers);
$maxValue = max($numbers);
$sum = array_sum($numbers);

// Sắp xếp mảng theo chiều tăng và giảm các giá trị
asort($numbers); // Sắp xếp tăng dần
arsort($numbers); // Sắp xếp giảm dần

// Sắp xếp mảng theo chiều tăng và giảm các key
ksort($numbers); // Sắp xếp tăng dần theo key
krsort($numbers); // Sắp xếp giảm dần theo key
echo"<br/>".'[12]';
print_r("Phần tử đầu tiên: $firstElement\n");
print_r("Phần tử cuối cùng: $lastElement\n");
print_r("Số lớn nhất: $maxValue\n");
print_r("Số nhỏ nhất: $minValue\n");
print_r("Tổng các giá trị: $sum\n");
print_r("Sắp xếp tăng dần: \n");
print_r($numbers);
print_r("Sắp xếp giảm dần: \n");
print_r($numbers);

// [13]. Làm việc với mảng $numbers (phần 3):
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

// Tính toán giá trị trung bình của mảng
$average = array_sum($numbers) / count($numbers);

// Liệt kê các số có giá trị lớn hơn giá trị trung bình
$greaterThanAverage = array_filter($numbers, function ($value) use ($average) {
    return $value > $average;
});

// Liệt kê các số có giá trị nhỏ hơn hoặc bằng giá trị trung bình
$lessThanOrEqualAverage = array_filter($numbers, function ($value) use ($average) {
    return $value <= $average;
});
echo"<br/>".'[13]';
print_r("Giá trị trung bình: $average\n");
print_r("Các số lớn hơn giá trị trung bình: \n");
print_r($greaterThanAverage);
print_r("Các số nhỏ hơn hoặc bằng giá trị trung bình: \n");
print_r($lessThanOrEqualAverage);

// [14]. Gộp 2 mảng dựa trên key:
$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
    'giá trị 1', 'giá trị 2'
];

$mergedArray = array_map(function ($value1, $value2) {
    return [$value2, ...$value1];
}, $array1, $array2);
echo"<br/>".'[14]';
print_r($mergedArray);
