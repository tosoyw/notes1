-- [ SECTION ] CRUD Operations

-- INSERTING RECORDS (Create)
-- To insert an artist in the artist table:
INSERT INTO artists(name) VALUES ("Blackpink");
INSERT INTO artists(name) VALUES ("Rivermaya");

-- To insert albums in the albums table: 
INSERT INTO albums(album_title, date_released, artist_id) VALUES ("The Album", "2020-10-02", 1);
INSERT INTO albums(album_title, date_released, artist_id) VALUES ("Trip", "1996-01-01", 2);

-- To insert songs in the songs table: 
INSERT INTO songs (song_name, length, genre, album_id) VALUES ('Ice Cream', '00:04:16', 'K-Pop', 1);
INSERT INTO songs (song_name, length, genre, album_id) VALUES ('You Never Know', '00:03:59', 'K-Pop', 1);
INSERT INTO songs (song_name, length, genre, album_id) VALUES ('Kundiman', '00:03:54', 'OPM', 2); 
INSERT INTO songs (song_name, length, genre, album_id) VALUES ('Kisapmata', '00:04:39', 'OPM', 2);


-- READ RECORDS
-- Display the title and genre of all the songs.
SELECT song_name, genre FROM songs;

-- Display all the fields from songs table.
SELECT * FROM songs;

-- Display the title of all the OPM songs.
SELECT song_name FROM songs WHERE genre = "OPM";

-- Display the title and length of the K-Pop songs that are longer than 4 minutes.
SELECT song_name, length FROM songs WHERE length > 400 AND genre = "K-Pop";


-- UPDATING RECORDS
-- Update the length of 'You Never Know' to '00:04::00'
-- Update <table_name> SET <field_name> = <value> WHERE <validation_field> = <value>;
UPDATE songs SET length = 400 WHERE song_name = "You Never Know";


-- DELETING RECORDS
-- Delete all K-Pop songs that are more than 4:00 minutes.
DELETE FROM songs WHERE genre = "K-Pop" AND length > 400;

-- Removing the WHERE clause will delete all rows.
DELETE FROM songs;