<?php

require_once('PdfGenerator/PdfCreator.php');
require_once('PdfGenerator/pageCreator.php');

use PdfGenerator\pageCreator;
use PdfGenerator\PdfCreator;

$table = include 'test.php';
$table2 = include 'test2.php';

$page1 = new pageCreator($table, 1);
$page1 = $page1->create();

$page2 = new pageCreator($table2, 2);
$page2 = $page2->createHard();

// header('Content-Type: application/json; charset=utf-8');
// echo json_encode($page2);
// exit(0);

$data = [
	'domain' => 'http://palagov.beget.tech',
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



$pdf = new PdfCreator($data);

return $pdf->create();


