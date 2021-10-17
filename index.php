<?php

require_once('./123/pdfCode/PdfGenerator/PdfCreator.php');
require_once('./123/pdfCode/PdfGenerator/pageCreator.php');

use PdfGenerator\pageCreator;
use PdfGenerator\PdfCreator;

$table = include './test.php';
$table2 = include './test2.php';

$page1 = new pageCreator($table, 1);
$page1 = $page1->create();

$page2 = new pageCreator($table2, 2);
$page2 = $page2->createHard();

// Для проверки пагинации страниц 
// header('Content-Type: application/json; charset=utf-8');
// echo json_encode($page2);
// exit(0);

$data = [
	'domain' => 'http://test.test/123/pdfCode/',
	'headerName' => 'Евгений Маргулис',
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


// номер страницы, данные, тип страницы (1 - без графиков, 2 - с графиками), язык (ru или en), директория, где лежат исполняемые классы

$pdf = new PdfCreator(0, $data, 1, 'en', '/123/');

return $pdf->create();
