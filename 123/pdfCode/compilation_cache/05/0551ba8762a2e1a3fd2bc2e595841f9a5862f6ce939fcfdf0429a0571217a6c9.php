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

/* template0-en.html */
class __TwigTemplate_ea56058507536ef76834994d6e0439b3e7219a6092920e900e108e3588fe2b6e extends Template
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
        $this->loadTemplate("style.html", "template0-en.html", 6)->display($context);
        // line 7
        echo "
</head>

<body>

    ";
        // line 12
        $this->loadTemplate("header-en.html", "template0-en.html", 12)->display($context);
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("footer-en.html", "template0-en.html", 14)->display($context);
        // line 15
        echo "
    <main>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowsPages1"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 18
            echo "        <div ";
            if (($context["key"] != 0)) {
                echo " style=\"page-break-before: always;\" ";
            }
            echo ">
            <div class=\"main\">
                ";
            // line 20
            if (($context["key"] == 0)) {
                // line 21
                echo "                <div class=\"title-zone tz-p1\">
                    <span>Financial results</span>
                </div>
                ";
            }
            // line 25
            echo "                <table class=\"dataTable\" ";
            if (($context["key"] != 0)) {
                echo " style=\"padding-top: 50px;\" ";
            }
            echo " cellpadding=\"9\">
                    <thead>
                        <tr>
                            <td style=\"padding-left: 30px;\">

                            </td>
                            <td style=\"width: 175px;\">
                                План
                            </td>
                            <td style=\"width: 175px;\">
                                Факт
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 41
                echo "                        <tr class=\"tr-simple ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 41) == "true")) {
                    echo " tr-group ";
                }
                // line 42
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 42) == "true")) {
                    echo " tr-group__titleOne ";
                }
                // line 43
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 43) == "true")) {
                    echo " tr-group__sub ";
                }
                echo "\">
                            <td class=\"tr-group__first\">
                                ";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 45);
                echo "
                            </td>
                            <td>
                                ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 48), "html", null, true);
                echo "
                            </td>
                            <td>
                                ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 51), "html", null, true);
                echo "
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                    </tbody>
                </table>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowsPages2"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 62
            echo "        <div style=\"page-break-before: always;\">
            <div class=\"main\">


                <div class=\"title-zone\" style=\"padding-top: 20px;\">
                    ";
            // line 67
            if (($context["key"] == 0)) {
                // line 68
                echo "                    <span>Финансовый отчет</span>
                    ";
            } else {
                // line 70
                echo "                    <div style=\"height: 12px;\"></div>
                    ";
            }
            // line 72
            echo "                </div>
                ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["keyName"] => $context["table"]) {
                // line 74
                echo "                <div class=\"dataTable__title\">
                    ";
                // line 75
                echo twig_escape_filter($this->env, $context["keyName"], "html", null, true);
                echo "
                </div>

                <table class=\"dataTable\" cellpadding=\"9\" border=\"0\" cellspacing=\"0\">
                    <thead>
                        ";
                // line 80
                if (($context["keyName"] == "Продажи")) {
                    // line 81
                    echo "                        <tr>
                            <td style=\"padding-left: 30px; width: 140px;\">
                                Оператор
                            </td>
                            <td>
                                План
                            </td>
                            <td>
                                Факт
                            </td>
                            <td style=\"width: 130px;\">
                                Сумма без АВ
                            </td>
                            <td>
                                Оплачено
                            </td>
                            <td>
                                Остаток
                            </td>
                        </tr>
                        ";
                }
                // line 102
                echo "
                        ";
                // line 103
                if (((($context["keyName"] == "Организация мероприятия") || ($context["keyName"] == "Реклама")) || ($context["keyName"] == "Интернет-маркетинг"))) {
                    // line 105
                    echo "                        <tr>
                            <td style=\"padding-left: 30px;\">
                                Услуга
                            </td>
                            <td>
                                План
                            </td>
                            <td>
                                Факт
                            </td>
                            <td>
                                Оплачено
                            </td>
                            <td>
                                Остаток
                            </td>
                        </tr>
                        ";
                }
                // line 123
                echo "
                        ";
                // line 124
                if (((($context["keyName"] == "Налоги и сборы") || ($context["keyName"] == "Гонорары")) || ($context["keyName"] == "Прибыль"))) {
                    // line 125
                    echo "                        <tr>
                            <td style=\"padding-left: 30px;\">
                                Категория
                            </td>
                            <td>
                                План
                            </td>
                            <td>
                                Факт
                            </td>
                            <td>
                                Оплачено
                            </td>
                            <td>
                                Остаток
                            </td>
                        </tr>
                        ";
                }
                // line 143
                echo "
                        ";
                // line 144
                if (($context["keyName"] == "АВ билетных операторов")) {
                    // line 145
                    echo "                        <tr>
                            <td style=\"padding-left: 30px;\">
                                Оператор
                            </td>
                            <td>
                                План
                            </td>
                            <td>
                                Факт
                            </td>
                        </tr>
                        ";
                }
                // line 157
                echo "                    </thead>
                    <tbody>
                        ";
                // line 159
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["table"]);
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 160
                    echo "                        ";
                    if (($context["keyName"] == "Продажи")) {
                        // line 161
                        echo "                        <tr class=\"tr-simple ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 161) == "true")) {
                            echo " tr-group ";
                        }
                        // line 162
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 162) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 163
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 163) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 164
                        echo "                                    \">
                            <td class=\"tr-group__first\">
                                ";
                        // line 166
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "operator", [], "any", false, false, false, 166), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 169
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 169), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 172
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 172), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 175
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum", [], "any", false, false, false, 175), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 178
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 178), "html", null, true);
                        echo "
                            </td>
                            <td class=\"";
                        // line 180
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balanceColor", [], "any", false, false, false, 180), "html", null, true);
                        echo "\">
                                ";
                        // line 181
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 181), "html", null, true);
                        echo "
                            </td>
                        </tr>
                        ";
                    }
                    // line 185
                    echo "
                        ";
                    // line 186
                    if (($context["keyName"] == "АВ билетных операторов")) {
                        // line 187
                        echo "                        <tr class=\"tr-simple ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 187) == "true")) {
                            echo " tr-group ";
                        }
                        // line 188
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 188) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 189
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 189) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 190
                        echo "                                    \">
                            <td class=\"tr-group__first\">
                                ";
                        // line 192
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 192), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 195
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 195), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 198
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 198), "html", null, true);
                        echo "
                            </td>
                        </tr>
                        ";
                    }
                    // line 202
                    echo "
                        ";
                    // line 203
                    if (((($context["keyName"] == "Налоги и сборы") || ($context["keyName"] == "Гонорары")) || ($context["keyName"] == "Прибыль"))) {
                        // line 204
                        echo "                        <tr class=\"tr-simple ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 204) == "true")) {
                            echo " tr-group ";
                        }
                        // line 205
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 205) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 206
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 206) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 207
                        echo "                                    \">
                            <td class=\"tr-group__first\">
                                ";
                        // line 209
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "category", [], "any", false, false, false, 209), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 212
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 212), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 215
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 215), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 218
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 218), "html", null, true);
                        echo "
                            </td>
                            <td class=\"";
                        // line 220
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balanceColor", [], "any", false, false, false, 220), "html", null, true);
                        echo "\">
                                ";
                        // line 221
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 221), "html", null, true);
                        echo "
                            </td>
                        </tr>
                        ";
                    }
                    // line 225
                    echo "
                        ";
                    // line 226
                    if (((($context["keyName"] == "Организация мероприятия") || ($context["keyName"] == "Реклама")) || ($context["keyName"] == "Интернет-маркетинг"))) {
                        // line 228
                        echo "                        <tr class=\"tr-simple ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 228) == "true")) {
                            echo " tr-group ";
                        }
                        // line 229
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 229) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 230
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 230) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 231
                        echo "                                    \">
                            <td class=\"tr-group__first\">
                                <div class=\"sub-before\">
                                    <img src=\"";
                        // line 234
                        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
                        echo "/images/arrow.svg\" alt=\"arrow\">
                                </div>

                                ";
                        // line 237
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 237), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 240
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 240), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 243
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 243), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 246
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 246), "html", null, true);
                        echo "
                            </td>
                            <td class=\"";
                        // line 248
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balanceColor", [], "any", false, false, false, 248), "html", null, true);
                        echo "\">
                                ";
                        // line 249
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 249), "html", null, true);
                        echo "
                            </td>
                        </tr>
                        ";
                    }
                    // line 253
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 254
                echo "                    </tbody>
                </table>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyName'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 258
            echo "            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "
    </main>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "template0-en.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 261,  546 => 258,  537 => 254,  531 => 253,  524 => 249,  520 => 248,  515 => 246,  509 => 243,  503 => 240,  497 => 237,  491 => 234,  486 => 231,  481 => 230,  476 => 229,  471 => 228,  469 => 226,  466 => 225,  459 => 221,  455 => 220,  450 => 218,  444 => 215,  438 => 212,  432 => 209,  428 => 207,  423 => 206,  418 => 205,  413 => 204,  411 => 203,  408 => 202,  401 => 198,  395 => 195,  389 => 192,  385 => 190,  380 => 189,  375 => 188,  370 => 187,  368 => 186,  365 => 185,  358 => 181,  354 => 180,  349 => 178,  343 => 175,  337 => 172,  331 => 169,  325 => 166,  321 => 164,  316 => 163,  311 => 162,  306 => 161,  303 => 160,  299 => 159,  295 => 157,  281 => 145,  279 => 144,  276 => 143,  256 => 125,  254 => 124,  251 => 123,  231 => 105,  229 => 103,  226 => 102,  203 => 81,  201 => 80,  193 => 75,  190 => 74,  186 => 73,  183 => 72,  179 => 70,  175 => 68,  173 => 67,  166 => 62,  162 => 61,  159 => 60,  149 => 55,  139 => 51,  133 => 48,  127 => 45,  119 => 43,  114 => 42,  109 => 41,  105 => 40,  84 => 25,  78 => 21,  76 => 20,  68 => 18,  64 => 17,  60 => 15,  58 => 14,  55 => 13,  53 => 12,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template0-en.html", "C:\\Users\\notepc\\Sites\\test\\123\\pdfCode\\templates\\template0-en.html");
    }
}
