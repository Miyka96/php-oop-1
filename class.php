<?php
class Film{
    public $title;
    public $author;
    public $year;
    public $img;

    function __construct(string $_title, string $_author, int $_year, string $_img)
    {
        $this->title=$_title;
        $this->author=$_author;
        $this->year=$_year;
        $this->img=$_img;
    }

    public function getFullDescription(){
        return $this->title.' di '.$this->author.'<br>Anno '.$this->year . ' <br> <div class="img_wrapper"> <img src='.$this->img.'> </div>';
    }
}