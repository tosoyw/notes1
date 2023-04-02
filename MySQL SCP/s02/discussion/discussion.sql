-- Command to access MariaDB in cmd.
mysql -u root

-- Lists down the databases inside the DBMS/RDBMS
SHOW DATABASES;

-- Create a database command;
CREATE DATABASE music_db;

-- Drop Database:
DROP DATABASE music_db;

-- Select a database:
USE music_db;

-- Create Tables
-- Table columns have the following format: [column_name][data_type][other_options]
CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    full_name VARCHAR(50) NOT NULL,
    contact_number INT NOT NULL,
    email VARCHAR(50),
    address VARCHAR(50),
    PRIMARY KEY (id)
);

CREATE TABLE artists (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE albums (
    id INT NOT NULL AUTO_INCREMENT,
    album_title VARCHAR(100) NOT NULL,
    date_released DATE NOT NULL,
    artist_id INT NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT fk_albums_artist_id
        FOREIGN KEY (artist_id) REFERENCES artists(id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);

CREATE TABLE songs (
    id INT NOT NULL AUTO_INCREMENT,
    song_name VARCHAR(50) NOT NULL,
    length TIME NOT NULL,
    genre VARCHAR(50) NOT NULL,
    album_id INT NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT fk_songs_album_id
        FOREIGN KEY (album_id) REFERENCES albums(id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);

CREATE TABLE playlists (
    id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    datetime_created DATETIME NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT fk_playlists_user_id
        FOREIGN KEY (user_id) REFERENCES users(id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);

CREATE TABLE playlists_songs (
    id INT NOT NULL AUTO_INCREMENT,
    playlist_id INT NOT NULL,
    song_id INT NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT fk_playlists_songs_playlist_id
        FOREIGN KEY (playlist_id) REFERENCES playlists(id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT

    CONSTRAINT fk_playlists_songs_song_id
        FOREIGN KEY (song_id) REFERENCES songs(id)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);


-- To display all the tables in a specific database.
SHOW TABLES;

-- To remove a specific table from a database.
-- DROP TABLE <table_name>;

-- To show the details of the table in a table format.
-- DESCRIBE <table_name>;

-- ALTER TABLE 
-- To drop a column/field from a table.
-- ALTER TABLE <table_name> DROP COLUMN <field_name>;

-- To add a new field in a table.
-- ALTER TABLE <table_name> ADD <new_field> <DATA TYPE> NOT NULL;

-- To add a new field in a table in a specific placement.
-- ALTER TABLE <table_name> ADD <new_field> <DATA TYPE> NOT NULL AFTER <field_name>;

-- To change the name of a specific field in a table.
-- ALTER TABLE <table_name> CHANGE COLUMN <old_name> <new_name>