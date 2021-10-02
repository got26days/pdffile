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
            font-family: 'Montserrat-Bold', sans-serif;

        }

        .tr-group__first{
            padding-left: 30px;
            position: relative;
        }

        .tr-simple {
            border-bottom: 2px solid #E8ECF7 !important;
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
            padding-top: 8px;
            padding-bottom: 10px;
        }

        .tr-group__title td{
            background: #E8ECF7 !important;
            font-family: 'Montserrat-Bold', sans-serif;
        }

        .tr-group__titleOne td{
            background: #FF0066;
            color: #fff;
            font-family: 'Montserrat-Bold', sans-serif;
        }

        .tr-group__titleOne .tr-group__first{
            font-size: 12px;
        }

        .tr-group__sub .tr-group__first{
            padding-left: 43px !important;
        }

        .sub-before{
            display: none;
        }

        .tr-group__sub .sub-before{
            display: block;
            position:absolute;
            left: 35px;
            top: -4px;
        }

        .redPrice{
            color: #FF0066 !important;
        }
        .greenPrice{
            color: #0E9702 !important;
        }
        table { 
        border-collapse: collapse; 
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
        // line 312
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
        // line 322
        echo twig_escape_filter($this->env, ($context["headerDate"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td style=\"padding-right: 7px;\">
                                <img class=\"point-svg\" src=\"http://test.test/images/point.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__subtitle\">
                                ";
        // line 328
        echo twig_escape_filter($this->env, ($context["headerCity"] ?? null), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 336
        echo twig_escape_filter($this->env, ($context["headerDay"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 342
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
        // line 355
        echo twig_escape_filter($this->env, ($context["headerPhone"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 356
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
        // line 366
        echo twig_escape_filter($this->env, ($context["headerEmail"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 367
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
        // line 376
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
        // line 404
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowsPages1"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 405
            echo "        <div 
        ";
            // line 406
            if (($context["key"] != 0)) {
                // line 407
                echo "        style=\"page-break-before: always;\"
        ";
            }
            // line 408
            echo ">
            <div class=\"main\">
                ";
            // line 410
            if (($context["key"] == 0)) {
                // line 411
                echo "                <div class=\"title-zone tz-p1\">
                    <span>Финансовый результат</span>
                </div>
                ";
            }
            // line 415
            echo "                <table class=\"dataTable\" 
                ";
            // line 416
            if (($context["key"] != 0)) {
                // line 417
                echo "                style=\"padding-top: 50px;\"
                ";
            }
            // line 419
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
            // line 434
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 435
                echo "                        <tr 
                            class=\"
                            tr-simple
                                ";
                // line 438
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 438) == "true")) {
                    echo " tr-group ";
                }
                // line 439
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 439) == "true")) {
                    echo " tr-group__titleOne ";
                }
                // line 440
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 440) == "true")) {
                    echo " tr-group__sub ";
                }
                // line 441
                echo "                            \"
                        >
                            <td class=\"tr-group__first\">
                                ";
                // line 444
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 444), "html", null, true);
                echo "
                            </td>
                            <td>
                                ";
                // line 447
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 447), "html", null, true);
                echo "
                            </td>
                            <td>
                                ";
                // line 450
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 450), "html", null, true);
                echo "
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 454
            echo "                    </tbody>
                </table>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 459
        echo "
        ";
        // line 460
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowsPages2"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 461
            echo "        <div 
        style=\"page-break-before: always;\">
            <div class=\"main\">

           
                <div class=\"title-zone\" style=\"padding-top: 20px;\">
                    ";
            // line 467
            if (($context["key"] == 0)) {
                // line 468
                echo "                    <span>Финансовый отчет</span>
                    ";
            } else {
                // line 470
                echo "                    <div style=\"height: 12px;\"></div>
                    ";
            }
            // line 472
            echo "                </div>
                ";
            // line 473
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["keyName"] => $context["table"]) {
                // line 474
                echo "                    <div class=\"dataTable__title\"
                    >
                        ";
                // line 476
                echo twig_escape_filter($this->env, $context["keyName"], "html", null, true);
                echo " 
                    </div>

                    <table class=\"dataTable\" 
                    cellpadding=\"9\" border=\"0\" cellspacing=\"0\">
                        <thead>
                            ";
                // line 482
                if (($context["keyName"] == "Продажи")) {
                    // line 483
                    echo "                            <tr>
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
                // line 504
                echo "
                            ";
                // line 505
                if (($context["keyName"] == "Организация мероприятия")) {
                    // line 506
                    echo "                            <tr>
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
                // line 524
                echo "
                            ";
                // line 525
                if (($context["keyName"] == "Налоги и сборы")) {
                    // line 526
                    echo "                            <tr>
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
                // line 544
                echo "
                            ";
                // line 545
                if (($context["keyName"] == "АВ билетных операторов")) {
                    // line 546
                    echo "                            <tr>
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
                // line 558
                echo "                        </thead>
                        <tbody>
                            ";
                // line 560
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["table"]);
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 561
                    echo "                                ";
                    if (($context["keyName"] == "Продажи")) {
                        // line 562
                        echo "                                <tr 
                                    class=\"
                                        tr-simple
                                        ";
                        // line 565
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 565) == "true")) {
                            echo " tr-group ";
                        }
                        // line 566
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 566) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 567
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 567) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 568
                        echo "                                    \"
                                >
                                    <td class=\"tr-group__first\">
                                        ";
                        // line 571
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "operator", [], "any", false, false, false, 571), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 574
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 574), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 577
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 577), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 580
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum", [], "any", false, false, false, 580), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 583
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 583), "html", null, true);
                        echo "
                                    </td>
                                    <td class=\"";
                        // line 585
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balanceColor", [], "any", false, false, false, 585), "html", null, true);
                        echo "\">
                                        ";
                        // line 586
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 586), "html", null, true);
                        echo "
                                    </td>
                                </tr>
                            ";
                    }
                    // line 590
                    echo "
                            ";
                    // line 591
                    if (($context["keyName"] == "АВ билетных операторов")) {
                        // line 592
                        echo "                                <tr
                                    class=\"
                                        tr-simple
                                        ";
                        // line 595
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 595) == "true")) {
                            echo " tr-group ";
                        }
                        // line 596
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 596) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 597
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 597) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 598
                        echo "                                    \"
                                >
                                    <td class=\"tr-group__first\">
                                        ";
                        // line 601
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 601), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 604
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 604), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 607
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 607), "html", null, true);
                        echo "
                                    </td>
                                </tr>
                            ";
                    }
                    // line 611
                    echo "
                            ";
                    // line 612
                    if (($context["keyName"] == "Налоги и сборы")) {
                        // line 613
                        echo "                                <tr
                                    class=\"
                                        tr-simple
                                        ";
                        // line 616
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 616) == "true")) {
                            echo " tr-group ";
                        }
                        // line 617
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 617) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 618
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 618) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 619
                        echo "                                    \"
                                >
                                    <td class=\"tr-group__first\">
                                        ";
                        // line 622
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "category", [], "any", false, false, false, 622), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 625
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 625), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 628
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 628), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 631
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 631), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 634
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 634), "html", null, true);
                        echo "
                                    </td>
                                </tr>
                            ";
                    }
                    // line 638
                    echo "
                            ";
                    // line 639
                    if (($context["keyName"] == "Организация мероприятия")) {
                        // line 640
                        echo "                                <tr
                                    class=\"
                                        tr-simple
                                        ";
                        // line 643
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 643) == "true")) {
                            echo " tr-group ";
                        }
                        // line 644
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 644) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 645
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 645) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 646
                        echo "                                    \"
                                >
                                    <td class=\"tr-group__first\">
                                       <div class=\"sub-before\">
                                           <img src=\"http://test.test/images/arrow.svg\" alt=\"arrow\">
                                       </div> 
                                       
                                       ";
                        // line 653
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 653), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 656
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 656), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 659
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 659), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 662
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 662), "html", null, true);
                        echo "
                                    </td>
                                    <td class=\"";
                        // line 664
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balanceColor", [], "any", false, false, false, 664), "html", null, true);
                        echo "\">
                                        ";
                        // line 665
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 665), "html", null, true);
                        echo "
                                    </td>
                                </tr>
                            ";
                    }
                    // line 669
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 670
                echo "                        </tbody>
                    </table>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyName'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 674
            echo "            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 677
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
        return array (  997 => 677,  989 => 674,  980 => 670,  974 => 669,  967 => 665,  963 => 664,  958 => 662,  952 => 659,  946 => 656,  940 => 653,  931 => 646,  926 => 645,  921 => 644,  917 => 643,  912 => 640,  910 => 639,  907 => 638,  900 => 634,  894 => 631,  888 => 628,  882 => 625,  876 => 622,  871 => 619,  866 => 618,  861 => 617,  857 => 616,  852 => 613,  850 => 612,  847 => 611,  840 => 607,  834 => 604,  828 => 601,  823 => 598,  818 => 597,  813 => 596,  809 => 595,  804 => 592,  802 => 591,  799 => 590,  792 => 586,  788 => 585,  783 => 583,  777 => 580,  771 => 577,  765 => 574,  759 => 571,  754 => 568,  749 => 567,  744 => 566,  740 => 565,  735 => 562,  732 => 561,  728 => 560,  724 => 558,  710 => 546,  708 => 545,  705 => 544,  685 => 526,  683 => 525,  680 => 524,  660 => 506,  658 => 505,  655 => 504,  632 => 483,  630 => 482,  621 => 476,  617 => 474,  613 => 473,  610 => 472,  606 => 470,  602 => 468,  600 => 467,  592 => 461,  588 => 460,  585 => 459,  575 => 454,  565 => 450,  559 => 447,  553 => 444,  548 => 441,  543 => 440,  538 => 439,  534 => 438,  529 => 435,  525 => 434,  508 => 419,  504 => 417,  502 => 416,  499 => 415,  493 => 411,  491 => 410,  487 => 408,  483 => 407,  481 => 406,  478 => 405,  474 => 404,  441 => 376,  429 => 367,  425 => 366,  412 => 356,  408 => 355,  392 => 342,  383 => 336,  372 => 328,  363 => 322,  350 => 312,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template.html", "C:\\Users\\notepc\\Sites\\test\\templates\\template.html");
    }
}
