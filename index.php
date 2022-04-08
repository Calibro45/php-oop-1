<?php 

class Movies {

    public $title;
    public $genre;
    public $director;
    public $length;
    public $overview;
};

$movie = new Movies();
$movie -> title = 'Il signore degli anelli - La compagnia dell\' anello';
var_dump($movie);