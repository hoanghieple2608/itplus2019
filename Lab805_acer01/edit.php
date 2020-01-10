<?php

include_once "connect.php";

if (!isset($_GET["ma"]) || ($_GET["ma"] < 1)) {
    echo "Mã sản phẩm không hợp lệ";
    exit;
}
var_dump($connectMysql);
$sql = "SELECT * FROM tbl_Sanpham WHERE ma=". (int) $_GET["ma"];
echo "<br>".$sql;
$stmt = $connectMysql->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll();
if (isset($data[0])) {
    $tbl_Sanpham = $data[0];
} else {
    echo "không lấy được data";
    exit;
}
echo "<pre>";
print_r($data);
echo "</pre>";
if (!isset($tbl_Sanpham["ma"]) || ($tbl_Sanpham["ma"] < 1)) {
    echo "Dữ liệu không hợp lệ";
    exit;
}
echo "<pre>";
print_r($tbl_Sanpham);
echo "</pre>";
?>

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
    <div class="container">
        <h1>Cập nhật sản phẩm</h1>
        <div class="row">
            <div class="col-md-12">
                <form name="create" action="updatedb.php" method="post">
                    <input type="hidden" name="ma" value="<?php echo $tbl_Sanpham["ma"] ?>" />

                    <div class="form-group">
                        <label>Tên sản phẩm :</label>
                        <input type="text" name="ten" class="form-control" value="<?php echo $tbl_Sanpham["ten"] ?>">
                    </div>
                    <div class="form-group">
                        <label>Giá sản phẩm :</label>
                        <input type="text" name="gia" class="form-control" value="<?php echo $tbl_Sanpham["gia"] ?>">
                    </div>
                    <div class="form-group">
                        <label>Số lượng :</label>
                        <input type="text" name="number" class="form-control" value="<?php echo $tbl_Sanpham["so_luong"] ?>">
                    </div>
                    <div class="form-group">
                        <label>Năm sản xuất :</label>
                        <input type="text" name="year" class="form-control" value="<?php echo $tbl_Sanpham["nam_san_xuat"] ?>">
                    </div>
                    <div class="form-group">
                        <label>Hãng :</label>
                        <input type="text" name="mode" class="form-control" value="<?php echo $tbl_Sanpham["hang"] ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
