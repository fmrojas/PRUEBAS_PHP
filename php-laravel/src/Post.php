<?php
namespace senasoftPHP;
class Post{
private $coment;
private $title;
private $author;

	public function __construct(Author $author, $title, $coment){
		$this->coment=$coment;
		$this->title=$title;
		$this->author=$author;
	}

	public function getPost(){
		return $this->coment;
	}
	public function getAutor(){
		return 'By '.$this->author->getFirstName();
	}
}

?>