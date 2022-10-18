<?php
// connect to mysqli
$db = mysqli_connect('localhost', 'root', 'Root') or die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database 
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

// insert data into the movie table
$query = 'INSERT INTO movie
	(movie_id, movie_name, movie_type, movie_year, movie_leadactor, movie_director)
VALUES
	(4, "Titane", 2, 2021, 7, 8),
	(5, "Madres paralelas", 2, 2021, 10, 9),
	(6, "Dolor y Gloria", 2, 2019, 10, 9)'; 
mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the movietype table
$query = 'INSERT INTO movietype 
	(movietype_id, movietype_label)
VALUES
	(9,"Musical"),
	(10, "West"),
	(11, "Suspense")';
mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the people table
$query = 'INSERT INTO people
	(people_id, people_fullname, people_isactor, people_isdirector) 
VALUES
	(7, "Agathe Rouselle", 1, 0),
	(8, "Julia Ducournau", 0, 1),
	(9, "Pedro Almodóvar", 0, 1),
	(10,"Penélope Cruz", 1, 0)'; 
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';
?>