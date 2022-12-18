<?php
include_once __DIR__ . ('/movies.php');

$movie1 = new Movie ('Pulp Fiction', rand(1,10), 1994);

var_dump ($movie1) ;
echo $movie1 -> nomeFilm; 
echo $movie1 -> voto; 
echo $movie1 -> annoUscita;

echo $movie1->howIs();
var_dump ($movie1);



?>