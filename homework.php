<?php

?>
<br>câu 1<br>
<?php

function kiemTraSoChan($number)
{

    if ($number % 2 == 0) {

        return "Số $number là số chẵn";
    } else {

        return "Số $number không là số chẵn";
    }
}

// Số cần kiểm tra
$soCanKiemTra = 10;

// Gọi hàm kiểm tra số chẵn
$ketQua = kiemTraSoChan($soCanKiemTra);

// In kết quả
echo $ketQua;

?>
<br> câu 2<br>
<?php

function tinhTong($n)
{

    $tong = 0;

    for ($i = 1; $i <= $n; $i++) {

        $tong += $i;
    }

    return $tong;
}

// Số n
$n = 99;

// Gọi hàm tính tổng
$tong = tinhTong($n);

// In kết quả
echo "Tổng các số từ 1 đến $n là: $tong";

?>
<br> câu 3<br>
<?php

function bangCuuChuong()
{

    for ($i = 1; $i <= 10; $i++) {

        echo "Bảng cửu chương của " . $i . "<br>";

        for ($j = 1; $j <= 10; $j++) {

            $result = $i * $j;

            echo $i . " x " . $j . " = " . $result . "<br>";
        }
    }
}
bangCuuChuong()



?>
<br> câu 4<br>
<?php


function kiemTraChuoi($chuoi, $tuCanTim)
{
    $kiemTra = strpos($chuoi, $tuCanTim);

    if ($kiemTra !== false) {

        return "Chuỗi '$chuoi' chứa từ '$tuCanTim'.";
    } else {

        return "Chuỗi '$chuoi' không chứa từ '$tuCanTim'.";
    }
}

// Chuỗi cần kiểm tra
$chuoi = "Xin chào, mình là Tân.";

// Từ cụ thể cần tìm
$tuCanTim = "Tân";

// Gọi hàm kiểm tra chuỗi
$ketQua = kiemTraChuoi($chuoi, $tuCanTim);

// In kết quả
echo $ketQua;


?>
<br> câu 5<br>
<?php

function timGiaTriLonNhat($mang)
{
    $gtln = $mang[0];

    $kichThuocMang = count($mang);

    for ($i = 1; $i < $kichThuocMang; $i++) {

        if ($mang[$i] > $gtln) {
            $gtln = $mang[$i];
        }
    }

    return $gtln;
}

function timGiaTriNhoNhat($mang)
{
    $gtnn = $mang[0];

    $kichThuocMang = count($mang);

    for ($i = 1; $i < $kichThuocMang; $i++) {

        if ($mang[$i] < $gtnn) {

            $gtnn = $mang[$i];
        }
    }

    return $gtnn;
}

// Mảng số
$mang = array(2, 9, 5, 7, 3, 1, 6);

// Tìm giá trị lớn nhất
$giaTriLonNhat = timGiaTriLonNhat($mang);

// Tìm giá trị nhỏ nhất
$giaTriNhoNhat = timGiaTriNhoNhat($mang);

// In kết quả
echo "Giá trị lớn nhất trong mảng là: $giaTriLonNhat<br>";
echo "Giá trị nhỏ nhất trong mảng là: $giaTriNhoNhat";


?>
<br> câu 6 <br>
<?php

function sapXepTangDan($mang)

{

    $kichThuocMang = count($mang);

    for ($i = 0; $i < $kichThuocMang - 1; $i++) {

        for ($j = $i + 1; $j < $kichThuocMang; $j++) {

            if ($mang[$j] < $mang[$i]) {

                // Hoán đổi vị trí của hai phần tử
                $temp = $mang[$i];
                $mang[$i] = $mang[$j];
                $mang[$j] = $temp;
            }
        }
    }

    return $mang;
}

// Mảng số cần sắp xếp
$mang = array(5, 2, 9, 1, 7, 3);

// Sắp xếp mảng theo thứ tự tăng dần
$mangDaSapXep = sapXepTangDan($mang);

