<?php 
require_once('./PdfPage.php');

class pageCreator{

	protected $table;
	protected $type;

	public function __construct($table, $type = 1)
	{
		$this->table = $table;
		$this->type = $type;
	}

	public function create(){

		$blockInPages = [];

		$createZone = new PdfZone();
		$page = $createZone->createPage();
	

		foreach($this->table as $part) {

			$totalInBlock = count($part['data']);

			// Если таблица не влазит на эту страницу, то перенос
			if($totalInBlock + 1 > $page->getSize()){
				$page = $createZone->createPage();
				if($this->type == 1){
					$page->addElement($part['title']);
				}
			} else {
				if($this->type == 1){
					$page->addElement($part['title']);
				}
			}
		
			foreach($part['data'] as $row){
		
				if($page->getSize() == 0 and $totalInBlock > 0){
					$createZone->createPage();
					if($this->type == 1){
						$page->addElement($part['title']);
					}
				}
				$page->addElement($row);
				$totalInBlock--;
	
			}
		}

		if($this->type == 1){
			return $createZone->getPages();
		}

		if($this->type == 2){
			return $blockInPages;
		}
	}

}