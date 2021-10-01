<?php

require_once __DIR__ . '/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\FontMetrics;


// instantiate and use the dompdf class
$dompdf = new Dompdf(array('enable_remote' => true));
// DOCS ссылка на файл верстки


$dompdf->loadHtmlFile('http://test.test/template.html');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4');

// Render the HTML as PDF
$dompdf->render();

$font = $dompdf->getFontMetrics()->get_font("houschkapro");
// Print page numbering string at pos (500,118) on page, using $font in size 10
$dompdf->getCanvas()->page_text(36, 820, "Страница {PAGE_NUM} / {PAGE_COUNT}", $font, 8, array(0.333, 0.333, 0.333));

$dateNow = date("m.d.Y H:i");

$dompdf->getCanvas()->page_text(504, 820, $dateNow, $font, 8, array(0.333, 0.333, 0.333));

// Output the generated PDF to Browser

$file = $dompdf->stream("dompdf_out.pdf", array("Attachment" => false));



exit(0);


