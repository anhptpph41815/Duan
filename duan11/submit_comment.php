
<?php
require_once "database/config.php";
require_once "database/dbhelper.php";
require_once "details.php";

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Xử lý dữ liệu gửi từ form
if ($_SERVER["REQUEST_METHOD"] == "product") {
    $username = $product['username'];
    $comment = $product['comment'];

    // Chuẩn bị truy vấn SQL để chèn bình luận mới vào bảng
    $sql = "INSERT INTO comment (username, text) VALUES ('$username', '$comment')";

    // Thực thi truy vấn
    if ($conn->query($sql) === TRUE) {
        echo "Bình luận đã được thêm thành công!";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

?>