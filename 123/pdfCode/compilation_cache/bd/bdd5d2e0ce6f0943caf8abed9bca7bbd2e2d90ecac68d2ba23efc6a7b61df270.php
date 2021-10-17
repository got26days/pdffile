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

/* header.html */
class __TwigTemplate_cf9363ed2f773ffab233f41d479f910394581cb8f4ac558222939e8b520cbfa7 extends Template
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
        echo "<header>
\t<div class=\"header\">
\t\t<div class=\"header__title\">
\t\t\tОтчет по продажам
\t\t</div>
\t\t<div class=\"header__info\">
\t\t\t<div class=\"header__info-left\">
\t\t\t\t<table class=\"invisable-table\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"width: 14px; padding-right: 7px;\">
\t\t\t\t\t\t\t<img class=\"flash-svg\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/flash.svg\" alt=\"img\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td align=\"left\" class=\"header__person\">
\t\t\t\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, ($context["headerName"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<table class=\"invisable-table\" style=\"padding-top: 5px;\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"width: 14px; padding-right: 7px;\">
\t\t\t\t\t\t\t<img class=\"calendar-svg\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/calendar.svg\" alt=\"img\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td align=\"left\" class=\"header__subtitle\" style=\"width: 80px;\">
\t\t\t\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, ($context["headerDate"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding-right: 7px;\">
\t\t\t\t\t\t\t<img class=\"point-svg\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/point.svg\" alt=\"img\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td align=\"left\" class=\"header__subtitle\">
\t\t\t\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, ($context["headerCity"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>

\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td align=\"left\" class=\"header__nexttitle\">
\t\t\t\t\t\t\t";
        // line 38
        echo twig_escape_filter($this->env, ($context["headerDay"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>

\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td align=\"left\" class=\"header__nexttitle\">
\t\t\t\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, ($context["headerPlace"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"header__info-right\">
\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<table class=\"invisable-table header__infotable\" cellpadding=\"0\" border=\"0\" cellspacing=\"0\">
\t\t\t\t\t\t\t\t<tr height=\"10px;\">
\t\t\t\t\t\t\t\t\t<td class=\"header__nexttitle\" align=\"right\" style=\"padding-top: 8px;\">
\t\t\t\t\t\t\t\t\t\t<a href=\"tel:";
        // line 56
        echo twig_escape_filter($this->env, ($context["headerPhone"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 57
        echo twig_escape_filter($this->env, ($context["headerPhone"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td style=\"padding-top: 8px; width: 24px\" align=\"center\">
\t\t\t\t\t\t\t\t\t\t<img class=\"phone-svg\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/phone.svg\" alt=\"img\">
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr height=\"10px;\">
\t\t\t\t\t\t\t\t\t<td class=\"header__nexttitle\" align=\"right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:";
        // line 67
        echo twig_escape_filter($this->env, ($context["headerEmail"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 68
        echo twig_escape_filter($this->env, ($context["headerEmail"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td style=\"padding-top: 0px; width: 24px\" align=\"center\">
\t\t\t\t\t\t\t\t\t\t<img class=\"email-svg\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/email.svg\" alt=\"img\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr height=\"10px;\">
\t\t\t\t\t\t\t\t\t<td class=\"header__nexttitle\" align=\"right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"https://";
        // line 77
        echo twig_escape_filter($this->env, ($context["headerLink"] ?? null), "html", null, true);
        echo "/\" target=\"_blank\">";
        echo twig_escape_filter($this->env, ($context["headerLink"] ?? null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td style=\"padding-top: 0px; width: 24px\" align=\"center\"><img class=\"tg-svg\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/tg.svg\" alt=\"img\"></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding-top:5px;\">
\t\t\t\t\t\t\t<img class=\"logo-svg\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/logo.svg\" alt=\"img\">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 85,  165 => 80,  157 => 77,  149 => 72,  142 => 68,  138 => 67,  129 => 61,  122 => 57,  118 => 56,  103 => 44,  94 => 38,  83 => 30,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.html", "C:\\Users\\notepc\\Sites\\test\\123\\pdfCode\\templates\\header.html");
    }
}
