<?php

class Track 
{

    public $time= null;
    public $volume = null;
    public $title = null;

    public function __construct($title)
    {
        $this->title = $title;
        $title = 'name';
        $this->$title;
        
    }
    
    public function pause()
    {
        
    }
    
    public function play()
    {
        
    }
}