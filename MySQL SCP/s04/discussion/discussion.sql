-- [SECTION] Add New Records

-- Add 5 artists, 2 albums each, 2 songs per album.

-- Add 5 artists.
INSERT INTO artists(name) VALUES ("Taylor Swift");
INSERT INTO artists(name) VALUES ("Lady Gaga");
INSERT INTO artists(name) VALUES ("Justin Bieber");
INSERT INTO artists(name) VALUES ("Ariana Grande");
INSERT INTO artists(name) VALUES ("Bruno Mars");

-- Taylor Swift
INSERT INTO albums(album_title, date_released, artist_id) VALUES ("Fearless", "2008-11-11", 3);
INSERT INTO songs(song_name, length, genre, album_id) VALUES ("Fearless", "00:04:06", "Pop rock", 3);
INSERT INTO songs(song_name, length, genre, album_id) VALUES ("Love Story", "00:03:33", "Country pop", 3);

INSERT INTO albums(album_title, date_released, artist_id) VALUES ("Red", "2012-10-22", 3);
INSERT INTO songs(song_name, length, genre, album_id) VALUES ("State of Grace", "00:04:33", "Rock, alternative rock, arena rock", 4);
INSERT INTO songs(song_name, length, genre, album_id) VALUES ("Red", "00:03:24", "Country", 4);

-- Lady Gaga
INSERT INTO albums(album_title, date_released, artist_id) VALUES ("A Star Is Born", "2018-10-05", 4);
INSERT INTO songs(song_name, length, genre, album_id) VALUES ("Black Eyes", "00:03:01", "Rock and roll", 5);
INSERT INTO songs(song_name, length, genre, album_id) VALUES ("Shallow", "00:03:21", "Country, rock, folk rock", 5);	

INSERT INTO albums(album_title, date_released, artist_id) VALUES ("Born This Way", "2011-05-23", 4);
INSERT INTO songs(song_name, length, genre, album_id) VALUES ("Born This Way", "00:04:12", "Electropop", 6);

-- Justin Bieber
INSERT INTO albums(album_title, date_released, artist_id) VALUES ("Purpose", "2015-11-13", 5);
INSERT INTO songs(song_name, length, genre, album_id) VALUES ("Sorry", "00:03:12", "Dancehall-poptropical housemoombahton", 7);

INSERT INTO albums(album_title, date_released, artist_id) VALUES ("Believe", "2012-06-15", 5);
INSERT INTO songs(song_name, length, genre, album_id) VALUES ("Boyfriend", "00:04:11", "Pop", 8);

-- Ariana Grande
INSERT INTO albums(album_title, date_released, artist_id) VALUES ("Dangerous Woman", "2016-05-20", 6);
INSERT INTO songs(song_name, length, genre, album_id) VALUES ("Into You", "00:04:02", "EDM house", 9);

INSERT INTO albums(album_title, date_released, artist_id) VALUES ("Thank U, Next", "2019-02-08", 6);
INSERT INTO songs(song_name, length, genre, album_id) VALUES ("Thank U Next", "00:03:16", "Pop, R&B", 10);

-- Bruno Mars
INSERT INTO albums(album_title, date_released, artist_id) VALUES ("24K Magic", "2016-11-18", 7);
INSERT INTO songs(song_name, length, genre, album_id) VALUES ("24K Magic", "00:03:27", "Funk, disco, R&B", 11);

INSERT INTO albums(album_title, date_released, artist_id) VALUES ("Earth to Mars", "2011-09-11", 7);
INSERT INTO songs(song_name, length, genre, album_id) VALUES ("Lost", "00:03:12", "Pop", 12);


-- [SECTION] Advanced Selects
-- Exclude Records
SELECT * FROM songs WHERE id != 15;

-- Greater Than/ Lesser Than
SELECT * FROM songs WHERE id < 11;
SELECT * FROM songs WHERE id > 11;

-- Getting a specific ID (OR)
SELECT * FROM songs WHERE id=2 OR id=3 OR id=4;

-- Getting specific IDs (AND)
SELECT * FROM songs WHERE id=2 AND genre="K-Pop";

-- This command will result to an empty result.
SELECT * FROM songs WHERE id=2 AND id=3 AND id=4;


-- Getting a specific IDs (IN)
SELECT * FROM songs WHERE id IN(2, 3, 4);
SELECT * FROM songs WHERE genre IN("Pop", "K-Pop");

-- Combining Conditions
SELECT * FROM songs WHERE album_id = 4 AND id < 15;


-- Find Partial Matches
-- The "%" symbol and the "_" (underscore):
-- % represent all the characters that may exist before or after the given characters after the LIKE function.
-- _ - represents each character that exist before or after the given characters after the LIKE function.
SELECT * FROM songs WHERE song_name LIKE "%a"; -- Ends with the letter 'a'.
SELECT * FROM songs WHERE song_name LIKE "bo%"; -- Starts with the letter 'b' and 'o'.
SELECT * FROM songs WHERE song_name LIKE "%a%"; -- There is an 'a' in between.
SELECT * FROM songs WHERE song_name LIKE "__d"; -- Find the exact word with the exact characters that ends with the letter 'd'
SELECT * FROM songs WHERE song_name LIKE "___w"; -- Find the exact word with the exact characters that ends with the letter 'w'

-- Combination of % and _.
SELECT * FROM songs WHERE song_name LIKE "%__t"; -- Find a string the ends with letter 't'.
SELECT * FROM songs WHERE song_name LIKE "_o_%"; -- Find the string with an 'o' in between.


-- Sorting Records
SELECT * FROM songs ORDER BY song_name ASC; -- Ascending
SELECT * FROM songs ORDER BY song_name DESC; -- Descending


-- DISTINCT functions allow us to output/return unique fields or values.
-- Old: will return all genre.
SELECT genre FROM songs;
-- New: will return all genre once: No duplicate.
SELECT DISTINCT genre FROM songs;


-- [ SECTION ]TABLE Joins
-- Combine artists and albums tables.
SELECT * FROM artists 
    JOIN albums ON artists.id = albums.artist_id;

SELECT * FROM artists 
    JOIN albums ON artists.id = albums.artist_id
    JOIN songs ON albums.id = songs.album_id;

SELECT * FROM artists JOIN songs ON albums.id = songs.album_id;
-- ERROR 1054 (42S22): Unknown column 'albums.id' in 'on clause'

-- Select columns to be included per table.
SELECT artists.name, albums.album_title FROM artists JOIN albums ON artists.id = albums.artist_id;

-- Show artists without records on the right side of the joined table.
SELECT artists.name, albums.album_title FROM artists JOIN albums ON artists.id = albums.artist_id;

-- Show artists without records on the right side of the joined table.
SELECT * FROM artists LEFT JOIN albums ON artists.id = albums.artist_id;

-- Show artists without records on the left side of the joined table.
SELECT * FROM artists RIGHT JOIN albums ON artists.id = albums.artist_id;