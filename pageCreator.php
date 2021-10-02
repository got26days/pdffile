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
			$this->pageSize = 21;
			$this->emptySpace = 8;
		}
	}

	public function create(){

		$createZone = new PdfZone($this->pageSize);
		$page = $createZone->createPage(); 
	
		foreach($this->table as $part) {

			$totalInBlock = count($part['data']);

			if($page->getSize() < $this->emptySpace){
				if($totalInBlock + 1 > $page->getSize()){
					$page = $createZone->createPage();
				}
			}

			$page->addElement($part['title']);
		
			foreach($part['data'] as $row){
		
				if($page->getSize() == 0 and $totalInBlock > 0){
					$page = $createZone->createPage();
					$page->addElement($part['title']);
				}
			
				$page->addElement($row);
				$totalInBlock--;
	
			}
		}
		return $createZone->getPages();
	}

	public function createHard(){
		

		$createZone = new PdfZone($this->pageSize);
		$page = $createZone->createPage(); 

		foreach($this->table as $table){
			$totalInBlockTable = 0;
			foreach($table['blocks'] as $block){
				$totalInBlockTable += (count($block['data']) + 1);
			}

			if($page->getSize() < $this->emptySpace){
				if($totalInBlockTable + 1 > $page->getSize()){
					$page = $createZone->createPage();
				}
			}

			$page->addKey($table['title']);

			foreach($table['blocks'] as $block){

				$totalInBlock = count($block['data']);

				if($page->getSize() < $this->emptySpace){
					if($totalInBlock + 1 > $page->getSize()){
						$page = $createZone->createPage();
					}
				}

				if($block['title'] != null){
					$page->addElementToKey($block['title'], $table['title']);
				}

				foreach($block['data'] as $row){
		
					if($page->getSize() == 0 and $totalInBlock > 0){
						$page = $createZone->createPage();
						$page->addKey($table['title']);

					}

					$page->addElementToKey($row, $table['title']);

					$totalInBlock--;
					$totalInBlockTable--;
				}
			}

		}

		return $createZone->getPages();

	}
}