<?php
// Khởi động phiên làm việc
session_start();

// Hủy bỏ tất cả các biến phiên làm việc
$_SESSION = array();

// Hủy bỏ phiên làm việc
session_destroy();

// Chuyển hướng đến trang đăng nhập hoặc trang chính 
echo "<script>window.open('../index.php','_self')</script>";
exit;
?>