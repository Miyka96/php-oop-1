<?php
class Film{
    public $title;
    public $author;
    public $year;

    function __construct(string $_title, string $_author, int $_year)
    {
        $this->title=$_title;
        $this->author=$_author;
        $this->year=$_year;
    }

    public function getFullDescription(){
        return $this->title.' '.$this->author.' '.$this->year;
    }
}