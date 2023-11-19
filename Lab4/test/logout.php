<?php
session_start();

// Hủy session và xóa cookie nếu có
$_SESSION = array();
session_destroy();
setcookie('username', '', time() - 3600);

// Chuyển hướng đến trang login.php
header("Location: login.php");
exit();
?>
