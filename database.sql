CREATE TABLE tb_paket (
	pak_id TINYINT(3) NOT NULL AUTO_INCREMENT,
	pak_nama VARCHAR(50) NOT NULL,
	pak_harga INT(12) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(pak_id)
);
CREATE TABLE tb_pelanggan (
	pel_id TINYINT(3) NOT NULL AUTO_INCREMENT,
	pak_id TINYINT(3) NOT NULL,
	user_full_name VARCHAR(100) DEFAULT NULL,
	user_alamat TEXT NOT NULL,
	user_hp CHAR(12) NOT NULL,
	user_ktp VARCHAR(50) NOT NULL,
	user_id TINYINT(3) NOT NULL,
	pel_aktif enum("Y",'N'),
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(pel_id),
	UNIQUE KEY(pak_id),
	UNIQUE KEY(user_id)
);
CREATE TABLE tb_users (
	user_id TINYINT(3) NOT NULL AUTO_INCREMENT,
	user_email VARCHAR(50) NOT NULL,
	user_password VARCHAR(100) NOT NULL,
	user_full_name VARCHAR(100) DEFAULT NULL,
	user_alamat TEXT NOT NULL,
	user_hp CHAR(12) NOT NULL,
	user_role TINYINT(2) NOT NULL,
	user_aktif TINYINT(2) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_email)
);
INSERT INTO
	tb_users
VALUES
	(
		1,
		'admin@gmail.com',
		'*4ACFE3202A5FF5CF467898FC58AAB1D615029441',
		'Administrator',
		'Medan',
		'085277678970',
		'01',
		'02',
		'2023-11-03 03:40:43',
		NULL
	);