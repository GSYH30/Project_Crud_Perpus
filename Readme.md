# Welcome

Untuk mengakses website nya kamu hanya mengikuti panduan ini :

## Create

kamu hanya membuat database saja di sql, ikuti tutor di bawah ini :
```bash
Buat database dengan nama 'perpustakaan' dengan '5 column' seperti di bawah ini :
```

## Buat Database
```sql
# Data base
CREATE DATABASE 'perpustakaan';
```
## Buat Table
```sql
# Buat Table
CREATE TABLE `tb_buku` (
	`id_buku` INT(12) NOT NULL AUTO_INCREMENT,
	`no_buku` INT(12) UNIQUE,
	`judul_buku` VARCHAR(30) NOT NULL,
	`type_buku` VARCHAR(30) NOT NULL,
	`genre_buku` VARCHAR(30) NOT NULL,
	PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB;
```


## Finish

Setelah membuat database simpan file ini (yang sudah di download) lalu simpan di

```sql
'D:\xampp\htdocs\Project_Crud_Perpus'