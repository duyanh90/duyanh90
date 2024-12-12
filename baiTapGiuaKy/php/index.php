<?php
include 'db.php';

// Kiểm tra nếu có từ khóa tìm kiếm
$searchKeyword = '';
if (isset($_POST['search'])) {
    $searchKeyword = $_POST['search'];
    $sql = "SELECT * FROM table_students WHERE fullname LIKE '%$searchKeyword%' OR hometown LIKE '%$searchKeyword%'";
} else {
    // Nếu không có tìm kiếm, lấy tất cả sinh viên
    $sql = "SELECT * FROM table_students";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: linear-gradient(120deg, #f6d365, #fda085);
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
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
            text-align: center;
        }
        form {
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
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
        td a.btn{
            padding: 8px 16px;
            text-decoration: none;
            color: white;
            text-align: center;
        }
        .editadd{
            padding: 8px 16px;
            margin-right: 10px;
            border: 1px solid black;
            background-color: cadetblue;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Danh sách sinh viên</h1>

<!-- Form tìm kiếm -->
<form action="index.php" method="POST">
    <label for="search">Tìm kiếm sinh viên:</label>
    <input type="text" id="search" name="search" value="<?= htmlspecialchars($searchKeyword) ?>" placeholder="Nhập tên hoặc quê quán">
    <button type="submit">Tìm kiếm</button>
</form>

<!-- Bảng danh sách sinh viên -->
<table>
    <tr>
        <th>ID</th>
        <th>Họ và tên</th>
        <th>Ngày sinh</th>
        <th>Giới tính</th>
        <th>Quê quán</th>
        <th>Trình độ</th>
        <th>Nhóm</th>
        <th>Hành động</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) : ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['fullname'] ?></td>
        <td><?= $row['dob'] ?></td>
        <td><?= $row['gender'] == 1 ? 'Nam' : 'Nữ' ?></td>
        <td><?= $row['hometown'] ?></td>
        <td>
            <?= $row['level'] == 0 ? 'Tiến sĩ' : ($row['level'] == 1 ? 'Thạc sĩ' : ($row['level'] == 2 ? 'Kỹ sư' : 'Khác')) ?>
        </td>
        <td>Nhóm <?= $row['group'] ?></td>
        <td>
            <a class="btn" href="edit.php?id=<?= $row['id'] ?>">Sửa</a>
            <a class="btn" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<a class="editadd" href="add.php">Thêm mới sinh viên</a>

</body>
</html>
