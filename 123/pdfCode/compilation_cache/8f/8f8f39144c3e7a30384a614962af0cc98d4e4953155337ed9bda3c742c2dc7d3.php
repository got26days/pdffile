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

/* templateChart4-ru.html */
class __TwigTemplate_56f08b4939bc5406aee71b18511a1834a4dbae8bc114fc04dbc7b5577f0706cf extends Template
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
        $this->loadTemplate("style.html", "templateChart4-ru.html", 6)->display($context);
        // line 7
        echo "
</head>

<body>

    ";
        // line 12
        $this->loadTemplate("header.html", "templateChart4-ru.html", 12)->display($context);
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("footer.html", "templateChart4-ru.html", 14)->display($context);
        // line 15
        echo "
    <main>

        <div>
            <div class=\"main\">
                <div class=\"dataTable__title\">
                    Динамика по дням
                </div>
                <div class=\"dataTable__title\">
                    Сумма продаж
                </div>
                <div class=\"chart-wrapper\">
                    <img class=\"chart\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["chart1"] ?? null), "html", null, true);
        echo "\" alt=\"chart\">
                </div>
                <div class=\"dataTable__title\">
                    Количество билетов
                </div>
                <div class=\"chart-wrapper\">
                    <img class=\"chart\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["chart1"] ?? null), "html", null, true);
        echo "\" alt=\"chart\">
                </div>
            </div>
        </div>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 38
            echo "        <div style=\"page-break-before: always;\">
            <div class=\"main\">

                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["keyName"] => $context["table"]) {
                // line 42
                echo "                <table class=\"dataTable\" cellpadding=\"9\" border=\"0\" cellspacing=\"0\">
                    <thead>
                        <tr class=\"headerTitle\">
                            <td colspan=\"6\">
                                ";
                // line 46
                echo twig_escape_filter($this->env, $context["keyName"], "html", null, true);
                echo "
                            </td>
                        </tr>
                        <tr class=\"dataTable-manyhr\">
                            <td style=\"padding-left: 30px; width: 80px;\">
                                Дата
                            </td>
                            <td>
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
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["table"]);
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 73
                    echo "                        <tr class=\"tr-simple ";
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 73) == "true")) {
                        echo " tr-group ";
                    }
                    // line 74
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 74) == "true")) {
                        echo " tr-group__title ";
                    }
                    // line 75
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 75) == "true")) {
                        echo " tr-group__sub ";
                    }
                    // line 76
                    echo "                                            \">
                            <td class=\"tr-group__first\">
                                ";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "date", [], "any", false, false, false, 78);
                    echo "
                            </td>
                            <td style=\"position: relative;\">
                                <div class=\"sub-before sub-chart\">
                                    <img src=\"";
                    // line 82
                    echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
                    echo "/images/arrow.svg\" alt=\"arrow\">
                                </div>
                                ";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "operator", [], "any", false, false, false, 84);
                    echo "
                            </td>
                            <td>
                                ";
                    // line 87
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "number_sold", [], "any", false, false, false, 87), "html", null, true);
                    echo "
                            </td>
                            <td>
                                ";
                    // line 90
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum_sold", [], "any", false, false, false, 90), "html", null, true);
                    echo "
                            </td>
                            <td>
                                ";
                    // line 93
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "number_return", [], "any", false, false, false, 93), "html", null, true);
                    echo "
                            </td>
                            <td>
                                ";
                    // line 96
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum_return", [], "any", false, false, false, 96), "html", null, true);
                    echo "
                            </td>
                        </tr>

                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "                    </tbody>
                </table>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyName'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "


    </main>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "templateChart4-ru.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 108,  217 => 105,  208 => 101,  197 => 96,  191 => 93,  185 => 90,  179 => 87,  173 => 84,  168 => 82,  161 => 78,  157 => 76,  152 => 75,  147 => 74,  142 => 73,  138 => 72,  109 => 46,  103 => 42,  99 => 41,  94 => 38,  90 => 37,  83 => 33,  74 => 27,  60 => 15,  58 => 14,  55 => 13,  53 => 12,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "templateChart4-ru.html", "C:\\Users\\notepc\\Sites\\test\\123\\pdfCode\\templates\\templateChart4-ru.html");
    }
}
