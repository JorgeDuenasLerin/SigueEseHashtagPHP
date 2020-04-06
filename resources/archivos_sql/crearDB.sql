CREATE DATABASE hastag;
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';
GRANT ALL PRIVILEGES ON hastag.* TO 'admin'@'localhost' WITH GRANT OPTION;

use hastag;