<?php
class PdfPage{

	protected $size;
	protected $elements;
	protected $isEmpty;

	public function __construct()
	{
		$this->size = 7;
		$this->elements = [];
		$this->isEmpty = true;
	}
	
	public function getElements(){
		return $this->elements;
	}

	public function getEmpty(){
		return $this->isEmpty;
	}

	public function getSize(){
		return $this->size;
	}

	public function getElementsTypeTwo(){
		return array_slice($this->elements, 1, count($this->elements));
	}

	public function addElement($element){

		array_push($this->elements, $element);
		$this->size--;
		$this->isEmpty = false;
		return $this->elements;

	}

	public function subSize(){
		$this->size--;
		return $this->size;
	}

}

class PdfZone {

	protected $pages;

	public function __construct()
	{
		$this->pages = [];
	}

	public function createPage(){
		$this->pages[] = new PdfPage();
		return end($this->pages);
	}

	public function getPages(){

		$newArray = [];

		foreach($this->pages as $page){
			$newArray[] = $page->getElements();
		}

		return $newArray;
	}
}