
<?php

// classe Movie 
require_once __DIR__  . "./Models/Movie.php";


// creazione istanze della classe Movie
$MovieOne = new Movie("Land of Mine", "03/12/2015", "Martin Zandvliet", ["Guerra", "Drammatico"], "Tedesco");
$MovieTwo = new Movie("Titanic", "16/01/1998", "James Cameron", ["Romantico", "Drammatico", "Storico"], "Inglese");
$MovieThree = new Movie("Il talento del calabrone", "11/18/2020", "Giacomo Cimini", ["Thriller", "Mistero"], "Italiano");


// richiamare function della classe Movie
$MovieOne->showInfo();
echo "</br>";
$MovieTwo->showInfo();
echo "</br>";
$MovieThree->showInfo();

?>