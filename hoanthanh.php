<?php
session_start();
// Xóa giỏ hàng sau khi hoàn tất
unset($_SESSION['cart_backup']);
unset($_SESSION['user_info']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Hàng Thành Công</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .primary-btn {
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .primary-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h2>Đặt Hàng Thành Công!</h2>
<p>Cảm ơn bạn đã mua hàng. Chúng tôi sẽ liên hệ bạn trong thời gian sớm nhất!</p>
<a href="index.php" class="primary-btn">Quay Lại Trang Chủ</a>

</body>
</html>