// In kết quả
echo "Mảng sau khi sắp xếp: ";

foreach ($mangDaSapXep as $value) {

    echo "$value ";
}

?>
<br> câu 7 <br>
<?php

function tinhGiaiThua($n)
{
    if ($n == 0 || $n == 1) {

        return 1;
    } else {

        return $n * tinhGiaiThua($n - 1);
    }
}

// Số nguyên dương
$n = 5;

// Tính giai thừa
$giaiThua = tinhGiaiThua($n);

// In kết quả
echo "Giai thừa của $n là: $giaiThua";


?>
<br> câu 8 <br>
<?php
function kiemTraSoNguyenTo($n)
{
    if ($n < 2) {

        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {

        if ($n % $i == 0) {

            return false;
        }
    }

    return true;
}

function timSoNguyenToTrongKhoang($start, $end)
{
    $soNguyenTo = [];

    for ($i = $start; $i <= $end; $i++) {

        if (kiemTraSoNguyenTo($i)) {

            $soNguyenTo[] = $i;
        }
    }

    return $soNguyenTo;
}

// Khoảng số cần kiểm tra
$start = 1;
$end = 100;

// Tìm số nguyên tố trong khoảng
$mangSoNguyenTo = timSoNguyenToTrongKhoang($start, $end);

// In kết quả
echo "Các số nguyên tố trong khoảng $start đến $end là: ";

foreach ($mangSoNguyenTo as $soNguyenTo) {
    echo "$soNguyenTo ";
}

?>
<br> câu 9 <br>
<?php

function tinhTongMang($arr)
{
    $tong = 0;

    foreach ($arr as $so) {

        $tong += $so;
    }

    return $tong;
}

// Mảng số
$arr = array(2, 9, 5, 7, 3, 1, 6);

// Tính tổng của mảng
$tongMang = tinhTongMang($arr);

// In kết quả
echo "Tổng của mảng là: $tongMang";

?>
<br> câu 10 <br>
<?php

function inFibonacciTrongKhoang($start, $end)
{
    $mangFibo = [];
    $mangFibo[0] = 0;
    $mangFibo[1] = 1;

    $i = 2;
    while (true) {
        $mangFibo[$i] = $mangFibo[$i - 1] + $mangFibo[$i - 2];
        if ($mangFibo[$i] > $end) {
            break;
        }
        if ($mangFibo[$i] >= $start) {
            echo $mangFibo[$i] . " ";
        }
        $i++;
    }
}

// Khoảng số Fibonacci cần in
$start = 0;
$end = 100;

// In các số Fibonacci trong khoảng
echo "Các số Fibonacci trong khoảng $start đến $end là: ";
inFibonacciTrongKhoang($start, $end);

?>
<br> câu 11 <br>
<?php

function coPhaiSoArmstrongKhong($number)
{
    $sum = 0;
    $soBanDau = $number;

    // Tính số chữ số của số ban đầu
    $numDigits = strlen((string)$number);

    // Tính tổng lũy thừa các chữ số
    while ($number > 0) {

        $digit = $number % 10;
        $sum += pow($digit, $numDigits);
        $number = (int)($number / 10);
    }

    // Kiểm tra nếu tổng lũy thừa các chữ số bằng số ban đầu
    if ($sum === $soBanDau) {
        return true;
    } else {
        return false;
    }
}

// Sử dụng hàm để kiểm tra số Armstrong
$number = 153;
if (coPhaiSoArmstrongKhong($number)) {
    echo $number . " là số Armstrong.";
} else {
    echo $number . " không phải là số Armstrong.";
}


?>
<br> câu 12 <br>
<?php

function chenPhanTuVaoMang($mang, $phanTu, $viTri)
{
    // Kiểm tra vị trí hợp lệ
    if ($viTri < 0 || $viTri > count($mang)) {
        echo "Vị trí chèn không hợp lệ.";
        return $mang;
    }

    // Tạo mảng mới để chứa phần tử chèn
    $mangSauKhiChen = array();

    // Chèn các phần tử vào mảng mới
    for ($i = 0; $i < count($mang); $i++) {
        if ($i === $viTri) {
            $mangSauKhiChen[] = $phanTu;
        }
        $mangSauKhiChen[] = $mang[$i];
    }

    // Nếu vị trí chèn là vị trí cuối cùng, thêm phần tử vào cuối mảng
    if ($viTri === count($mang)) {
        $mangSauKhiChen[] = $phanTu;
    }

    return $mangSauKhiChen;
}

// Mảng ban đầu
$mangCanChen = array(1, 2, 3, 4, 5);
$soDinhChen = 10;
$viTriCanChen = 2;

// Chèn phần tử vào mảng
$ketQua = chenPhanTuVaoMang($mangCanChen, $soDinhChen, $viTriCanChen);

// Hiển thị mảng kết quả
print_r($ketQua);

?>
<br> câu 13 <br>
<?php


function loaiBoCacPhanTuTrungLap($mang)
{
    // Sử dụng hàm array_flip() để chuyển đổi giá trị thành key
    $mangDuyNhat = array_flip($mang);

    // Sử dụng hàm array_keys() để lấy các key duy nhất
    $ketQua = array_keys($mangDuyNhat);

    return $ketQua;
}

// Mảng ban đầu
$mangBanDau = array(1, 2, 3, 2, 4, 3, 5, 1);

// Loại bỏ các phần tử trùng lặp
$ketQua = loaiBoCacPhanTuTrungLap($mangBanDau);

// Hiển thị mảng kết quả
print_r($ketQua);



?>
<br> câu 14 <br>
<?php

function timViTriPhanTuTrongMang($mang, $phanTu)
{
    $viTriCanTim = array();

    // Duyệt qua mảng và ghi nhớ vị trí của phần tử
    for ($i = 0; $i < count($mang); $i++) {

        if ($mang[$i] === $phanTu) {

            $viTriCanTim[] = $i;
        }
    }

    return $viTriCanTim;
}

// Mảng ban đầu
$mangBanDau = array(1, 2, 3, 2, 4, 3, 5, 1);
$phanTuCanTimViTri = 2;

// Tìm vị trí của phần tử trong mảng
$viTriCanTim = timViTriPhanTuTrongMang($mangBanDau, $phanTuCanTimViTri);

// Hiển thị vị trí của phần tử
if (count($viTriCanTim) > 0) {

    echo "Vị trí của phần tử " . $phanTuCanTimViTri . " trong mảng là: ";

    echo implode(", ", $viTriCanTim);
} else {

    echo "Phần tử " . $phanTuCanTimViTri . " không tồn tại trong mảng.";
}

?>
<br> câu 15 <br>
<?php

function daoNguoiChuoi($chuoi)
{
    $ketQuaChuoiSauKhiDaoNguoc = '';

    $doDaiChuoi = strlen($chuoi);

    // Duyệt chuỗi theo thứ tự từ cuối lên đầu và ghép ký tự vào chuỗi đảo ngược
    for ($i = $doDaiChuoi - 1; $i >= 0; $i--) {

        $ketQuaChuoiSauKhiDaoNguoc .= $chuoi[$i];
    }

    return $ketQuaChuoiSauKhiDaoNguoc;
}

// Chuỗi ban đầu
$chuoiBanDau = "Hello, World!";

// Đảo ngược chuỗi
$ketQua = daoNguoiChuoi($chuoiBanDau);

// Hiển thị chuỗi đảo ngược
echo $ketQua;


?>
<br> câu 16 <br>
<?php

function countElements($array)
{
    $count = count($array);
    return $count;
}

// Mảng ban đầu
$originalArray = array(1, 2, 3, 4, 5);

// Tính số lượng phần tử trong mảng
$elementCount = countElements($originalArray);

// Hiển thị số lượng phần tử
echo "Số lượng phần tử trong mảng là: " . $elementCount;

?>
<br> câu 17 <br>
<?php

function isPalindrome($str)
{
    // Loại bỏ các ký tự không phải chữ cái và chuyển đổi chuỗi về chữ thường
    $cleanStr = preg_replace("/[^A-Za-z]/", '', strtolower($str));

    // So sánh chuỗi gốc với chuỗi đảo ngược
    return $cleanStr === strrev($cleanStr);
}

// Chuỗi ban đầu
$originalString = "A girl, a plan, a canal: Panama";

// Kiểm tra xem chuỗi có phải là chuỗi Palindrome hay không
if (isPalindrome($originalString)) {

    echo "Chuỗi \"" . $originalString . "\" là chuỗi Palindrome.";
} else {

    echo "Chuỗi \"" . $originalString . "\" không là chuỗi Palindrome.";
}

?>
<br> câu 18 <br>
<?php

function countOccurrences($array, $element)
{
    $count = 0;

    // Duyệt qua mảng và tăng biến đếm mỗi khi phần tử xuất hiện
    foreach ($array as $value) {

        if ($value === $element) {

            $count++;
        }
    }

    return $count;
}

// Mảng ban đầu
$originalArray = array(1, 2, 3, 2, 4, 3, 5, 1);
$elementToCount = 2;

// Đếm số lần xuất hiện của phần tử trong mảng
$occurrences = countOccurrences($originalArray, $elementToCount);

// Hiển thị số lần xuất hiện
echo "Số lần xuất hiện của phần tử " . $elementToCount . " trong mảng là: " . $occurrences;


?>
<br> câu 19 <br>
<?php

function sortDescending($arr)
{

    rsort($arr);
    return $arr;
}

$myArray = array(3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5);

// Sắp xếp mảng theo thứ tự giảm dần
$myArray = sortDescending($myArray);

// Hiển thị mảng
print_r($myArray);

?>
<br> câu 20 <br>
<?php

function addElement($arr, $element, $position)
{

    if ($position == "start") {

        array_unshift($arr, $element);
    } else {

        array_push($arr, $element);
    }

    return $arr;
}

$myArray = array("watermelon", "banana", "orange");

$newElement = "apple";

// Thêm phần tử vào cuối mảng
$myArray = addElement($myArray, $newElement, "end");

// Thêm phần tử vào đầu mảng
$myArray = addElement($myArray, $newElement, "start");

// Hiển thị mảng
print_r($myArray);

?>
<br> câu 21 <br>
<?php

function findSecondLargest($arr)
{

    rsort($arr);

    return $arr[1];
}

$myArray = array(3, 1, 4, 1, 5, 9, 2, 8, 5, 3, 5);

// Tìm số lớn thứ hai trong mảng
$secondLargest = findSecondLargest($myArray);

// Hiển thị số lớn thứ hai
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;


?>
<br> câu 22 <br>
<?php

function gcd($a, $b)
{

    if ($b == 0) {

        return $a;
    } else {

        return gcd($b, $a % $b);
    }
}

function lcm($a, $b)
{

    return ($a * $b) / gcd($a, $b);
}

$num1 = 12;
$num2 = 18;

echo "Ước số chung lớn nhất của " . $num1 . " và " . $num2 . " là: " . gcd($num1, $num2) . "<br>";
echo "Bội số chung nhỏ nhất của " . $num1 . " và " . $num2 . " là: " . lcm($num1, $num2);


?>
<br> câu 23 <br>
<?php

function isPerfectNumber($num)
{

    $sum = 0;

    for ($i = 1; $i <= $num / 2; $i++) {

        if ($num % $i == 0) {

            $sum += $i;
        }
    }

    if ($sum == $num) {

        return true;
    } else {

        return false;
    }
}

$num = 28;

if (isPerfectNumber($num)) {

    echo $num . " là số hoàn hảo";
} else {

    echo $num . " không phải là số hoàn hảo";
}

?>
<br> câu 24 <br>
<?php


function findLargestOdd($arr)
{

    $largestOdd = null;

    foreach ($arr as $num) {

        if ($num % 2 != 0 && ($largestOdd == null || $num > $largestOdd)) {

            $largestOdd = $num;
        }
    }

    return $largestOdd;
}

$myArray = array(2, 4, 6, 10, 9, 3, 5, 7);

// Tìm số lẻ lớn nhất trong mảng
$largestOdd = findLargestOdd($myArray);

// Hiển thị số lẻ lớn nhất
echo "Số lẻ lớn nhất trong mảng là: " . $largestOdd;


?>
<br> câu 25 <br>
<?php

function isPrimeNumber($num)
{

    if ($num <= 1) {

        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {

        if ($num % $i == 0) {

            return false;
        }
    }

    return true;
}

$num = 17;

if (isPrimeNumber($num)) {

    echo $num . " là số nguyên tố";
} else {

    echo $num . " không phải là số nguyên tố";
}

?>
<br> câu 26 <br>
<?php

function findLargestPositive($arr)
{

    $largestPositive = null;

    foreach ($arr as $num) {

        if ($num > 0 && ($largestPositive == null || $num > $largestPositive)) {

            $largestPositive = $num;
        }
    }

    return $largestPositive;
}

$myArray = array(-2, 4, 6, -8, 9, 3, -5, 7);

// Tìm số dương lớn nhất trong mảng
$largestPositive = findLargestPositive($myArray);

// Hiển thị số dương lớn nhất
echo "Số dương lớn nhất trong mảng là: " . $largestPositive;

?>
<br> câu 27 <br>
<?php

function findLargestNegative($arr)
{

    $largestNegative = null;

    foreach ($arr as $num) {

        if ($num < 0 && ($largestNegative == null || $num > $largestNegative)) {

            $largestNegative = $num;
        }
    }

    return $largestNegative;
}

$myArray = array(2, -4, 6, -8, -9, 3, -5, 7);

// Tìm số âm lớn nhất trong mảng
$largestNegative = findLargestNegative($myArray);

// Hiển thị số âm lớn nhất
echo "Số âm lớn nhất trong mảng là: " . $largestNegative;

?>
<br> câu 28 <br>
<?php

function sumOddNumbers($n)
{

    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {

        if ($i % 2 != 0) {

            $sum += $i;
        }
    }

    return $sum;
}

$n = 10;

// Tính tổng các số lẻ từ 1 đến n
$sum = sumOddNumbers($n);

// Hiển thị tổng các số lẻ
echo "Tổng các số lẻ từ 1 đến " . $n . " là: " . $sum;

?>
<br> câu 29 <br>
<?php

function findPerfectSquares($start, $end)
{

    $perfectSquares = array();

    for ($i = $start; $i <= $end; $i++) {

        if (sqrt($i) == floor(sqrt($i))) {

            array_push($perfectSquares, $i);
        }
    }

    return $perfectSquares;
}

$start = 1;
$end = 100;

// Tìm số chính phương trong khoảng từ $start đến $end
$perfectSquares = findPerfectSquares($start, $end);

// Hiển thị số chính phương
echo "Các số chính phương trong khoảng từ " . $start . " đến " . $end . " là: ";

foreach ($perfectSquares as $num) {

    echo $num . " ";
}

?>
<br> câu 30 <br>
<?php

function isSubstring($string, $substring)

{
    if (strpos($string, $substring) !== false) {

        return true;
    } else {

        return false;
    }
}

$string = "Hello world";
$substring = "world";

// Kiểm tra xem $substring có phải là chuỗi con của $string hay không
if (isSubstring($string, $substring)) {

    echo "Chuỗi '" . $substring . "' là chuỗi con của chuỗi '" . $string . "'";
} else {

    echo "Chuỗi '" . $substring . "' không phải là chuỗi con của chuỗi '" . $string . "'";
}
