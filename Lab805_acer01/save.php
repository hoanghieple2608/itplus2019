<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 12/27/2019
 * Time: 6:43 PM
 */

include_once "connect.php";


echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST["ten"]) && isset($_POST["gia"]) ) {
    $sql = "INSERT sinhvien(ten, gia, number, year, mode) VALUES('".$_POST["ten"]."', '".$_POST["gia"]."', '".$_POST["number"]."','".$_POST["year"]."', '".$_POST["mode"]."')";
    echo $sql;
    $test = $connectMysql->exec($sql);
    var_dump($test);
    header("Location: index.php");
    exit;

}else {
    echo "dữ liệu không hợp lệ";
}