<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./123/pdfCode/PdfGenerator/PdfCreator.php');
require_once('./123/pdfCode/PdfGenerator/pageCreator.php');


use PdfGenerator\pageCreator;
use PdfGenerator\PdfCreator;

$table1 = include './test3.php';
$table2 = include './test4.php';
$table3 = include './test5.php';
$table4 = include './test6.php';

$page1 = new pageCreator($table1, 2);
$page1 = $page1->createHard();

$page2 = $table2;

$page3 = $table3;

$page4 = new pageCreator($table4, 2);
$page4 = $page4->createHard();

// Для проверки пагинации страниц 
// header('Content-Type: application/json; charset=utf-8');
// echo json_encode($page1);
// exit(0);

$data = [
	'domain' => 'https://dashboard.ks05.ru/report/sale/pdf/123/pdfCode/',
	'headerName' => 'Евгений Маргулис',
	'headerDate' => date("m.d.Y"),
	'headerCity' => 'Красноярск',
	'headerDay' => 'СБ, 18:00',
	'headerPlace' => 'Красноярский музыкальный театр',
	'headerPhone' => '+7 (495) 201-25-05',
	'headerEmail' => 'info@neborecords.ru',
	'headerLink' => 'neborecords.ru',
	'rows1' => $page1,
	'rows2' => $page2,
	'rows3' => $page3,
	'rows4' => $page4,
	'chart1' => 'http://palagov.beget.tech/1.png',
	'chart2' => 'http://palagov.beget.tech/1.png',
	'chart3' => 'http://palagov.beget.tech/1.png',
	'chart4' => 'http://palagov.beget.tech/1.png',
	'chart5' => 'http://palagov.beget.tech/1.png',
];

// номер документа, данные, тип документа (1 - без графиков, 2 - с графиками), язык (ru или en), директория, где лежит папка /pdfCode/
$pdf = new PdfCreator(1, $data, 2, 'en', '/home/bitrix/ext_www/bm/report/sale/pdf/123');

return $pdf->create();
