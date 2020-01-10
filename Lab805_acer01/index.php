<?php

include_once "connect.php";

var_dump($connectMysql);
$sql = "SELECT * FROM tbl_sanpham";
$stmt = $connectMysql->prepare($sql);
$stmt->execute();

$data = $stmt->fetchAll();

echo "<pre>";
print_r($data);
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1>Quản lý bán hàng</h1>

        <div class="row">
            <div class="col-md-12">
                <a href="create.php" class="btn btn-primary">Thêm điện tử điện lạnh </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Năm sản xuất</th>
                        <th>Hãng</th>
                        <th>Tóm tắt sản phẩm</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($data as $i => $tbl_Sanpham) { ?>
                        <tr>
                            <td><?php echo $tbl_Sanpham["ma"] ?></td>
                            <td><?php echo $tbl_Sanpham["ten"] ?></td>
                            <td><?php echo $tbl_Sanpham["gia"] ?></td>
                            <td><?php echo $tbl_Sanpham["so_luong"] ?></td>
                            <td><?php echo $tbl_Sanpham["nam_san_xuat"] ?></td>
                            <td><?php echo $tbl_Sanpham["hang"] ?></td>
                            <td><?php echo $tbl_Sanpham["tom_tat_san_pham"] ?></td>
                            <td>
                                <a href="view.php?id=<?php echo $tbl_Sanpham["ma"] ?>" class="btn btn-success">Xem chi tiết</a>
                                <a href="edit.php?id=<?php echo $tbl_Sanpham["ma"] ?>" class="btn btn-warning">Cập nhật sản phẩm</a>
                                <a href="delete.php?id=<?php echo $tbl_Sanpham["ma"] ?>" class="btn btn-danger">Xóa sản phẩm</a>
                            </td>
                        </tr>
                    <?php } ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
