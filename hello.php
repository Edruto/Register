<?php


class Movie {
    
    public $name;
    public $duree;
    public $dateSortie;
    public $desc;
    
    public function __construct($name = "")
    {
        $this->name = $name;    
    }
    
    
    public function GetName()
    {
        return $this->name;
    }
    
    public function SetName($name = "")
    {
        $this->name = $name;
    }
    
}

$movie = new Movie("Min film");
git add
echo "Film : $name";
