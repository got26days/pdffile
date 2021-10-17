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

/* templateChart3-ru.html */
class __TwigTemplate_6da8cc3bf56acfdb216a0c4d3661b99cfa9b618ffb708f92a92f10c07455fae3 extends Template
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
    ";
        // line 6
        $this->loadTemplate("style.html", "templateChart3-ru.html", 6)->display($context);
        // line 7
        echo "
</head>

<body>

    <!-- Define header and footer blocks before your content -->
    <header>
        <div class=\"header\">
            <div class=\"header__title\">
                Отчет по продажам
            </div>
            <div class=\"header__info\">
                <div class=\"header__info-left\">
                    <table class=\"invisable-table\">
                        <tr>
                            <td style=\"width: 14px; padding-right: 7px;\">
                                <img class=\"flash-svg\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/flash.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__person\">
                                ";
        // line 26
        echo twig_escape_filter($this->env, ($context["headerName"] ?? null), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </table>
                    <table class=\"invisable-table\" style=\"padding-top: 5px;\">
                        <tr>
                            <td style=\"width: 14px; padding-right: 7px;\">
                                <img class=\"calendar-svg\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/calendar.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__subtitle\" style=\"width: 80px;\">
                                ";
        // line 36
        echo twig_escape_filter($this->env, ($context["headerDate"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td style=\"padding-right: 7px;\">
                                <img class=\"point-svg\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/point.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__subtitle\">
                                ";
        // line 42
        echo twig_escape_filter($this->env, ($context["headerCity"] ?? null), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 50
        echo twig_escape_filter($this->env, ($context["headerDay"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 56
        echo twig_escape_filter($this->env, ($context["headerPlace"] ?? null), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </table>
                </div>
                <div class=\"header__info-right\">
                    <table>
                        <tr>
                            <td>
                                <table class=\"invisable-table header__infotable\" cellpadding=\"0\" border=\"0\"
                                    cellspacing=\"0\">
                                    <tr height=\"10px;\">
                                        <td class=\"header__nexttitle\" align=\"right\" style=\"padding-top: 8px;\">
                                            <a href=\"tel:";
        // line 69
        echo twig_escape_filter($this->env, ($context["headerPhone"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 70
        echo twig_escape_filter($this->env, ($context["headerPhone"] ?? null), "html", null, true);
        echo "
                                            </a>
                                        </td>
                                        <td style=\"padding-top: 8px; width: 24px\" align=\"center\">
                                            <img class=\"phone-svg\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/phone.svg\" alt=\"img\">
                                        </td>

                                    </tr>
                                    <tr height=\"10px;\">
                                        <td class=\"header__nexttitle\" align=\"right\">
                                            <a href=\"mailto:";
        // line 80
        echo twig_escape_filter($this->env, ($context["headerEmail"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 81
        echo twig_escape_filter($this->env, ($context["headerEmail"] ?? null), "html", null, true);
        echo "
                                            </a>
                                        </td>
                                        <td style=\"padding-top: 0px; width: 24px\" align=\"center\">
                                            <img class=\"email-svg\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/email.svg\" alt=\"img\">
                                        </td>
                                    </tr>
                                    <tr height=\"10px;\">
                                        <td class=\"header__nexttitle\" align=\"right\">
                                            <a href=\"https://";
        // line 90
        echo twig_escape_filter($this->env, ($context["headerLink"] ?? null), "html", null, true);
        echo "/\" target=\"_blank\">";
        echo twig_escape_filter($this->env, ($context["headerLink"] ?? null), "html", null, true);
        echo "</a>
                                        </td>
                                        <td style=\"padding-top: 0px; width: 24px\" align=\"center\"><img class=\"tg-svg\"
                                                src=\"";
        // line 93
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/tg.svg\" alt=\"img\"></td>
                                    </tr>
                                </table>
                            </td>
                            <td style=\"padding-top:5px;\">
                                <img class=\"logo-svg\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/logo.svg\" alt=\"img\">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </header>

    <footer>
        <div class=\"footer\">
            <span style=\"padding-right: 4px;\">Артист</span>
            <span><img class=\"sign-svg\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/sign.svg\" alt=\"img\"
                    style=\"padding-right: 15px;\"></span>
            <span style=\"padding-left: 15px; padding-right: 4px;\">Организатор</span>
            <span><img class=\"sign-svg\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/sign.svg\" alt=\"img\"></span>
        </div>
    </footer>

    <main>

        <div>
            <div class=\"main\">
                <div class=\"dataTable__title\">
                    Продажи по оперторам
                </div>
                <div class=\"chart-wrapper\">
                    <img class=\"chart\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, ($context["chart1"] ?? null), "html", null, true);
        echo "\" alt=\"chart\">
                </div>

                <table class=\"dataTable\" cellpadding=\"9\">
                    <thead>
                        <tr class=\"headerTitle\">
                            <td colspan=\"5\">
                                Всего продано
                            </td>
                        </tr>
                        <tr class=\"dataTable-manyhr\">
                            <td style=\"padding-left: 30px; width: 190px;\">
                                Оператор
                            </td>
                            <td>
                                Количество проданных
                            </td>
                            <td>
                                Сумма
                                проданных
                            </td>
                            <td>
                                Количество возвращенных
                            </td>
                            <td>
                                Сумма возвращенных
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 156
            echo "                        <tr
                            class=\"tr-simple ";
            // line 157
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 157) == "true")) {
                echo " tr-group ";
            }
            // line 158
            echo "                                                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 158) == "true")) {
                echo " tr-group__titleOne ";
            }
            // line 159
            echo "                                                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 159) == "true")) {
                echo " tr-group__sub ";
            }
            echo "\">
                            <td class=\"tr-group__first\">
                                ";
            // line 161
            echo twig_get_attribute($this->env, $this->source, $context["row"], "operator", [], "any", false, false, false, 161);
            echo "
                            </td>
                            <td>
                                ";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "number_sold", [], "any", false, false, false, 164), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum_sold", [], "any", false, false, false, 167), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "number_return", [], "any", false, false, false, 170), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum_return", [], "any", false, false, false, 173), "html", null, true);
            echo "
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                    </tbody>
                </table>
            </div>
        </div>

    </main>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "templateChart3-ru.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 177,  306 => 173,  300 => 170,  294 => 167,  288 => 164,  282 => 161,  274 => 159,  269 => 158,  265 => 157,  262 => 156,  258 => 155,  225 => 125,  210 => 113,  204 => 110,  189 => 98,  181 => 93,  173 => 90,  165 => 85,  158 => 81,  154 => 80,  145 => 74,  138 => 70,  134 => 69,  118 => 56,  109 => 50,  98 => 42,  92 => 39,  86 => 36,  80 => 33,  70 => 26,  64 => 23,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "templateChart3-ru.html", "C:\\Users\\notepc\\Sites\\test\\123\\pdfCode\\templates\\templateChart3-ru.html");
    }
}
