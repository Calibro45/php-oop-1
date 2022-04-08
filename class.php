<?php 

class Movies {

    private $title;
    private $poster; 
    private $genre;
    private $director;
    private $length;
    private $year;

    public function __construct(string $_title, string $_genre, string $_director, string $_length, int $_year) {
        $this -> title = $_title;
        $this -> genre = $_genre;
        $this -> director = $_director;
        $this -> length = $_length;
        $this -> year = $_year;
    }

    public function setPoster(string $posterPath) {
        $this -> poster = 'https://image.tmdb.org/t/p/w342' . $posterPath;
    }

    public function getTitle() {
        return $this -> title; 
    }

    public function getGenre() {
        return $this -> genre; 
    }

    public function getDirector() {
        return $this -> director; 
    }

    public function getLength() {
        return $this -> length; 
    }

    public function getYear() {
        return $this -> year; 
    }

    public function getPoster() {
        return $this -> poster;
    }

};

$movie1 = new Movies('Il signore degli anelli - la compagnia dell\'anello', 'Fantasy', 'Peter Jackson', '178 minuti', 2001);
$movie1 -> setPoster('/xvjOBWfm32skiwIAU2iocb6fyC8.jpg');
//var_dump($movie);

$movie2 = new Movies('Il signore degli anelli - Le due torri', 'Fantasy', 'Peter Jackson', '179 minuti', 2002);
$movie2 -> setPoster('/fVKewiBPcY2dQujYEsnQmQ7lfRZ.jpg');
//var_dump($movie2);

$movie3 = new Movies('Il signore delgi anelli - Il ritorno del Re', 'Fantasy', 'Peter Jackson', '200 minuti', 2003);
$movie3 -> setPoster('/96XilLzI7bijsCG4l7oW6I62oad.jpg');
//var_dump($movie3);

function pushMovies($movie_1, $movie_2, $movie_3) {
    $movieCatalog =[];
    array_push($movieCatalog, $movie_1, $movie_2, $movie_3);
    return $movieCatalog;
};

$moviesCat = pushMovies($movie1, $movie2, $movie3);
//var_dump($moviesCat);

