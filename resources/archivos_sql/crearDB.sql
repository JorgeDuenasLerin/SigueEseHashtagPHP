/* user Hastag
  pass hastag
  DB hastag
  */
CREATE DATABASE hastag;
CREATE USER 'hastag'@'localhost' IDENTIFIED BY 'hastag';
GRANT ALL PRIVILEGES ON hastag.* TO 'hastag'@'localhost' WITH GRANT OPTION;

use hastag;