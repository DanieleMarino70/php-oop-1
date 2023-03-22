<?php 

// Bonus 1:
// Modificare la classe Movie in modo che accetti piú di un genere.

class Genre {
 
    public $genre;

    public function __construct($_genre){
        $this->genre = $_genre;
    }

    
}

class Movie {
    public $title;
    public $desc;
    public $duration;
    public $genre;





    public function __construct($_title, $_desc, $_duration, Genre $_genre ){
        $this->title = $_title;
        $this->desc = $_desc;
        $this->duration = $_duration;
        $this->genre = $_genre;
    }



    public function getAbstract($limit = 20){
       return substr($this->desc, 0, $limit) . "...";

    }

    
}





$film_tarzan = new Movie("Tarzan", "Tarzan nasce nel selvaggio deserto africano e viene cresciuto dal dolce gorilla Kala.", "88 minuti", new Genre("Comedy, Adventure"));
$film_benvenuti_al_sud = new Movie ("Benvenuti al Sud", "Alberto Colombo, un direttore delle Poste che vive in un paesino della Brianza, viene trasferito a guidare l'ufficio postale del piccolo paese di Castellabate in seguito ad una richiesta andata non propriamente a buon fine. L'uomo, inizialmente perplesso dalla situazione, viene accolto a braccia aperte dal postino Mattia e dai colleghi, iniziando ad apprezzare le bellezze e le abitudini del piccolo centro campano.", "106 minuti", new Genre("Italian Comedy, Family"));








?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?= $film_tarzan->title ?></h2>
    <p><?= $film_tarzan->getAbstract(100) ?></p>
    <small><?= $film_tarzan->duration ?></small>
    <small><?= $film_tarzan->genre->genre ?></small>
    <hr>
    <h2><?= $film_benvenuti_al_sud->title ?></h2>
    <p><?= $film_benvenuti_al_sud->getAbstract(100) ?></p>
    <small><?= $film_benvenuti_al_sud->duration ?></small>
    <small><?= $film_benvenuti_al_sud->genre->genre ?></small>
    <hr>
</body>
</html>