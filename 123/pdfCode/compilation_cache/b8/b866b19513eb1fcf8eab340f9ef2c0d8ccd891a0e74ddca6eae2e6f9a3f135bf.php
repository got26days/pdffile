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

/* style.html */
class __TwigTemplate_b578eebad17ee85784ecab515edff0f029e015a8ea6e0645d5c2da39c109de8b extends Template
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
        echo "<style>
\timg {
\t\tdisplay: block
\t}

\t@page {
\t\tmargin: 0px;
\t}


\t@font-face {
\t\tfont-family: 'Montserrat';
\t\tfont-style: normal;
\t\tfont-weight: normal;
\t\tsrc: url(";
        // line 15
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/fonts/Montserrat-Regular.ttf) format('truetype');
\t}

\t@font-face {
\t\tfont-family: 'Montserrat-Bold';
\t\tfont-style: normal;
\t\tfont-weight: normal;
\t\tsrc: url(";
        // line 22
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/fonts/Montserrat-Bold.ttf) format('truetype');
\t}

\t@font-face {
\t\tfont-family: 'HouschkaPro';
\t\tfont-style: normal;
\t\tfont-weight: normal;
\t\tsrc: url(";
        // line 29
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/fonts/HouschkaPro-Medium.ttf) format('truetype');
\t}

