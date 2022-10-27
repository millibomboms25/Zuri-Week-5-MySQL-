<?php
include "config.php";

$sql ="CREATE TABLE Students (
    id INT (9) AUTO_INCREMENT PRIMARY KEY,
    full_names VARCHAR (300) NOT NULL,
    country VARCHAR(30)  NOT NULL,
    email VARCHAR(40) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    password VARCHAR (10) NOT NULL
    )";






?>