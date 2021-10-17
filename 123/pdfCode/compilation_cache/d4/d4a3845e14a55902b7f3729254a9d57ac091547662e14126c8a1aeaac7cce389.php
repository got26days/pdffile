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

/* templateChart1-ru.html */
class __TwigTemplate_37740fbad35aeadf17f5a25647b636fcec2f773bf75edf13535c027e51ebdb16 extends Template
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
        $this->loadTemplate("style.html", "templateChart1-ru.html", 6)->display($context);
        // line 7
        echo "
</head>

<body>

    ";
        // line 12
        $this->loadTemplate("header.html", "templateChart1-ru.html", 12)->display($context);
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("footer.html", "templateChart1-ru.html", 14)->display($context);
        // line 15
        echo "
    <main>

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows1"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 19
            echo "        <div ";
            if (($context["key"] != 0)) {
                echo " style=\"page-break-before: always;\" ";
            }
            echo ">
            <div class=\"main\">

                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["keyName"] => $context["table"]) {
                // line 23
                echo "                <table class=\"dataTable\" cellpadding=\"9\" border=\"0\" cellspacing=\"0\">
                    <thead>
                        ";
                // line 25
                if (($context["keyName"] == "План")) {
                    // line 26
                    echo "                        <tr class=\"headerTitle\">
                            <td colspan=\"5\">
                                ";
                    // line 28
                    echo twig_escape_filter($this->env, $context["keyName"], "html", null, true);
                    echo "
                            </td>
                        </tr>
                        <tr>
                            <td style=\"padding-left: 30px; width: 80px;\">
                                ы
                            </td>
                            <td style=\"width: 140px;\">
                                Пригласительные
                            </td>
                            <td>
                                Вал
                            </td>
                            <td>
                                В продажу
                            </td>
                            <td>
                                Средняя цена билета
                            </td>
                        </tr>
                        ";
                }
                // line 49
                echo "
                        ";
                // line 50
                if (($context["keyName"] == "Ценовые пояса")) {
                    // line 51
                    echo "                        <tr class=\"headerTitle\">
                            <td colspan=\"4\">
                                ";
                    // line 53
                    echo twig_escape_filter($this->env, $context["keyName"], "html", null, true);
                    echo "
                            </td>
                        </tr>
                        <tr>
                            <td style=\"padding-left: 30px; width: 120px;\">
                                Пояс
                            </td>
                            <td style=\"width: 140px;\">
                                Цена
                            </td>
                            <td>
                                Количество
                            </td>
                            <td>
                                Сумма
                            </td>
                        </tr>
                        ";
                }
                // line 71
                echo "
                    </thead>
                    <tbody>
                        ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["table"]);
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 75
                    echo "                        ";
                    if (($context["keyName"] == "План")) {
                        // line 76
                        echo "                        <tr class=\"tr-simple tr-plan ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 76) == "true")) {
                            echo " tr-group ";
                        }
                        // line 77
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 77) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 78
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 78) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 79
                        echo "                                    \">
                            <td class=\"tr-group__first\">
                                ";
                        // line 81
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "tickets", [], "any", false, false, false, 81), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 84
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "invitation", [], "any", false, false, false, 84), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 87
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "shaft", [], "any", false, false, false, 87), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 90
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sale", [], "any", false, false, false, 90), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 93
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "avg", [], "any", false, false, false, 93), "html", null, true);
                        echo "
                            </td>
                        </tr>
                        ";
                    }
                    // line 97
                    echo "
                        ";
                    // line 98
                    if (($context["keyName"] == "Ценовые пояса")) {
                        // line 99
                        echo "                        <tr class=\"tr-simple ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 99) == "true")) {
                            echo " tr-group ";
                        }
                        // line 100
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 100) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 101
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 101) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 102
                        echo "                                    \">
                            <td class=\"tr-group__first\">
                                <div class=\"zone-circle\" style=\"background-color: ";
                        // line 104
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "zone", [], "any", false, false, false, 104), "html", null, true);
                        echo ";\">

                                </div>
                            </td>
                            <td>
                                ";
                        // line 109
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, false, 109), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 112
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "amount", [], "any", false, false, false, 112), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 115
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum", [], "any", false, false, false, 115), "html", null, true);
                        echo "
                            </td>
                        </tr>
                        ";
                    }
                    // line 119
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "                    </tbody>
                </table>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyName'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "

        <div style=\"page-break-before: always;\">
            <div class=\"main\">
                <div class=\"dataTable__title\">
                    Сумма продаж
                </div>
                <div class=\"chart-wrapper\">
                    <img class=\"chart\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, ($context["chart1"] ?? null), "html", null, true);
        echo "\" alt=\"chart\">
                </div>
                <div class=\"dataTable__title\">
                    Количество билетов
                </div>
                <div class=\"chart-wrapper\">
                    <img class=\"chart\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, ($context["chart2"] ?? null), "html", null, true);
        echo "\" alt=\"chart\">
                </div>

                <table class=\"dataTable\" cellpadding=\"9\">
                    <thead>
                        <tr>
                            <td style=\"padding-left: 30px;\">

                            </td>
                            <td>
                                Билеты
                            </td>
                            <td>
                                % Билетов
                            </td>
                            <td>
                                Сумма
                            </td>
                            <td>
                                % Сумма
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 167
            echo "                        <tr
                            class=\"tr-simple ";
            // line 168
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 168) == "true")) {
                echo " tr-group ";
            }
            // line 169
            echo "                                                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 169) == "true")) {
                echo " tr-group__titleOne ";
            }
            // line 170
            echo "                                                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 170) == "true")) {
                echo " tr-group__sub ";
            }
            echo "\">
                            <td class=\"tr-group__first\">
                                ";
            // line 172
            echo twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 172);
            echo "
                            </td>
                            <td>
                                ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "tickets", [], "any", false, false, false, 175), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "percent_tickets", [], "any", false, false, false, 178), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum", [], "any", false, false, false, 181), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "percent_sum", [], "any", false, false, false, 184), "html", null, true);
            echo "
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                    </tbody>
                </table>
            </div>
        </div>

        <div style=\"page-break-before: always;\">
            <div class=\"main\">
                <div class=\"dataTable__title\">
                    Продажи по оперторам
                </div>
                <div class=\"chart-wrapper\">
                    <img class=\"chart\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, ($context["chart3"] ?? null), "html", null, true);
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
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows3"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 230
            echo "                        <tr
                            class=\"tr-simple ";
            // line 231
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 231) == "true")) {
                echo " tr-group ";
            }
            // line 232
            echo "                                                                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 232) == "true")) {
                echo " tr-group__titleOne ";
            }
            // line 233
            echo "                                                                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 233) == "true")) {
                echo " tr-group__sub ";
            }
            echo "\">
                            <td class=\"tr-group__first\">
                                ";
            // line 235
            echo twig_get_attribute($this->env, $this->source, $context["row"], "operator", [], "any", false, false, false, 235);
            echo "
                            </td>
                            <td>
                                ";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "number_sold", [], "any", false, false, false, 238), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum_sold", [], "any", false, false, false, 241), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "number_return", [], "any", false, false, false, 244), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 247
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum_return", [], "any", false, false, false, 247), "html", null, true);
            echo "
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "                    </tbody>
                </table>
            </div>
        </div>

        <div style=\"page-break-before: always;\">
            <div class=\"main\">
                <div class=\"dataTable__title\">
                    Динамика по дням
                </div>
                <div class=\"dataTable__title\">
                    Сумма продаж
                </div>
                <div class=\"chart-wrapper\">
                    <img class=\"chart\" src=\"";
        // line 265
        echo twig_escape_filter($this->env, ($context["chart4"] ?? null), "html", null, true);
        echo "\" alt=\"chart\">
                </div>
                <div class=\"dataTable__title\">
                    Количество билетов
                </div>
                <div class=\"chart-wrapper\">
                    <img class=\"chart\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, ($context["chart5"] ?? null), "html", null, true);
        echo "\" alt=\"chart\">
                </div>
            </div>
        </div>
        ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows4"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 276
            echo "        <div style=\"page-break-before: always;\">
            <div class=\"main\">

                ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["keyName"] => $context["table"]) {
                // line 280
                echo "                <table class=\"dataTable\" cellpadding=\"9\" border=\"0\" cellspacing=\"0\">
                    <thead>
                        <tr class=\"headerTitle\">
                            <td colspan=\"6\">
                                ";
                // line 284
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
                // line 310
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["table"]);
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 311
                    echo "                        <tr class=\"tr-simple ";
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 311) == "true")) {
                        echo " tr-group ";
                    }
                    // line 312
                    echo "                                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 312) == "true")) {
                        echo " tr-group__title ";
                    }
                    // line 313
                    echo "                                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 313) == "true")) {
                        echo " tr-group__sub ";
                    }
                    // line 314
                    echo "                                                            \">
                            <td class=\"tr-group__first\">
                                ";
                    // line 316
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "date", [], "any", false, false, false, 316);
                    echo "
                            </td>
                            <td style=\"position: relative;\">
                                <div class=\"sub-before sub-chart\">
                                    <img src=\"";
                    // line 320
                    echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
                    echo "/images/arrow.svg\" alt=\"arrow\">
                                </div>
                                ";
                    // line 322
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "operator", [], "any", false, false, false, 322);
                    echo "
                            </td>
                            <td>
                                ";
                    // line 325
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "number_sold", [], "any", false, false, false, 325), "html", null, true);
                    echo "
                            </td>
                            <td>
                                ";
                    // line 328
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum_sold", [], "any", false, false, false, 328), "html", null, true);
                    echo "
                            </td>
                            <td>
                                ";
                    // line 331
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "number_return", [], "any", false, false, false, 331), "html", null, true);
                    echo "
                            </td>
                            <td>
                                ";
                    // line 334
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum_return", [], "any", false, false, false, 334), "html", null, true);
                    echo "
                            </td>
                        </tr>

                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 339
                echo "                    </tbody>
                </table>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyName'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            echo "            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
        echo "

    </main>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "templateChart1-ru.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  658 => 346,  650 => 343,  641 => 339,  630 => 334,  624 => 331,  618 => 328,  612 => 325,  606 => 322,  601 => 320,  594 => 316,  590 => 314,  585 => 313,  580 => 312,  575 => 311,  571 => 310,  542 => 284,  536 => 280,  532 => 279,  527 => 276,  523 => 275,  516 => 271,  507 => 265,  491 => 251,  481 => 247,  475 => 244,  469 => 241,  463 => 238,  457 => 235,  449 => 233,  444 => 232,  440 => 231,  437 => 230,  433 => 229,  400 => 199,  387 => 188,  377 => 184,  371 => 181,  365 => 178,  359 => 175,  353 => 172,  345 => 170,  340 => 169,  336 => 168,  333 => 167,  329 => 166,  302 => 142,  293 => 136,  283 => 128,  275 => 125,  266 => 121,  259 => 119,  252 => 115,  246 => 112,  240 => 109,  232 => 104,  228 => 102,  223 => 101,  218 => 100,  213 => 99,  211 => 98,  208 => 97,  201 => 93,  195 => 90,  189 => 87,  183 => 84,  177 => 81,  173 => 79,  168 => 78,  163 => 77,  158 => 76,  155 => 75,  151 => 74,  146 => 71,  125 => 53,  121 => 51,  119 => 50,  116 => 49,  92 => 28,  88 => 26,  86 => 25,  82 => 23,  78 => 22,  69 => 19,  65 => 18,  60 => 15,  58 => 14,  55 => 13,  53 => 12,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "templateChart1-ru.html", "C:\\Users\\notepc\\Sites\\test\\123\\pdfCode\\templates\\templateChart1-ru.html");
    }
}
