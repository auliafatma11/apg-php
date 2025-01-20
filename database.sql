-- Tabel jabatan
CREATE DATABASE apg;
USE apg;

CREATE TABLE jabatan(
id_jabatan INT(5) NOT NULL AUTO_INCREMENT,
nama_jabatan VARCHAR(20) NOT NULL,
PRIMARY KEY(id_jabatan)
);

INSERT INTO jabatan (nama_jabatan) 
VALUES ("Direktur");

-- Tabel pegawai
CREATE DATABASE apg;
USE apg;

CREATE TABLE pegawai(
id_pegawai INT(5) NOT NULL AUTO_INCREMENT,
nama_pegawai VARCHAR(30) NOT NULL,
jenis_kelamin VARCHAR(30) DEFAULT NULL,
tgl_lahir DATE DEFAULT NULL,
foto VARCHAR(50) DEFAULT NULL,
keterangan TEXT,
id_jabatan INT(5) DEFAULT NULL,
PRIMARY KEY(id_pegawai)
);

INSERT INTO pegawai (nama_pegawai, jenis_kelamin, tgl_lahir, foto, keterangan, id_jabatan) 
VALUES ("Sella ayunia","P","2007-10-19", "user1.png", "", 1);

-- tabel user
CREATE DATABASE apg;
USE apg;

CREATE TABLE user(
id_user INT(5) NOT NULL AUTO_INCREMENT,
nama_lengkap VARCHAR(30) NOT NULL,
username VARCHAR(20) DEFAULT NULL,
password VARCHAR(50) DEFAULT NULL,
PRIMARY KEY(id_user)
);

INSERT INTO pegawai (nama_lengkap, username, password) 
VALUES ("Sella ayunia","admin", "abcdef");