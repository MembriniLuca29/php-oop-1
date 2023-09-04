<?php
require_once __DIR__.'/data.php';
class movies {
    public $title;
    public $duration;
    public $regia;
    public $genere;

    public function __construct($title, $duration, $regia, $genere)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->regia = $regia;
        $this->genere = $genere;     
    }
    public function details()
    {
        echo "Title: " . $this->title . "<br>";
        echo "Duration: " . $this->duration . "<br>";
        echo "Regia: " . $this->regia . "<br>";
        echo "genere: " . implode(', ', $this->genere). "<br>";
    }
}