<?php
 /* Đáp án trắc nghiệm
Câu 1: kết quả in ra màn hình là: 5
Câu 2: d) Error
Câu 3: d)$
Câu 4: a) echo()
Câu 5: a) == so sánh giá trị, === so sánh giá trị và kiểu dữ liệu
 */

 // Thực hành
/* Bài 1: Viết một chương trình PHP để kiểm tra xem một số nguyên dương nào đó có phải là số nguyên tố hay không. Yêu cầu:
Tạo một hàm isPrime nhận một số nguyên dương và trả về true nếu nó là số nguyên tố, ngược lại trả về false.
Sử dụng hàm để hiển thị danh sách các số nguyên tố từ 1 đến 100.
*/
echo "<strong>Bài 1: </strong><br>";
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
function printPrime(){
    for ($i=1; $i<=100; $i++) {
        if (isPrime($i)){
            echo $i. " ";
        }
    }
}
echo "Các số nguyên tố từ 1 đến 100 là: ";
printPrime();
echo "<br>";

/* Bài 2: Viết một ứng dụng PHP để quản lý thông tin về sản phẩm trong một cửa hàng sử dụng mảng kết hợp. Yêu cầu:
Tạo một mảng kết hợp chứa thông tin về sản phẩm với các khóa như name, price, và quantity.
Hiển thị thông tin của tất cả sản phẩm trong mảng.
Viết hàm để tính tổng giá trị của tất cả sản phẩm (price * quantity).
*/
echo "<strong>Bài 2: </strong><br>";
$products = array(
    array("name" => "Sản phẩm A", "price" => 10, "quantity" => 5),
    array("name" => "Sản phẩm B", "price" => 20, "quantity" => 3),
    array("name" => "Sản phẩm C", "price" => 15, "quantity" => 2),
);
function displayProduct($products){
    echo "Thông tin sản phẩm:<br>";
    foreach ($products as $product) {
        echo "Tên: " . $product['name'] . ", Giá: $" . $product['price'] . ", Số lượng: " . $product['quantity'] . "<br>";
    }
}
displayProduct($products);
function calculateTotalValue($products)
{
    $totalValue = 0;
    foreach ($products as $product) {
        $totalValue += $product['price'] * $product['quantity'];
    }
    return $totalValue;
}
echo "Tổng giá trị của tất cả sản phẩm: $" . calculateTotalValue($products) . "\n";


?>