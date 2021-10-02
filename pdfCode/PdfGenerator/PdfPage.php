<?php
namespace PdfGenerator;

class PdfPage{

	protected $size;
	protected $elements;
	protected $isEmpty;

	public function __construct($pageSize)
	{
		$this->size = $pageSize;
		$this->elements = [];
	}
	
	public function getElements(){
		return $this->elements;
	}

	public function getSize(){
		return $this->size;
	}

	public function addElement($element){
		array_push($this->elements, $element);
		$this->size--;
		return $this->elements;
	}

	public function addElementToKey($element, $key){
		$this->elements[$key][] = $element;
		$this->size--;
		return $this->elements;
	}

	public function addKey($key){
		$this->elements[$key] = [];
		$this->size--;
	}

}

class PdfZone {

	protected $pages;
	protected $pageSize;

	public function __construct($pageSize)
	{
		$this->pages = [];
		$this->pageSize = $pageSize;
	}

	public function createPage(){
		$this->pages[] = new PdfPage($this->pageSize);
		return end($this->pages);
	}

	public function getPages(){

		$newArray = [];

		foreach($this->pages as $page){

			$elements = $page->getElements();

			foreach($elements as $key => $elem){
				if(count($elem) == 0){
					unset($elements[$key]);
				}
			}

			$newArray[] = $elements;
		}

		return $newArray;
	}
}