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
	protected $lang;
	protected $page;
	protected $folder;

	public function __construct($page = 1, $data = [], $type = 1, $lang = 'ru', $folder = '/')
	{
		$this->data = $data;
		$this->type = $type;
		$this->lang = '-' . $lang;
		$this->page = $page;
		$this->folder = $folder;
	}

	public function create()
	{

		$fullFolder = $_SERVER['DOCUMENT_ROOT'] . $this->folder;

		$options = new Options();
		$options->set('isRemoteEnabled', TRUE);
		$options->set('tempDir', $fullFolder . '/pdfCode/tempDir');

		$dompdf = new Dompdf($options);

		$loader = new FilesystemLoader($fullFolder . '/pdfCode/templates');
		$twig = new Environment($loader, [
			'cache' => $fullFolder . '/pdfCode/compilation_cache',
			'auto_reload' => false,
		]);

		$temlateName = 'template';
		if ($this->type == 2) {
			$temlateName = 'templateChart';
		}

		$temlateName = $temlateName . $this->page . $this->lang . '.html';

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
