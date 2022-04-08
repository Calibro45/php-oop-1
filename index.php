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

$movie = new Movies('il signore degli anelli - la compagnia dell\'anello', 'Fantasy', 'Peter Jackson', '178 minuti', 2001);
var_dump($movie);