DROP DATABASE IF EXISTS gallery;
CREATE DATABASE gallery;

USE gallery;

CREATE TABLE images (
    file_name VARCHAR(64) PRIMARY KEY,
    thumb_name VARCHAR(64) NOT NULL,
    date_added DATETIME NOT NULL DEFAULT NOW()
);