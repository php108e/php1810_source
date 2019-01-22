create database Dienthoai;

	create table dienthoai(
		ma_dienthoai int(11) primary key Auto_increment,
		ma_hang int(20),
		ten_dienthoai varchar(255),
		mau_sac varchar(255),
		gia_dienthoai int(11),
		mo_ta text,
		ngay_dang datetime,
		trang_thai bit


		)
	CREATE TABLE hang_dienthoai(
    ma_hang int(20) FOREIGN KEY (ma_hang) REFERENCES dienthoai(ma_hang),
    ten_hang varchar(255)
)


	ALTER TABLE dienthoai ADD FOREIGN KEY (`ma_hang`) REFERENCES hang_dienthoai(`ma_hang`)  //cách làm khóa ngoại ở trong bảng điện thoại