CREATE DATABASE fut_champions;

USE fut_champions;

CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    nationality_id INT,
    club_id INT,
    position VARCHAR(50),
    rating INT,
    FOREIGN KEY (nationality_id) REFERENCES nationalities(nationality_id),
    FOREIGN KEY (club_id) REFERENCES clubs(club_id)
);

CREATE TABLE clubs (
    club_id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE nationalities (
    nationality_id INT AUTO_INCREMENT PRIMARY KEY,
    photo
    nom VARCHAR(100) NOT NULL
);


