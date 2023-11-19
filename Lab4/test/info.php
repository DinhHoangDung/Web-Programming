<?php
session_start();

// Kiểm tra nếu người dùng chưa đăng nhập, chuyển hướng đến trang login.php
if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header('location: login.php');
}

// Lấy thông tin username từ session
//$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info</title>
</head>
<body>
    <h2>Thông tin người dùng</h2>
    <p>Xin chào, 
                <?php
                    if (isset($_SESSION['username'])) {
                        echo $_SESSION['username'];
                    }
                    else if (isset($_COOKIE['username'])) {
                        echo $_COOKIE['username'];
                    }
                ?>
    </p>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>
