CREATE DATABASE DESASTRE;
USE DESASTRE;

CREATE USER 'FATECPROJ2'@'%' IDENTIFIED BY 'FATEC2SEM';
GRANT ALL PRIVILEGES ON * . * TO 'FATECPROJ2'@'%';
FLUSH PRIVILEGES;