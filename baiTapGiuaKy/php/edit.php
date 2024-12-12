<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM table_students WHERE id = $id";
    $result = $conn->query($sql);
    $student = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $hometown = $_POST['hometown'];
    $level = $_POST['level'];
    $group = $_POST['group'];

    $sql = "UPDATE table_students
            SET fullname = '$fullname', dob = '$dob', gender = $gender, hometown = '$hometown', level = $level, `group` = $group
            WHERE id = $id";
    $conn->query($sql);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa thông tin sinh viên</title>
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
    border-radius: 4px;;
}
button[type=submit]{
    width: 100px;
    height: 30px;
    border-radius: 30px;
}
    </style>
</head>
<body>
    <h1>Sửa thông tin sinh viên</h1>
    <form method="POST">
        <label>Họ và tên: <input type="text" name="fullname" value="<?= $student['fullname'] ?>" required></label><br>
        <label>Ngày sinh: <input type="date" name="dob" value="<?= $student['dob'] ?>" required></label><br>
        <label>Giới tính: <input type="radio" name="gender" value="1" <?= $student['gender'] == 1 ? 'checked' : '' ?>> Nam
            <input type="radio" name="gender" value="0" <?= $student['gender'] == 0 ? 'checked' : '' ?>> Nữ
        </label><br>
        <label>Quê quán: <input type="text" name="hometown" value="<?= $student['hometown'] ?>" required></label><br>
        <label>Trình độ:
            <select name="level">
                <option value="0" <?= $student['level'] == 0 ? 'selected' : '' ?>>Tiến sĩ</option>
                <option value="1" <?= $student['level'] == 1 ? 'selected' : '' ?>>Thạc sĩ</option>
                <option value="2" <?= $student['level'] == 2 ? 'selected' : '' ?>>Kỹ sư</option>
                <option value="3" <?= $student['level'] == 3 ? 'selected' : '' ?>>Khác</option>
            </select>
        </label><br>
        <label>Nhóm:
            <select name="group">
                <option value="1" <?= $student['group'] == 1 ? 'selected' : '' ?>>Nhóm 1</option>
                <option value="2" <?= $student['group'] == 2 ? 'selected' : '' ?>>Nhóm 2</option>
                <option value="3" <?= $student['group'] == 1 ? 'selected' : '' ?>>Nhóm 3</option>
                <option value="4" <?= $student['group'] == 1 ? 'selected' : '' ?>>Nhóm 4</option>
                <option value="5" <?= $student['group'] == 1 ? 'selected' : '' ?>>Nhóm 5</option>
                <option value="6" <?= $student['group'] == 1 ? 'selected' : '' ?>>Nhóm 6</option>
                <option value="7" <?= $student['group'] == 1 ? 'selected' : '' ?>>Nhóm 7</option>
                <option value="8" <?= $student['group'] == 1 ? 'selected' : '' ?>>Nhóm 8</option>
                <option value="9" <?= $student['group'] == 1 ? 'selected' : '' ?>>Nhóm 9</option>
            </select>
        </label><br>
        <button type="submit">Lưu</button>
    </form>
</body>
</html>
