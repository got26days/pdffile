<?php

class PdfPage{

	protected $page;
	protected $size;
	protected $elements;
	protected $isEmpty;

	public function __construct($page)
	{
		$this->page = $page;
		$this->size = 22;
		$this->elements = [];
		$this->isEmpty = true;
	}

	public function createPage(){
		return $this->page;
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