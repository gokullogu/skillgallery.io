use skillgallerydatabase;

CREATE TABLE users(username VARCHAR(100),password VARCHAR(100),email VARCHAR(100),
create_datetime DATETIME);

SELECT * FROM users;

CREATE TABLE cert(id int(10) PRIMARY KEY AUTO_INCREMENT ,filename VARCHAR(100),filetype VARCHAR(100),filesize INT(10));

SELECT * FROM cert;

CREATE TABLE exam(
  id int(10) PRIMARY KEY AUTO_INCREMENT,
  filename VARCHAR(100),
  filetype VARCHAR(100),
  filesize INT(10)
);

DELETE FROM users;

