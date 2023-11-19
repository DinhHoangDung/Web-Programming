<?php
session_start();

// Kiểm tra nếu người dùng đã đăng nhập
// if (isset($_SESSION['username'])) {
//     header("Location: info.php");
//     exit();
// }

if (isset($_SESSION['username'])) {
    $msg = "";
    header('location: info.php');
} else {
    if (isset($_COOKIE['username'])) {
        $msg = "";
        header('location: info.php');
    }
}

// Kiểm tra nếu form đăng nhập được submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra username và password (thực hiện kiểm tra thực tế ở đây)
    // Nếu đúng, đăng nhập và chuyển hướng đến trang info.php
    if ($username == 'admin' && $password == 'password') {
        $_SESSION['username'] = $username;

        // Kiểm tra nếu checkbox "Ghi nhớ đăng nhập" được chọn
        if (isset($_POST['remember'])) {
            // Thiết lập cookie để lưu thông tin đăng nhập trong thời gian dài (ví dụ: 1 tuần)
            setcookie('username', $username, time() + 3600);
            setcookie('password', $password, time() + 3600);
        }

        header("Location: info.php");
        exit();
    } else {
        $error_message = "Đăng nhập không thành công. Vui lòng kiểm tra lại username và password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    
    <?php if (isset($error_message)): ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <label>
            <input type="checkbox" name="remember"> Ghi nhớ đăng nhập
        </label>

        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>
