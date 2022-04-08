<?php 

class Movies {

    public $title;
    public $genre;
    public $director;
    public $length;
    public $year;

    public function __construct(string $_title, string $_genre, string $_director, string $_length, int $_year) {
        $this -> title = $_title;
        $this -> genre = $_genre;
        $this -> director = $_director;
        $this -> length = $_length;
        $this -> year = $_year; 
    }

};

$movie = new Movies('Il signore degli anelli - la compagnia dell\'anello', 'Fantasy', 'Peter Jackson', '178 minuti', 2001);
//var_dump($movie);

$movie2 = new Movies('Il signore degli anelli - Le due torri', 'Fantasy', 'Peter Jackson', '179 minuti', 2002);
//var_dump($movie2);

$movie3 = new Movies('Il signore delgi anelli - Il ritorno del Re', 'Fantasy', 'Peter Jackson', '200 minuti', 2003);
//var_dump($movie3);

function pushMovies($movie_1, $movie_2, $movie_3) {
    $movieCatalog =[];
    array_push($movieCatalog, $movie_1, $movie_2, $movie_3);
    return $movieCatalog;
};

$movies = pushMovies($movie, $movie2, $movie3);
var_dump($movies);