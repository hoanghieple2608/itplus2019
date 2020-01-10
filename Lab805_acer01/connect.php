<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbh";
try {
    $connectMysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connectMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo  "Kết nối thành công";
}
catch(PDOException $e)
{
    echo "Kết nối đến CSDL thất bại : " . $e->getMessage();
    die();
}