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

/* template.html */
class __TwigTemplate_8621af53bbbffa0db40b6eaf34216c9942316f326bbfb9448919205e053c9deb extends Template
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
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
    <style>
        img {
            display: block
        }

        @page {
            margin: 0in;
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: normal;
            src: url(http://test.test/fonts/Montserrat-Regular.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Montserrat-Bold';
            font-style: normal;
            font-weight: normal;
            src: url(http://test.test/fonts/Montserrat-Bold.ttf) format('truetype');
        }

        @font-face {
            font-family: 'HouschkaPro';
            font-style: normal;
            font-weight: normal;
            src: url(http://test.test/fonts/HouschkaPro-Medium.ttf) format('truetype');
        }

        body {
            background-image: url('http://test.test/images/back.png');
            background-size: 198px 455px;
            background-repeat: repeat;
            color: #000;
            font-family: 'Montserrat';
        }

        a {
            text-decoration: none;
            color: #000;
        }

        header {
            padding-top: 20px;
            position: fixed;
            top: 0px;
            left: 0px;
            right: 0px;
            height: 50px;

            /** Extra personal styles **/
            color: black;
            text-align: center;
            line-height: 35px;
        }

        main {
            padding: 20px 45px;
        }

        .header {
            padding-left: 45px;
            padding-right: 45px;
            padding-bottom: 15px;
        }

        .header__title {
            text-align: center;
            font-family: 'Montserrat-Bold', sans-serif;
            font-size: 14px;
            line-height: 16, 8px;
        }

        .header__info {
            padding-top: 5px;
            width: 100%;
        }

        .header__info-left {
            float: left;
        }

        .header__info-right {
            float: right;
        }

        .header__person {
            font-family: 'Montserrat-Bold', sans-serif;
            font-size: 16px;
            line-height: 140%;
        }

        .flash-svg {
            width: 15px;
            height: 14px;
            margin-top: 5px;
        }

        .point-svg {
            width: 15px;
            height: 14px;
            margin-top: 5px;
        }

        .calendar-svg {
            width: 13px;
            height: 13px;
            margin-top: 3px;
        }

        .header__subtitle {
            font-family: 'Montserrat-Bold', sans-serif;
            font-size: 11px;
            line-height: 140%;
        }

        .header__nexttitle {
            font-family: 'Montserrat', sans-serif;
            font-size: 10px;
            line-height: 140%;
        }

        .logo-svg {
            width: 72px;
            height: 78px;
            display: block;
        }

        .phone-svg {
            width: 13px;
            height: 13px;
            margin-top: 3px;
        }

        .email-svg {
            width: 13px;
            height: 13px;
            margin-top: 3px;
        }

        .tg-svg {
            width: 13px;
            height: 13px;
            margin-top: 3px;
        }

        .header__logo-area {
            float: right;
        }

        .header__infotable {
            float: left;
            padding-top: 4px;
        }

        .invisable-table {
            vertical-align: middle;
        }

        .main {
            padding-top: 120px;
        }

        .dataTable__padding {
            padding-top: 160px;
        }

        .title-zone {
            font-size: 21px;
            font-family: 'Montserrat-Bold', sans-serif;
            text-align: center;
        }

        .dataTable {
            width: 100%;
            font-size: 11px;
        }

        .dataTable thead tr td {
            background-color: #000;
            color: #fff;
        }

        .tz-p1 {
            padding-bottom: 15px;
        }

        .tr-group td {
            background: #FF0066;
            color: #fff;

        }

        .tr-group__second {
            font-family: 'Montserrat-Bold', sans-serif;
        }

        .tr-simple td {
            border-bottom: 1px solid #E8ECF7;
        }

        .tr-group__first {
            font-size: 12px;

        }

        footer {
            position: fixed;
            bottom: 10px;
            left: 0px;
            right: 0px;
            height: 47px;
            background-color: #FF0066;
            /** Extra personal styles **/
            color: #000;
            text-align: center;
            line-height: 35px;
        }

        .footer {
            font-family: 'HouschkaPro', sans-serif;
            font-size: 11px;
            margin: 0 auto;
            text-align: center;
            align-items: center;
            margin-top: 8px;
        }


        .sign-svg {
            width: 150px;
            margin-left: 4px;
            margin-top: 4px;
        }

        .margin-table {
            margin: 0 auto;
        }
        .dataTable__title{
            text-align: center;
            font-size: 17px;
            padding-top: 0px;
            padding-bottom: 10px;
        }
    </style>
</head>

<body>

    <!-- Define header and footer blocks before your content -->
    <header>
        <div class=\"header\">
            <div class=\"header__title\">
                Смета по мероприятию
            </div>
            <div class=\"header__info\">
                <div class=\"header__info-left\">
                    <table class=\"invisable-table\">
                        <tr>
                            <td style=\"width: 14px; padding-right: 7px;\">
                                <img class=\"flash-svg\" src=\"http://test.test/images/flash.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__person\">
                                ";
        // line 273
        echo twig_escape_filter($this->env, ($context["headerName"] ?? null), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </table>
                    <table class=\"invisable-table\" style=\"padding-top: 5px;\">
                        <tr>
                            <td style=\"width: 14px; padding-right: 7px;\">
                                <img class=\"calendar-svg\" src=\"http://test.test/images/calendar.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__subtitle\" style=\"width: 80px;\">
                                ";
        // line 283
        echo twig_escape_filter($this->env, ($context["headerDate"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td style=\"padding-right: 7px;\">
                                <img class=\"point-svg\" src=\"http://test.test/images/point.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__subtitle\">
                                ";
        // line 289
        echo twig_escape_filter($this->env, ($context["headerCity"] ?? null), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 297
        echo twig_escape_filter($this->env, ($context["headerDay"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 303
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
        // line 316
        echo twig_escape_filter($this->env, ($context["headerPhone"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 317
        echo twig_escape_filter($this->env, ($context["headerPhone"] ?? null), "html", null, true);
        echo "
                                            </a>
                                        </td>
                                        <td style=\"padding-top: 8px; width: 24px\" align=\"center\">
                                            <img class=\"phone-svg\" src=\"http://test.test/images/phone.svg\" alt=\"img\">
                                        </td>

                                    </tr>
                                    <tr height=\"10px;\">
                                        <td class=\"header__nexttitle\" align=\"right\">
                                            <a href=\"mailto:";
        // line 327
        echo twig_escape_filter($this->env, ($context["headerEmail"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 328
        echo twig_escape_filter($this->env, ($context["headerEmail"] ?? null), "html", null, true);
        echo "
                                            </a>
                                        </td>
                                        <td style=\"padding-top: 0px; width: 24px\" align=\"center\">
                                            <img class=\"email-svg\" src=\"http://test.test/images/email.svg\" alt=\"img\">
                                        </td>
                                    </tr>
                                    <tr height=\"10px;\">
                                        <td class=\"header__nexttitle\" align=\"right\">
                                            <a href=\"https://";
        // line 337
        echo twig_escape_filter($this->env, ($context["headerLink"] ?? null), "html", null, true);
        echo "/\" target=\"_blank\">";
        echo twig_escape_filter($this->env, ($context["headerLink"] ?? null), "html", null, true);
        echo "</a>
                                        </td>
                                        <td style=\"padding-top: 0px; width: 24px\" align=\"center\"><img class=\"tg-svg\"
                                                src=\"http://test.test/images/tg.svg\" alt=\"img\"></td>
                                    </tr>
                                </table>
                            </td>
                            <td style=\"padding-top:5px;\">
                                <img class=\"logo-svg\" src=\"http://test.test/images/logo.svg\" alt=\"img\">
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
            <span><img class=\"sign-svg\" src=\"http://test.test/images/sign.svg\" alt=\"img\"
                    style=\"padding-right: 15px;\"></span>
            <span style=\"padding-left: 15px; padding-right: 4px;\">Организатор</span>
            <span><img class=\"sign-svg\" src=\"http://test.test/images/sign.svg\" alt=\"img\"></span>
        </div>
    </footer>

    <main>
        ";
        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowsPages1"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 366
            echo "        <div 
        ";
            // line 367
            if (($context["key"] != 0)) {
                // line 368
                echo "        style=\"page-break-before: always;\"
        ";
            }
            // line 369
            echo ">
            <div class=\"main\">
                ";
            // line 371
            if (($context["key"] == 0)) {
                // line 372
                echo "                <div class=\"title-zone tz-p1\">
                    <span>Финансовый результат</span>
                </div>
                ";
            }
            // line 376
            echo "                <table class=\"dataTable\" 
                ";
            // line 377
            if (($context["key"] != 0)) {
                // line 378
                echo "                style=\"padding-top: 50px;\"
                ";
            }
            // line 380
            echo "                cellpadding=\"9\" border=\"0\" cellspacing=\"0\">
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
            // line 395
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 396
                echo "                        <tr ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 396) == "true")) {
                    echo " class=\"tr-group\" ";
                } else {
                    echo " class=\"tr-simple\" ";
                }
                echo ">
                            <td class=\"tr-group__first\" style=\"padding-left: 30px;\">
                                ";
                // line 398
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 398), "html", null, true);
                echo "
                            </td>
                            <td ";
                // line 400
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 400) == "true")) {
                    echo " class=\"tr-group__second\" ";
                }
                echo ">
                                ";
                // line 401
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 401), "html", null, true);
                echo "
                            </td>
                            <td ";
                // line 403
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 403) == "true")) {
                    echo " class=\"tr-group__second\" ";
                }
                echo ">
                                ";
                // line 404
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 404), "html", null, true);
                echo "
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 408
            echo "                    </tbody>
                </table>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 413
        echo "
        ";
        // line 414
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowsPages2"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 415
            echo "        <div 
        style=\"page-break-before: always;\">
            <div class=\"main\">
                ";
            // line 418
            if (($context["key"] == 0)) {
                // line 419
                echo "                <div class=\"title-zone\" style=\"padding-top: 20px;\">
                    <span>Финансовый отчет</span>
                </div>
                ";
            }
            // line 423
            echo "
                ";
            // line 424
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $context["page"], 0, 1));
            foreach ($context['_seq'] as $context["key1"] => $context["row"]) {
                // line 425
                echo "                <div class=\"dataTable__title\"
                ";
                // line 426
                if (($context["key"] != 0)) {
                    // line 427
                    echo "                style=\"padding-top: 20px;\"
                ";
                }
                // line 428
                echo ">
                    ";
                // line 429
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 429), "html", null, true);
                echo "
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key1'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 432
            echo "
                <table class=\"dataTable\" 
                cellpadding=\"9\" border=\"0\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <td style=\"padding-left: 30px;\">
                                Оператор
                            </td>
                            <td>
                                План
                            </td>
                            <td>
                                Факт
                            </td>
                            <td>
                                Сумма без АВ
                            </td>
                            <td>
                                Оплачено
                            </td>
                            <td>
                                Остаток
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 458
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["key1"] => $context["row"]) {
                // line 459
                echo "                            ";
                if (($context["key1"] > 0)) {
                    // line 460
                    echo "                            <tr ";
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 460) == "true")) {
                        echo " class=\"tr-group\" ";
                    } else {
                        echo " class=\"tr-simple\" ";
                    }
                    echo ">
                                <td class=\"tr-group__first ";
                    // line 461
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 461) == "true")) {
                        echo " tr-group__second ";
                    }
                    echo "\" style=\"padding-left: 30px;\" >
                                    ";
                    // line 462
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "operator", [], "any", false, false, false, 462), "html", null, true);
                    echo "
                                </td>
                                <td ";
                    // line 464
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 464) == "true")) {
                        echo " class=\"tr-group__second\" ";
                    }
                    echo ">
                                    ";
                    // line 465
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 465), "html", null, true);
                    echo "
                                </td>
                                <td ";
                    // line 467
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 467) == "true")) {
                        echo " class=\"tr-group__second\" ";
                    }
                    echo ">
                                    ";
                    // line 468
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 468), "html", null, true);
                    echo "
                                </td>
                                <td ";
                    // line 470
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 470) == "true")) {
                        echo " class=\"tr-group__second\" ";
                    }
                    echo ">
                                    ";
                    // line 471
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum", [], "any", false, false, false, 471), "html", null, true);
                    echo "
                                </td>
                                <td ";
                    // line 473
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 473) == "true")) {
                        echo " class=\"tr-group__second\" ";
                    }
                    echo ">
                                    ";
                    // line 474
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 474), "html", null, true);
                    echo "
                                </td>
                                <td ";
                    // line 476
                    if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 476) == "true")) {
                        echo " class=\"tr-group__second\" ";
                    }
                    echo ">
                                    ";
                    // line 477
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 477), "html", null, true);
                    echo "
                                </td>
                            </tr>
                            ";
                }
                // line 481
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key1'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 482
            echo "                    </tbody>
                </table>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
        echo "
    </main>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "template.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  718 => 487,  708 => 482,  702 => 481,  695 => 477,  689 => 476,  684 => 474,  678 => 473,  673 => 471,  667 => 470,  662 => 468,  656 => 467,  651 => 465,  645 => 464,  640 => 462,  634 => 461,  625 => 460,  622 => 459,  618 => 458,  590 => 432,  581 => 429,  578 => 428,  574 => 427,  572 => 426,  569 => 425,  565 => 424,  562 => 423,  556 => 419,  554 => 418,  549 => 415,  545 => 414,  542 => 413,  532 => 408,  522 => 404,  516 => 403,  511 => 401,  505 => 400,  500 => 398,  490 => 396,  486 => 395,  469 => 380,  465 => 378,  463 => 377,  460 => 376,  454 => 372,  452 => 371,  448 => 369,  444 => 368,  442 => 367,  439 => 366,  435 => 365,  402 => 337,  390 => 328,  386 => 327,  373 => 317,  369 => 316,  353 => 303,  344 => 297,  333 => 289,  324 => 283,  311 => 273,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template.html", "C:\\Users\\notepc\\Sites\\test\\templates\\template.html");
    }
}
