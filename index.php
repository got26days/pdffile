<?php

require_once('./PdfCreator.php');
require_once('./PdfPage.php');
$table = [
	0 => [
		'title' => [
			'name' => 'Доход',
			'plan' => '4 800 000 / 4000 шт / 80.00%	', 
			'fact' => '979 000 / 1719 шт / 16.32%',
			'isTitle' => 'true',
		],
		'data' => [
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
			[
				'name' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'isTitle' => 'false',
			],
		]
	],
];


$rowsPages = [];

$page = new PdfPage(0);

$lastTable = count($table);

foreach($table as $key => $part) {

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


// header('Content-Type: application/json; charset=utf-8');
// echo json_encode($rowsPages);
// exit(0);


$data = [
	'headerName' =>'Евгений Маргулис',
	'headerDate' => date("m.d.Y"),
	'headerCity' => 'Красноярск',
	'headerDay' => 'СБ, 18:00',
	'headerPlace' => 'Красноярский музыкальный театр',
	'headerPhone' => '+7 (495) 201-25-05',
	'headerEmail' => 'info@neborecords.ru',
	'headerLink' => 'neborecords.ru',
	'rowsPages1' => $rowsPages,
];

// Массив всегда имеет заголовок
// Массив переносится, если он больше, чем 30 (вместе с заголовоком)
// Если на странице уже заполнено что-то, то мы считаем оставшееся место
// если следующий массив меньше или равен оставшемуся месту, то заносим его




$pdf = new PdfCreator($data);

return $pdf->create();
