<?php

// 1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function SoChan($x) {
    if (is_int($x)) {
        if ($x % 2 == 0) {
            echo "1. $x là số chẵn";
        } else {
            echo "1. $x là số lẻ";
    }
    } else {
        echo "1. $x không là số chẵn";
    };
}
SoChan(10);
echo "<br>";

// 2.Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function sum($n){
    echo "2. Tổng của các số từ 1 đến 5 là: ";
    $res = 0;
    for ($i=1; $i<=$n; $i++) {
        $res += $i;
    }
    return $res;
}
echo sum(5);

// 3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
echo "<br>";
function bangCuuChuong ($y) {
    echo "3. Bảng cửu chương: <br>";
    $y;
    for ($i=1; $i<=10; $i++) {
        $result = $i * $y;
        echo "$y * $i = $result";
        echo "<br>";
    }        
    };
bangCuuChuong(5);

// 4.Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function checkIfExist($word , $my_string){
    if((strpos($my_string, $word)) !== false)
    {
        echo"word existed";}
    else{ echo "word not exist";}
}
echo "4. ";
$word = "hom";
$my_string= "ha hahahahahahahaha hom";
checkIfExist($word,$my_string);
echo "<br>";

// 5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function findMaxMinValues($arr){
    if (empty($arr)) {
        echo "Mảng trống.";
        return;
    }
    $maxValue = $arr[0];
    $minValue = $arr[0];
    foreach ($arr as $value) {
        if ($value > $maxValue) {
            $maxValue = $value;
        }
        if ($value < $minValue) {
            $minValue = $value;
        }
    }
    echo "Giá trị lớn nhất trong mảng là: " . $maxValue . "<br>";
    echo "Giá trị nhỏ nhất trong mảng là: " . $minValue. "<br>";
}
$array5 = array(5,6,7,2,3,10);
echo "5. ";
findMaxMinValues($array5);

// 6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
$array6 = array(3,4,5,6,2,1);
function SortArr($array) {
    echo "6. Mảng sau khi được sắp xếp là: ";
    sort($array);
    foreach($array as $value) {
    echo $value." ";
    }
}
SortArr($array6);

// 7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
echo "<br>";
echo "7. ";
function factorial (int $n) {
    if(!is_int($n) || $n < 0) {
        return "Vui long nhap mot so nguyen duong";
    }
    if ($n==0 || $n==1) {
        return 1;
    } else {
        return $n * factorial($n-1);
    }
}
$result_fact = factorial(5);
echo "Giai thừa của 5 là: $result_fact";
echo "<br>";

// 8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function CheckPrime($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if($n % $i == 0) {
            return false;
        }
    }
    return true;
}
function FindPrime ($start, $end){
    $prime=array();
    for ($i=$start; $i<=$end; $i++){
        if(CheckPrime($i)){
            $prime[]=$i;
        }
    }
    return $prime;
}
$prime_in_range = FindPrime(1,10);
echo "8. Số nguyên tố trong khoảng từ 1 đến 10 là: ";
echo implode(', ', $prime_in_range);
echo "<br>";

// 9.Viết chương trình PHP để tính tổng của các số trong một mảng.
$array9 = array(6, 2, 3, 4, 5);

function SumArr ($array) {
    $sum_arr = 0;
    foreach ($array as $value){
        $sum_arr += $value;
    }
    return $sum_arr;
}
$Sum_Array = SumArr($array9);
echo "9. Tổng của các số trong mảng là: $Sum_Array";
echo "<br>";

// 10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function Fibonacci ($n){
    $f = [];
    $f[0] = 0;
    $f[1] = 1; 
    for ($i=2; $i<$n; $i++) {
       $f[$i] = $f[$i-1] + $f[$i-2];
    }
    return $f;
}
function PrintFibonacci ($start, $end) {
    if($start==0 || $end==0 || $start>$end) {
        return "Khoảng không hợp lệ";
    }
    echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
    $fib_numbers = Fibonacci($end);
    for ($i=$start; $fib_numbers[$i] <= $end; $i++) {
        echo $fib_numbers[$i] . " ";
    }
}
echo "10. ";
PrintFibonacci(2, 10);
echo "<br>";

//11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function isAmstrong($number) {
    $original_number = $number;
    $sum = 0;
    $numdigit = strlen((string)$number);
    while ($number>0) {
        $digit = $number%10;
        $sum += pow($digit, $numdigit);
        $number = (int)$number/10;
    }
    return $sum === $original_number;
}
$n=153;
echo "11. ";
if (isAmstrong ($n)) {
    echo $n . " là số Amstrong.";
} else {
    echo $n . " không phải số Amstrong.";
}
echo "<br>";

