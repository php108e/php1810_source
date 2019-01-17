CREATE DATABASE QLBH;
CREATE TABLE tbl_Sanpham
(
	ma int(11) AUTO_INCREMENT PRIMARY KEY,
	ten varchar(50) not null,
	gia int(11),
	soluong int(13),
	masx int(4),
	hang varchar(100),
	tomtat text


)ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO tbl_Sanpham
VALUES(1,"Điều hòa Electrolux",1500, 100, 2018,"Electrolux","");
