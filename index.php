
<?php

class Movie {
    public $title;
    public $exitDate;
    public $director;
    public $genre;
    public $language;


    function __construct($_title, $_exitDate, $_director, $_genre, $_language){
        $this->title = $_title;
        $this->exitDate = $_exitDate;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->language = $_language;
    }
}