//12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function InsertElement($array, $element, $position){
    if ($position < 0 || $position > count($array)) {
        echo "Vi tri chen khong hop le.";
        return $array;
    }
    array_splice($array, $position, 0, $element);
    return $array;
}
$array12 = array(1,2,3,4,5);
$element = 10;
$position = 3;
$insert_arr = InsertElement($array12, $element, $position);
echo "12. Mảng mới sau khi chèn là: ";
print_r($insert_arr);
echo "<br>";

//13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function RemoveDuplicates($arr) {
    $result = array();
    foreach ($arr as $value) {
        $isDuplicate = false;
        foreach ($result as $result_value) {
            if ($value == $result_value) {
                $isDuplicate = true;
                break;
            }
        }
        if (!$isDuplicate) {
            $result[] = $value;
        }
    }
    return $result;
}
$array13 = array(1,1,2,2,3,4,4,5,6,6);
$remove_arr = RemoveDuplicates($array13);
echo "13. Mảng sau khi loại bỏ các phần tử trùng lặp là: ";
print_r($remove_arr);
echo "<br>";

//14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findElementPosition ($arr, $element) {
    $position = -1;
    foreach ($arr as $index => $value) {
        if ($value == $element ) {
            $position = $index;
            break;
        }
    }
    if ($position !== -1) {
        echo "Phần tử '$element' ở vị trí $position trong mảng.";
    } else {
        echo "Không tìm thấy vị trí của phần tử '$element' trong mảng.";
    }
}
$array14 = array(1,2,3,4,5,6);
$element14 = 4;
echo "14. ";
findElementPosition($array14, $element14);
echo "<br>";

//15.Viết chương trình PHP để đảo ngược một chuỗi.
function ReverseString ($str) {
    $length = strlen($str);
    $reverse = '';
    for($i=$length - 1; $i>=0; $i--) {
        $reverse .= $str[$i];
    }
    return $reverse;
}
$s = "Hello, World!";
$reverse_string = ReverseString($s);
echo "15. Chuỗi đảo ngược là: $reverse_string";
echo "<br>";

//16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countArr($arr) {
    return count($arr);
}
$array16 = array(1,2,3,4,5,6,7,8,9,10);
$count = countArr($array16);
echo "16. Số lượng phần tử trong mảng là: $count";
echo "<br>";

//17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function isPalindrome($str) {
    $cleanStr = strtolower(str_replace(' ', '', $str));
    return $cleanStr == strrev($cleanStr);
}
echo "17. ";
$stringToCheck = "A man a plan a canal Panama";
if (isPalindrome($stringToCheck)) {
    echo "\"$stringToCheck\" là chuỗi Palindrome.";
} else {
    echo "\"$stringToCheck\" không là chuỗi Palindrome.";
}
echo "<br>";

//18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function CountAppearances ($arr, $element) {
    $count = 0;
    foreach ($arr as $value) {
        if ($element == $value){
            $count++;
        }
    }
    return $count;
}
$array18 = array(3,2,3,4,3,4,3,3);
$element = 3;
$count_element = CountAppearances($array18, $element);
echo "18. Số lần xuất hiện của phần tử '$element' trong mảng là: $count_element <br>";

//19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
$array19 = array(3,4,5,6,2,7,1);
function SortArrDecrease($array) {
    echo "19. Mảng sau khi được sắp xếp là: ";
    rsort($array);
    foreach($array as $value) {
    echo $value." ";
    }
}
SortArrDecrease($array19);
echo "<br>";

//20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function AddToBegin ($arr, $element){
    $new_arr = array($element);
    foreach ($arr as $value){
        $new_arr[] = $value;
    }
    echo "Mảng sau khi đã được thêm phần tử '$element' vào đầu là: ";
    foreach($new_arr as $a) {
        echo $a. " ";
    }
}
function AddToEnd($arr, $element) {
    $arr[] = $element;
    echo "Mảng sau khi đã được thêm phần tử '$element' vào cuối là: ";
    foreach($arr as $a) {
        echo $a. " ";
    }
}
$array_begin = array(1,2,3,4,5);
$array_end = array(1,2,3,4,5);
echo "20. ";
AddToBegin($array_begin, 0);
echo "<br>";
AddToEnd($array_end, 6);
echo "<br>";

//21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function FindSecondMax ($arr) {
    rsort($arr);
    $second_max = $arr[1];
    return $second_max;
}
$array21 = array(1,2,3,7,5,8);
$second_max = FindSecondMax($array21);
echo "21. Số lớn thứ hai trong mảng là: $second_max <br>";

