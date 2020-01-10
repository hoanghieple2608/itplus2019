<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include_once "connect.php";

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST["ma"]) && ($_POST["ma"] > 0)) {
    $ma = (int) $_POST["ma"];
    $ten = $_POST["ten"];
    $gia = $_POST["gia"];
    $number = $_POST["so_luong"];
    $year = $_POST["nam_san_xuat"];
    $hang = $_POST["hang"];

    $sqlUpdate = "UPDATE tbl_Sanpham SET ten = '$ten', gia = '$gia', number = '$so_luong', year = '$nam_san_xuat', hang = '$hang' WHERE ma = $ma";
    echo "<br> SQL thuần: ". $sqlUpdate;

    //Bước 1 prepare mysql
    $stmt = $connectMysql->prepare($sqlUpdate);

    //Bước 2 thực hiện querry
    $stmt->execute();

    echo "<br>". $stmt->rowCount(). "Bản ghi cập nhật thành công";
    echo "<a href = 'index.php'>Qauy về trang chủ</a>";

}else{
    echo "Dữ liệu gửi đi không hợp lệ";
    exit;
}
?>
</body>
</html>