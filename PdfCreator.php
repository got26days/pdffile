<?php

require_once __DIR__ . '/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\FontMetrics;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;


class PdfCreator {

	protected $data;

	public function __construct($data)
	{
		$this->data = $data;
	}

	public function getDomain(){
		// Program to display URL of current page.
	
		if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
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

	public function create(){
	
		// site url
		$domain = $this->getDomain();

		// instantiate and use the dompdf class

		$dompdf = new Dompdf(array('enable_remote' => true));
		// DOCS ссылка на файл верстки

		// $dompdf->loadHtmlFile($domain .'/template/master.php');

		$loader = new FilesystemLoader('./templates');
		$twig = new Environment($loader, [
			'cache' => './compilation_cache',
		]);

		$this->data['domain'] = $domain;



		$html = $twig->render('template.html', $this->data);

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





