CREATE DATABASE qlbh;

CREATE TABLE tbl_Sanpham (
    ma INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ten VARCHAR(30),
    gia VARCHAR(30),
    so_luong VARCHAR(50),
    nam_san_xuat VARCHAR(50),
    hang VARCHAR (30),
    tom_tat_san_pham VARCHAR(255)
);