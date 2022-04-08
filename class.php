<?php 

class Movies {

    private $title;
    private $genre;
    private $director;
    private $length;
    private $year;

    public function __construct(string $_title, string $_genre, string $_director, string $_length) {
        $this -> title = $_title;
        $this -> genre = $_genre;
        $this -> director = $_director;
        $this -> length = $_length;
    }

    public function setYear($_year) {
        if(is_numeric($_year)) {
            $this -> year = $_year;
        }
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

};

$movie1 = new Movies('Il signore degli anelli - la compagnia dell\'anello', 'Fantasy', 'Peter Jackson', '178 minuti');
$movie1 -> setYear(2001);
//var_dump($movie);

$movie2 = new Movies('Il signore degli anelli - Le due torri', 'Fantasy', 'Peter Jackson', '179 minuti');
$movie2 -> setYear(2002);
//var_dump($movie2);

$movie3 = new Movies('Il signore delgi anelli - Il ritorno del Re', 'Fantasy', 'Peter Jackson', '200 minuti');
$movie3 -> setYear(2003);
//var_dump($movie3);

function pushMovies($movie_1, $movie_2, $movie_3) {
    $movieCatalog =[];
    array_push($movieCatalog, $movie_1, $movie_2, $movie_3);
    return $movieCatalog;
};

$moviesCat = pushMovies($movie1, $movie2, $movie3);
//var_dump($moviesCat);