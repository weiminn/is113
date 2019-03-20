drop database if exists week11;

create database week11;
use week11;

CREATE TABLE IF NOT EXISTS book (
    title       VARCHAR(128)  NOT NULL,
    isbn13        CHAR(13) NOT NULL,
    price      INT NOT NULL,
    PRIMARY KEY(isbn13)
);

INSERT INTO book (title, isbn13, price) VALUES ('Modern PHP', '1234567890123', '88');
INSERT INTO book (title, isbn13, price) VALUES ('PHP Cookbook', '3214567890456', '99');

CREATE TABLE IF NOT EXISTS person (
    id           INT NOT NULL AUTO_INCREMENT,
    name        VARCHAR(128)  NOT NULL,
    gender      CHAR(2) NOT NULL,
    age   		INT NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO person (name, gender, age) VALUES ('Amy', 'F', '28');
INSERT INTO person (name, gender, age) VALUES ('Bill', 'M', '18');
INSERT INTO person (name, gender, age) VALUES ('Charles', 'M', '17');
INSERT INTO person (name, gender, age) VALUES ('Doraemon', 'F', '32');

CREATE TABLE IF NOT EXISTS course (
    id           INT NOT NULL AUTO_INCREMENT,
    title        VARCHAR(128)  NOT NULL,
    section      CHAR(3) NOT NULL,
    instructor   VARCHAR(128) NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO course (title, section, instructor) VALUES ('Web Application Development', 'G1', 'KYONG JIN SHIM');
INSERT INTO course (title, section, instructor) VALUES ('Web Application Development', 'G2', 'KYONG JIN SHIM');
INSERT INTO course (title, section, instructor) VALUES ('Web Application Development', 'G3', 'KYONG JIN SHIM');
INSERT INTO course (title, section, instructor) VALUES ('Web Application Development', 'G4', 'DAVID LO');
INSERT INTO course (title, section, instructor) VALUES ('Web Application Development', 'G5', 'DAVID LO');
INSERT INTO course (title, section, instructor) VALUES ('Web Application Development', 'G6', 'DAVID LO');
INSERT INTO course (title, section, instructor) VALUES ('Web Application Development', 'G7', 'LWIN KHIN SHAR');
INSERT INTO course (title, section, instructor) VALUES ('Web Application Development', 'G8', 'LWIN KHIN SHAR');
INSERT INTO course (title, section, instructor) VALUES ('Web Application Development', 'G9', 'KYONG JIN SHIM');