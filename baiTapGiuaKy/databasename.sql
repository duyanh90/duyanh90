CREATE DATABASE qlsv_giapngocduyanh;

USE qlsv_giapngocduyanh;

CREATE TABLE table_students (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `fullname` VARCHAR(255) NOT NULL,
    `dob` DATE NOT NULL,
    `gender` INT NOT NULL CHECK (gender IN (0, 1)),
    `hometown` VARCHAR(255) NOT NULL,
    `level` INT NOT NULL CHECK (level IN (0, 1, 2, 3)),
    `group` INT NOT NULL CHECK (`group` IN (1, 2, 3, 4, 5, 6, 7, 8, 9))
);
