drop database if exists week12;
create database week12;
use week12;

CREATE TABLE IF NOT EXISTS user (
  username varchar(50) NOT NULL,
  hashed_password varchar(256) NOT NULL,
  PRIMARY KEY (username)
);