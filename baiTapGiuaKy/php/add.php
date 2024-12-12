<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $hometown = $_POST['hometown'];
    $level = $_POST['level'];
    $group = $_POST['group'];

    $sql = "INSERT INTO table_students (fullname, dob, gender, hometown, level , `group`)
            VALUES ('$fullname', '$dob', $gender, '$hometown', $level, $group)";
    $conn->query($sql);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sinh viên</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background:  linear-gradient(120deg, #f6d365, #fda085);
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}
table, th, td {
    border: 3px solid #ccc;
}
th, td {
    text-align: left;
    padding: 8px;
}
th {
    background-color: #f4f4f4;
    text-align: center;
}
form {
    margin-bottom: 20px;
}
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}
input, select {
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
button[type=submit]{
    width: 100px;
    height: 30px;
    border-radius: 30px;
}
    </style>
</head>
<body>
    <h1>Thêm sinh viên</h1>
    <form method="POST">
        <label>Họ và tên: <input type="text" name="fullname" required></label><br>
        <label>Ngày sinh: <input type="date" name="dob" required></label><br>
        <label>Giới tính:
            <input type="radio" name="gender" value="1" required> Nam
            <input type="radio" name="gender" value="0" required> Nữ
        </label><br>
        <label>Quê quán: <input type="text" name="hometown" required></label><br>
        <label>Trình độ:
            <select name="level">
                <option value="0">Tiến sĩ</option>
                <option value="1">Thạc sĩ</option>
                <option value="2">Kỹ sư</option>
                <option value="3">Khác</option>
            </select>
        </label><br>
        <label>Nhóm:
            <select name="group">
                <option value="1">Nhóm 1</option>
                <option value="2">Nhóm 2</option>
                <option value="3">Nhóm 3</option>
                <option value="4">Nhóm 4</option>
                <option value="5">Nhóm 5</option>
                <option value="6">Nhóm 6</option>
                <option value="7">Nhóm 7</option>
                <option value="8">Nhóm 8</option>
                <option value="9">Nhóm 9</option>
            </select>
        </label><br>
        <button type="submit">Lưu</button>
    </form>
</body>
</html>
