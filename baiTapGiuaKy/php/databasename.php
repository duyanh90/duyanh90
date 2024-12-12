<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'qlsv_giapngocduyanh';

// Kết nối đến MySQL
$conn = new mysqli($host, $user, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die('Kết nối thất bại: ' . $conn->connect_error);
}
?>
