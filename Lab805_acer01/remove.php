<?php

include_once "connect.php";

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST["ma"]) && ($_POST["ma"] > 0)) {
    $id = (int) $_POST["ma"];

    $sqlDelete = "DELETE FROM tbl_Sanpham WHERE ma = $ma";
    echo "<br> SQL thuần: ". $sqlDelete;
    $connectMysql->exec($sqlDelete);


    echo "<br>Xóa sản phẩm thành công";
    echo "<a href = 'index.php'>Quay về trang chủ</a>";

}else{
    echo "Dữ liệu gửi đi không hợp lệ";
    exit;
}
?>