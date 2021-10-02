<?php 
require_once('./PdfPage.php');

class pageCreator{

	protected $table;

	public function __construct($table)
	{
		$this->table = $table;
	}

	public function create(){

		$rowsPages = [];

		$page = new PdfPage(0);

		$lastTable = count($this->table);

		foreach($this->table as $key => $part) {

			$totalInBlock = count($part['data']);
		
			// Если таблица не влазит на эту страницу, то перенос
			if($totalInBlock + 1 > $page->getSize()){
				if(!$page->getEmpty()){
					$rowsPages[] = $page->getElements();
				}
				$page = new PdfPage(0);
				$page->addElement($part['title']);
			} else {
				$page->addElement($part['title']);
			}
		
			foreach($part['data'] as $row){
		
				if($page->getSize() == 0 and $totalInBlock > 0){
					$rowsPages[] = $page->getElements();
					$page = new PdfPage(0);
					$page->addElement($part['title']);
				}
		
				$page->addElement($row);
				$totalInBlock--;
		
				if($totalInBlock == 0 and $lastTable == ($key + 1)){
					$rowsPages[] = $page->getElements();
					break;
				}
			}
		}

		return $rowsPages;
	}

}