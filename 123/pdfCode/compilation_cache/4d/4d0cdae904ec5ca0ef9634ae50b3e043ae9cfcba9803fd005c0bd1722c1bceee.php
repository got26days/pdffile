<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* templateChart1-en.html */
class __TwigTemplate_15d0aae2cef8b48fa801b97db87166fa7feaac29ea1984c8b68fb485f66668e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <style>
        img {
            display: block
        }

        @page {
            margin: 0px;
        }


        @font-face {
            font-family: 'Montserrat2';
            font-style: normal;
            font-weight: normal;
            src: url('";
        // line 20
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/fonts/Montserrat-Regular.ttf') format('truetype');
        }

        h1 {
            font-family: 'Montserrat2';
        }
    </style>

</head>

<body>


    <h1>ыв ыв</h1>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "templateChart1-en.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "templateChart1-en.html", "C:\\Users\\notepc\\Sites\\test\\123\\pdfCode\\templates\\templateChart1-en.html");
    }
}
