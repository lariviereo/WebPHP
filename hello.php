<?php

class Movie
{
    private $name ='Le nom du film';
    private $description = "une description";
    private $duration = 128;
    
    public function getName()
    {
        return $this->name;
    }
    public function setName($name="")
    {
        $this->name = $name;
    }
    
     public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description = "")
    {
        $this->name = $decription;
    }
    
     public function getDuration()
    {
        return $this->duration;
    }
    public function setDuration($duration = "")
    {
        $this->name = $duration;
    }
    
    public function __construct($name="",$description="",$duration=5)
    {
        $this->name = $name;
        $this->description = $description;
        $this->duration = $duration;
    } 
    public function affiche()
    {
        echo $this->getName();
        echo " || ";
        echo $this->getDescription();
        echo " || ";
        echo $this->getDuration();
    }
}
$movie = new Movie;

echo $movie->getName();
$movie=new Movie("Taxi 3","film de jaquie tunning", 70);
$movie->affiche();