//22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function FindGCD ($a, $b) {
    while($a*$b != 0){
        if ($a>$b){
            $a%=$b;
        } else {
            $b%=$a;
        }
    }
    return $a+$b;
}
function FindLCM ($a, $b){
    return ($a*$b)/FindGCD($a, $b);
}
$n1 = 24;
$n2 = 36;
$gcd = FindGCD($n1,$n2);
$lcm = FindLCM($n1,$n2);
echo "22. Ước số chung lớn nhất của $n1 và $n2 là: $gcd <br>";
echo "Bội số chung nhỏ nhất của $n1 và $n2 là: $lcm <br>";

//23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
echo "23. ";
function isPerfectNumber($n){
    if ($n<=1){
        return false;
    }
    $sum = 1;
    $sqrt = sqrt($n);
    for($i=2; $i<=$sqrt; $i++){
        if($n%$i==0){
            $sum += $i;
            $divisor = $n / $i;
            if ($divisor != $i) {
                $sum += $divisor;
            }
        }
    }
    return $sum == $n;
}
$n = 28;
if(isPerfectNumber($n)){
    echo "$n là số hoàn hảo. <br>";
} else {
    echo "$n không phải số hoàn hảo. <br>";
}

//24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function FindMaxOdd ($arr) {
    $maxodd = null;
    foreach ($arr as $n) {
        if($n%2!=0 && ($maxodd === null || $n > $maxodd)) {
            $maxodd = $n;
        }
    }
    return $maxodd;
}
$array24 = array(1,2,3,4,8,19,5);
$max_odd_arr = FindMaxOdd($array24);
echo "24. Số lẻ lớn nhất trong mảng là: $max_odd_arr";
echo "<br>";

//25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrime($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if($n % $i == 0) {
            return false;
        }
    }
    return true;
}
echo "25. ";
$check_prime = 17;
if (isPrime($check_prime)) {
    echo $check_prime . " là số nguyên tố.";
} else {
    echo $check_prime . " không là số nguyên tố.";
}
echo "<br>";

//26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findMaxPositive ($arr) {
    $max_positive = null;
    foreach ($arr as $n) {
        if($n>0 && ($max_positive === null || $n > $max_positive)) {
            $max_positive = $n;
        }
    }
    return $max_positive;
}
echo "26. ";
$array26 = array(1, 2, 20, -7, 5);
$max_positive_number = findMaxPositive($array26);
if ($max_positive_number !== null) {
    echo "Số dương lớn nhất trong mảng là: " . $max_positive_number;
} else {
    echo "Không có số dương trong mảng";
}
echo "<br>";

//27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findMaxNegative ($arr) {
    $max_negative = null;
    foreach ($arr as $n) {
        if($n<0 && ($max_negative === null || $n > $max_negative)) {
            $max_negative = $n;
        }
    }
    return $max_negative;
}
echo "27. ";
$array27 = array(-1, -22, 20, -7, -5);
$max_negative_number = findMaxNegative($array27);
if ($max_negative_number !== null) {
    echo "Số âm lớn nhất trong mảng là: " . $max_negative_number;
} else {
    echo "Không có số âm trong mảng";
}
echo "<br>";

//28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function SumOdd ($n){
    $sum = 0;
    for($i=0; $i<=$n; $i++) {
        if($i%2 != 0){
            $sum += $i;
        }
    }
    return $sum;
}
$sum_odd = SumOdd(5);
echo "28. Tổng các số từ 1 đến 5 là: $sum_odd";
echo "<br>";

//29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function IsPerfectSquare ($n) {
    $sqr = sqrt($n);
    $int_sqr = (int)$sqr;
    $res = ($sqr == $int_sqr);
    return $res;
}
function FindPerfectSquare ($start, $end) {
    echo "Số chính phương trong khoảng $start đến $end là: ";
    for($i=$start; $i<=$end; $i++) {
        if(IsPerfectSquare($i)){
            echo $i . " ";
        }
    }
}
echo "29. ";
FindPerfectSquare(1,30);
echo "<br>";

//30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function contains_Str($main, $check) {
    $result = strstr($main, $check);
    if ($result != false) {
        echo "Chuỗi gốc chứa chuỗi con.";
    } else {
        echo "Chuỗi gốc không chứa chuỗi con.";
    }
}
$main = "Đây là câu 30";
$check = "câu";
echo "30. ";
contains_Str($main, $check);
echo "<br>";

?>