\tbody {
\t\tcolor: #000;
\t\tfont-family: 'Montserrat';
\t\tbackground-image: url('";
        // line 35
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/back.png');
\t\tbackground-size: 198px 455px;
\t\tbackground-repeat: repeat;

\t\tpadding-top: 145px;
\t\tpadding-bottom: 30px;
\t}

\ta {
\t\ttext-decoration: none;
\t\tcolor: #000;
\t}

\theader {
\t\tpadding-top: 20px;
\t\tposition: fixed;
\t\ttop: 0px;
\t\tleft: 0px;
\t\tright: 0px;
\t\theight: 120px;

\t\t/** Extra personal styles **/
\t\tcolor: black;
\t\ttext-align: center;
\t\tline-height: 35px;
\t}

\tmain {
\t\tpadding: 0px 45px;
\t}

\t.header {
\t\tpadding-left: 45px;
\t\tpadding-right: 45px;
\t\tpadding-bottom: 15px;
\t}

\t.header__title {
\t\ttext-align: center;
\t\tfont-family: 'Montserrat-Bold', sans-serif;
\t\tfont-size: 14px;
\t\tline-height: 16, 8px;
\t}

\t.header__info {
\t\tpadding-top: 5px;
\t\twidth: 100%;
\t}

\t.header__info-left {
\t\tfloat: left;
\t}

\t.header__info-right {
\t\tfloat: right;
\t}

\t.header__person {
\t\tfont-family: 'Montserrat-Bold', sans-serif;
\t\tfont-size: 16px;
\t\tline-height: 140%;
\t}

\t.flash-svg {
\t\twidth: 15px;
\t\theight: 14px;
\t\tmargin-top: 5px;
\t}

\t.point-svg {
\t\twidth: 15px;
\t\theight: 14px;
\t\tmargin-top: 5px;
\t}

\t.calendar-svg {
\t\twidth: 13px;
\t\theight: 13px;
\t\tmargin-top: 3px;
\t}

\t.header__subtitle {
\t\tfont-family: 'Montserrat-Bold', sans-serif;
\t\tfont-size: 11px;
\t\tline-height: 140%;
\t}

\t.header__nexttitle {
\t\tfont-family: 'Montserrat', sans-serif;
\t\tfont-size: 10px;
\t\tline-height: 140%;
\t}

\t.logo-svg {
\t\twidth: 72px;
\t\theight: 78px;
\t\tdisplay: block;
\t}

\t.phone-svg {
\t\twidth: 13px;
\t\theight: 13px;
\t\tmargin-top: 3px;
\t}

\t.email-svg {
\t\twidth: 13px;
\t\theight: 13px;
\t\tmargin-top: 3px;
\t}

\t.tg-svg {
\t\twidth: 13px;
\t\theight: 13px;
\t\tmargin-top: 3px;
\t}

\t.header__logo-area {
\t\tfloat: right;
\t}

\t.header__infotable {
\t\tfloat: left;
\t\tpadding-top: 4px;
\t}

\t.invisable-table {
\t\tvertical-align: middle;
\t}

\t.dataTable__padding {
\t\tpadding-top: 160px;
\t}

\t.title-zone {
\t\tfont-size: 21px;
\t\tfont-family: 'Montserrat-Bold', sans-serif;
\t\ttext-align: center;
\t}

\t.dataTable {
\t\twidth: 100%;
\t\tfont-size: 11px;
\t}



\t.dataTable thead tr td {
\t\tbackground-color: #000;
\t\tcolor: #fff;
\t}

\t.tz-p1 {
\t\tpadding-bottom: 15px;
\t}

\t.tr-group td {
\t\tbackground: #FF0066;
\t\tcolor: #fff;
\t\tfont-family: 'Montserrat-Bold', sans-serif;

\t}

\t.tr-group__first {
\t\tpadding-left: 30px;
\t\tposition: relative;
\t}

\t.tr-simple td {
\t\tborder-bottom: 1px solid #E8ECF7;
\t}



\tfooter {
\t\tposition: fixed;
\t\tbottom: 10px;
\t\tleft: 0px;
\t\tright: 0px;
\t\theight: 47px;
\t\t/** Extra personal styles **/
\t\tcolor: #000;
\t\ttext-align: center;
\t\tline-height: 35px;
\t}

\t.footer {
\t\tfont-family: 'HouschkaPro', sans-serif;
\t\tfont-size: 11px;
\t\tmargin: 0 auto;
\t\ttext-align: center;
\t\talign-items: center;
\t\tmargin-top: 8px;
\t}


\t.sign-svg {
\t\twidth: 150px;
\t\tmargin-left: 4px;
\t\tmargin-top: 4px;
\t}

\t.margin-table {
\t\tmargin: 0 auto;
\t}

\t.dataTable__title {
\t\ttext-align: center;
\t\tfont-size: 17px;
\t\tpadding-bottom: 10px;
\t\tpadding-top: 15px;
\t\tline-height: 12px;
\t}

\t.headerTitle {
\t\ttext-align: center;
\t\tfont-size: 17px;
\t\tline-height: 12px;
\t}

\t.headerTitle td {
\t\tbackground: none !important;
\t\tcolor: black !important;
\t\tpadding-bottom: 12px !important;
\t\tpadding-top: 10px !important;
\t}

\t.tr-group__title td {
\t\tbackground: #E8ECF7 !important;
\t\tfont-family: 'Montserrat-Bold', sans-serif;
\t}

\t.tr-group__titleOne td {
\t\tbackground: #FF0066;
\t\tcolor: #fff;
\t\tfont-family: 'Montserrat-Bold', sans-serif;
\t}

\t.tr-group__titleOne .tr-group__first {
\t\tfont-size: 13px;
\t\tfont-family: 'Montserrat', sans-serif !important;
\t}

\t.tr-group__sub .tr-group__first {
\t\tpadding-left: 46px !important;
\t}

\t.sub-before {
\t\tdisplay: none;
\t}

\t.sub-before img {
\t\twidth: 12px;
\t\theight: 12px;
\t}

\t.tr-group__sub .sub-before {
\t\tdisplay: block;
\t\tposition: absolute;
\t\tleft: 31px;
\t\ttop: 11px;
\t}

\t.sub-chart {
\t\tleft: -12px !important;
\t}

\t.redPrice {
\t\tcolor: #FF0066 !important;
\t}

\t.greenPrice {
\t\tcolor: #0E9702 !important;
\t}

\ttable {
\t\tborder-spacing: 0 !important;
\t}

\t.tr-plan td {
\t\tbackground: #E8ECF7;
\t}

\t.zone-circle {
\t\twidth: 18px;
\t\theight: 18px;
\t\tborder-radius: 9px;
\t}

\t.chart {
\t\twidth: 100%;
\t}

\t.chart-wrapper {
\t\tpadding: 8px 15px;
\t}

\t.dataTable-manyhr td {
\t\tline-height: 9px;
\t\tpadding-top: 5px !important;
\t\tpadding-bottom: 5px !important;
\t}
</style>";
    }

    public function getTemplateName()
    {
        return "style.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 35,  73 => 29,  63 => 22,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "style.html", "C:\\Users\\notepc\\Sites\\test\\123\\pdfCode\\templates\\style.html");
    }
}
