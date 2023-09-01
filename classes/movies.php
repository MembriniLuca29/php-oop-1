<?php
class movies {
    public $title;
    public $duration;
    public $regia;

    public function __construct($title, $duration, $regia, )
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->regia = $regia;
        
    }
    public function details()
    {
        echo "Title: " . $this->title . "<br>";
        echo "Duration: " . $this->duration . "<br>";
        echo "Regia: " . $this->regia . "<br>";
    }
}