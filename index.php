<?php

require_once('./PdfCreator.php');
require_once('./pageCreator.php');

$table = include 'test.php';

$table2 = include 'test2.php';



$page1 = new pageCreator($table, 1);
$page1 = $page1->create();

$page2 = new pageCreator($table2, 2);
$page2 = $page2->create();

// header('Content-Type: application/json; charset=utf-8');
// echo json_encode($page2);
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
	'rowsPages1' => $page1,
	'rowsPages2' => $page2,
];

// Массив всегда имеет заголовок
// Массив переносится, если он больше, чем 30 (вместе с заголовоком)
// Если на странице уже заполнено что-то, то мы считаем оставшееся место
// если следующий массив меньше или равен оставшемуся месту, то заносим его




$pdf = new PdfCreator($data);

return $pdf->create();
