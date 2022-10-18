<?php
// connect to mysqli
$db = mysqli_connect('localhost', 'root', 'Root') or die ('Unable to connect. Check your connection parameters.');

//make sure you're using the correct database 
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));


//Create relationship between "movie_leadactor(movie)" and "people_id(people)"
$query = 'ALTER TABLE movie
	ADD CONSTRAINT FK_movie_leadactor FOREIGN KEY (movie_leadactor)
		REFERENCES people (people_id)';
mysqli_query($db,$query) or die(mysqli_error($db));

echo "Relationship created successfully";
?>