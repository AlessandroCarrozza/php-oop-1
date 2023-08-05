<?php

class Movie {
    public $title;
    public $exitDate;
    public $director;
    public $genres;
    public $language;


    function __construct($_title, $_exitDate, $_director, array $_genres, $_language){
        $this->title = $_title;
        $this->exitDate = $_exitDate;
        $this->director = $_director;
        $this->genres = $_genres;
        $this->language = $_language;
    }

    public function getGenres() {
        return implode(", " , $this->genres);
    }


    public function showInfo() {

        echo $this->title . " - " . $this->exitDate . " - " .  $this->director . " - " . $this->language . " - " . $this->getGenres();
    }
}

?>