<?php

namespace PdfGenerator;

require_once __DIR__ . '../../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;
use Dompdf\FontMetrics;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class PdfCreator
{

	protected $data;
	protected $type;

	public function __construct($data, $type = 1, $lang = 'ru')
	{
		$this->data = $data;
		$this->type = $type;
		$this->lang = '-' . $lang;
	}

	public function getDomain()
	{
		// Program to display URL of current page.

		if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
			$link = "https";
		else
			$link = "http";

		// Here append the common URL characters.
		$link .= "://";

		// Append the host(domain name, ip) to the URL.
		$link .= $_SERVER['HTTP_HOST'];

		// Print the link
		return $link;
	}

	public function create()
	{

		// echo phpinfo();
		// exit;

		$parentFolder = '/123/';

		$fullFolder = $_SERVER['DOCUMENT_ROOT'] . $parentFolder;

		$domain = $this->getDomain();

		$options = new Options();
		$options->set('isRemoteEnabled', TRUE);
		$options->set('tempDir', $fullFolder . '/pdfCode/tempDir');

		$dompdf = new Dompdf($options);

		// DOCS ссылка на файл верстки

		// $dompdf->loadHtmlFile($domain . '/pdfCode/template/master.php');
		// echo $_SERVER['DOCUMENT_ROOT'];
		// exit(0);

		$loader = new FilesystemLoader($fullFolder . '/pdfCode/templates');
		$twig = new Environment($loader, [
			'cache' => $fullFolder . '/pdfCode/compilation_cache',
			'auto_reload' => true,
		]);


		$temlateName = 'template';
		if ($this->type == 2) {
			$temlateName = 'templateChart';
		}

		$temlateName = $temlateName . $this->lang . '.html';

		$html = $twig->render($temlateName, $this->data);

		// echo $html;
		// exit(0);


		$dompdf->loadHtml($html);



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

		return $dompdf->stream("dompdf_out.pdf", array("Attachment" => false));
	}
}
