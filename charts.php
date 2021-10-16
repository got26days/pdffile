<?php

require_once('./123/pdfCode/PdfGenerator/PdfCreator.php');
require_once('./123/pdfCode/PdfGenerator/pageCreator.php');

use PdfGenerator\pageCreator;
use PdfGenerator\PdfCreator;

$table = include './test3.php';
$table4 = include './test4.php';
$table5 = include './test5.php';


$page = new pageCreator($table, 2);
$page = $page->createHard();

// Для проверки пагинации страниц 
// header('Content-Type: application/json; charset=utf-8');
// echo json_encode($page);
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
	'rowsPages' => $page,
	'page2' => $table4,
	'page3' => $table5,
];


$pdf = new PdfCreator($data, 2);

return $pdf->create();
