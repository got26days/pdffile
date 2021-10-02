<?php 
require_once('./PdfPage.php');

class pageCreator{

	protected $table;
	protected $type;
	protected $pageSize;
	protected $emptySpace;

	public function __construct($table, $type = 1)
	{
		$this->table = $table;
		$this->type = $type;
		if($type == 1){
			$this->pageSize = 22;
			$this->emptySpace = 8;
		}
		if($type == 2){
			$this->pageSize = 20;
			$this->emptySpace = 10;
		}
	}

	public function create(){

		

		$createZone = new PdfZone($this->pageSize);
		$page = $createZone->createPage();
	
		foreach($this->table as $part) {

			$totalInBlock = count($part['data']);

			// Если таблица не влазит на эту страницу, то перенос
			// Не пероносить, если меньше половины пусто 
			// значение 8 тип 1
			// значение 10 тип 2
			if($page->getSize() < $this->emptySpace){
				if($totalInBlock + 1 > $page->getSize()){
					$page = $createZone->createPage();
				}
			}

			if($this->type == 1){
				$page->addElement($part['title']);
			}
			if($this->type == 2){
				$page->addKey($part['title']);
			}
			
		
			foreach($part['data'] as $row){
		
				if($page->getSize() == 0 and $totalInBlock > 0){
					$page = $createZone->createPage();
					if($this->type == 1){
						$page->addElement($part['title']);
					}
					if($this->type == 2){
						$page->addKey($part['title']);
					}
				}
				if($this->type == 1){
					$page->addElement($row);
				}
				if($this->type == 2){
					$page->addElementToKey($row, $part['title']);
				}
				$totalInBlock--;
	
			}
		}

		return $createZone->getPages();

	}
}