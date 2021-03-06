<?php
abstract class Book
{
    
    protected $title;
    protected  $author;
    
     function __construct($t,$a){
        $this->title=$t;
        $this->author=$a;
    }
    abstract protected function display();
}

//Write MyBook class
class MyBook{
    private $price;
    function __construct($title,$author,$price){
        $this->title=$title;
        $this->author=$author;
        $this->price=$price;
    }
    function display(){
        echo 'Title'.$this->title.'Author'.$this->author.'Price'.$this->price;
    }
}
$title=fgets(STDIN);
$author=fgets(STDIN);
$price=intval(fgets(STDIN));
$novel=new MyBook($title,$author,$price);
$novel->display();

?>