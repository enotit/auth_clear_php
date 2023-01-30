/*
 * This code was written by enotit.
 * distribution/modification/copying is free (but please mention me).
 * t.me/enotit 9.2022
 *
 */

CREATE TABLE IF NOT EXISTS users (
    id INT auto_increment primary key NOT NULL,
    active varchar(15),
    login varchar(15) NOT NULL,
    password varchar(15) NOT NULL,
    isDriver BOOL NOT NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;
