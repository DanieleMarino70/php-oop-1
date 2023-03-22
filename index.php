<?php 

class Movie {
    public $title;
    public $desc;
    public $duration;





    public function __construct($_title, $_desc, $_duration){
        $this->title = $_title;
        $this->desc = $_desc;
        $this->duration = $_duration; 
    }



    public function getAbstract($limit = 20){
       return substr($this->desc, 0, $limit);

    }
}


$film_tarzan = new Movie("Tarzan", "Tarzan nasce nel selvaggio deserto africano e viene cresciuto dal dolce gorilla Kala.", "88 min");


var_dump($film_tarzan);






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
    <h1><?= $film_tarzan->title ?></h1>
    <p><?= $film_tarzan->desc ?></p>
    <small><?= $film_tarzan->duration ?></small>
</body>
</html>