<?php

require_once('./PdfCreator.php');
require_once('./pageCreator.php');

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
		]
	],
	1 => [
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
		]
	],
	2 => [
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

$table2 = [
	0 => [
		'title' => [
			'name' => 'Доход',
		],
		'data' => [
			[
				'operator' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'sum' => '233 322',
				'paid' => '123 000',
				'isTotal' => 'false',
			],
			[
				'operator' => 'ООО "Рога и копыта"',
				'plan' => '-', 
				'fact' => '114 550',
				'sum' => '233 322',
				'paid' => '123 000',
				'balance' => '323 323',
				'isTotal' => 'true',
			],
		]
	],
];

// header('Content-Type: application/json; charset=utf-8');
// echo json_encode($rowsPages);
// exit(0);

$page1 = new pageCreator($table);
$page1 = $page1->create();

$page2 = new pageCreator($table2);
$page2 = $page2->create();

$data = [
	'headerName' =>'Евгений Маргулис',
	'headerDate' => date("m.d.Y"),
	'headerCity' => 'Красноярск',
	'headerDay' => 'СБ, 18:00',
	'headerPlace' => 'Красноярский музыкальный театр',
	'headerPhone' => '+7 (495) 201-25-05',
	'headerEmail' => 'info@neborecords.ru',
	'headerLink' => 'neborecords.ru',
	'rowsPages1' => $page1,
	'rowsPages2' => $page2,
];

// Массив всегда имеет заголовок
// Массив переносится, если он больше, чем 30 (вместе с заголовоком)
// Если на странице уже заполнено что-то, то мы считаем оставшееся место
// если следующий массив меньше или равен оставшемуся месту, то заносим его




$pdf = new PdfCreator($data);

return $pdf->create();
