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

/* templateChart-ru.html */
class __TwigTemplate_720237830039ce1f2bdcab5a4bcc7f9c983b40ce6005291d66a4cf87e270cc77 extends Template
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
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: normal;
            src: url(";
        // line 20
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/fonts/Montserrat-Regular.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Montserrat-Bold';
            font-style: normal;
            font-weight: normal;
            src: url(";
        // line 27
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/fonts/Montserrat-Bold.ttf) format('truetype');
        }

        @font-face {
            font-family: 'HouschkaPro';
            font-style: normal;
            font-weight: normal;
            src: url(";
        // line 34
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/fonts/HouschkaPro-Medium.ttf) format('truetype');
        }

        body {
            color: #000;
            font-family: 'Montserrat';
            background-image: url('";
        // line 40
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/back.png');
            background-size: 198px 455px;
            background-repeat: repeat;

            padding-top: 145px;
            padding-bottom: 30px;
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
            height: 120px;

            /** Extra personal styles **/
            color: black;
            text-align: center;
            line-height: 35px;
        }

        main {
            padding: 0px 45px;
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

        .tr-group__first {
            padding-left: 30px;
            position: relative;
        }

        .tr-simple td {
            border-bottom: 1px solid #E8ECF7;
        }



        footer {
            position: fixed;
            background-color: red;
            bottom: 10px;
            left: 0px;
            right: 0px;
            height: 47px;
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

        .dataTable__title {
            text-align: center;
            font-size: 17px;
            padding-bottom: 10px;
            padding-top: 15px;
            line-height: 12px;
        }

        .headerTitle {
            text-align: center;
            font-size: 17px;
            padding-bottom: 10px;
            padding-top: 15px;
            line-height: 12px;
        }

        .headerTitle td {
            background: none !important;
        }

        .tr-group__title td {
            background: #E8ECF7 !important;
            font-family: 'Montserrat-Bold', sans-serif;
        }

        .tr-group__titleOne td {
            background: #FF0066;
            color: #fff;
            font-family: 'Montserrat-Bold', sans-serif;
        }

        .tr-group__titleOne .tr-group__first {
            font-size: 13px;
            font-family: 'Montserrat', sans-serif !important;
        }

        .tr-group__sub .tr-group__first {
            padding-left: 46px !important;
        }

        .sub-before {
            display: none;
        }

        .sub-before img {
            width: 12px;
            height: 12px;
        }

        .tr-group__sub .sub-before {
            display: block;
            position: absolute;
            left: 31px;
            top: 11px;
        }

        .redPrice {
            color: #FF0066 !important;
        }

        .greenPrice {
            color: #0E9702 !important;
        }

        table {
            border-spacing: 0 !important;
        }

        .tr-plan td {
            background: #E8ECF7;
        }

        .zone-circle {
            width: 18px;
            height: 18px;
            border-radius: 9px;
        }

        .chart {
            width: 100%;
        }

        .chart-wrapper {
            padding: 8px 15px;
        }

        .dataTable-manyhr thead td {
            line-height: 9px;
            padding-top: 5px !important;
            padding-bottom: 5px !important;
        }
    </style>

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
        // line 355
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/flash.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__person\">
                                ";
        // line 358
        echo twig_escape_filter($this->env, ($context["headerName"] ?? null), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </table>
                    <table class=\"invisable-table\" style=\"padding-top: 5px;\">
                        <tr>
                            <td style=\"width: 14px; padding-right: 7px;\">
                                <img class=\"calendar-svg\" src=\"";
        // line 365
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/calendar.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__subtitle\" style=\"width: 80px;\">
                                ";
        // line 368
        echo twig_escape_filter($this->env, ($context["headerDate"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td style=\"padding-right: 7px;\">
                                <img class=\"point-svg\" src=\"";
        // line 371
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/point.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__subtitle\">
                                ";
        // line 374
        echo twig_escape_filter($this->env, ($context["headerCity"] ?? null), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 382
        echo twig_escape_filter($this->env, ($context["headerDay"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 388
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
        // line 401
        echo twig_escape_filter($this->env, ($context["headerPhone"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 402
        echo twig_escape_filter($this->env, ($context["headerPhone"] ?? null), "html", null, true);
        echo "
                                            </a>
                                        </td>
                                        <td style=\"padding-top: 8px; width: 24px\" align=\"center\">
                                            <img class=\"phone-svg\" src=\"";
        // line 406
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/phone.svg\" alt=\"img\">
                                        </td>

                                    </tr>
                                    <tr height=\"10px;\">
                                        <td class=\"header__nexttitle\" align=\"right\">
                                            <a href=\"mailto:";
        // line 412
        echo twig_escape_filter($this->env, ($context["headerEmail"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 413
        echo twig_escape_filter($this->env, ($context["headerEmail"] ?? null), "html", null, true);
        echo "
                                            </a>
                                        </td>
                                        <td style=\"padding-top: 0px; width: 24px\" align=\"center\">
                                            <img class=\"email-svg\" src=\"";
        // line 417
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/email.svg\" alt=\"img\">
                                        </td>
                                    </tr>
                                    <tr height=\"10px;\">
                                        <td class=\"header__nexttitle\" align=\"right\">
                                            <a href=\"https://";
        // line 422
        echo twig_escape_filter($this->env, ($context["headerLink"] ?? null), "html", null, true);
        echo "/\" target=\"_blank\">";
        echo twig_escape_filter($this->env, ($context["headerLink"] ?? null), "html", null, true);
        echo "</a>
                                        </td>
                                        <td style=\"padding-top: 0px; width: 24px\" align=\"center\"><img class=\"tg-svg\"
                                                src=\"";
        // line 425
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/tg.svg\" alt=\"img\"></td>
                                    </tr>
                                </table>
                            </td>
                            <td style=\"padding-top:5px;\">
                                <img class=\"logo-svg\" src=\"";
        // line 430
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
        // line 442
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/sign.svg\" alt=\"img\"
                    style=\"padding-right: 15px;\"></span>
            <span style=\"padding-left: 15px; padding-right: 4px;\">Организатор</span>
            <span><img class=\"sign-svg\" src=\"";
        // line 445
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/sign.svg\" alt=\"img\"></span>
        </div>
    </footer>

    <main>

        ";
        // line 451
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowsPages"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 452
            echo "        <div style=\"page-break-after: always;\">
            <div class=\"main\">

                ";
            // line 455
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["keyName"] => $context["table"]) {
                // line 456
                echo "                <div class=\"dataTable__title\">
                    ";
                // line 457
                echo twig_escape_filter($this->env, $context["keyName"], "html", null, true);
                echo "
                </div>

                <table class=\"dataTable\" cellpadding=\"9\" border=\"0\" cellspacing=\"0\">
                    <thead>
                        ";
                // line 462
                if (($context["keyName"] == "План")) {
                    // line 463
                    echo "                        <tr>
                            <td style=\"padding-left: 30px; width: 80px;\">
                                Билеты
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
                // line 481
                echo "
                        ";
                // line 482
                if (($context["keyName"] == "Ценовые пояса")) {
                    // line 483
                    echo "                        <tr>
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
                // line 498
                echo "
                    </thead>
                    <tbody>
                        ";
                // line 501
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["table"]);
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 502
                    echo "                        ";
                    if (($context["keyName"] == "План")) {
                        // line 503
                        echo "                        <tr class=\"tr-simple tr-plan ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 503) == "true")) {
                            echo " tr-group ";
                        }
                        // line 504
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 504) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 505
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 505) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 506
                        echo "                                    \">
                            <td class=\"tr-group__first\">
                                ";
                        // line 508
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "tickets", [], "any", false, false, false, 508), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 511
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "invitation", [], "any", false, false, false, 511), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 514
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "shaft", [], "any", false, false, false, 514), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 517
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sale", [], "any", false, false, false, 517), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 520
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "avg", [], "any", false, false, false, 520), "html", null, true);
                        echo "
                            </td>
                        </tr>
                        ";
                    }
                    // line 524
                    echo "
                        ";
                    // line 525
                    if (($context["keyName"] == "Ценовые пояса")) {
                        // line 526
                        echo "                        <tr class=\"tr-simple ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 526) == "true")) {
                            echo " tr-group ";
                        }
                        // line 527
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 527) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 528
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 528) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 529
                        echo "                                    \">
                            <td class=\"tr-group__first\">
                                <div class=\"zone-circle\" style=\"background-color: ";
                        // line 531
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "zone", [], "any", false, false, false, 531), "html", null, true);
                        echo ";\">

                                </div>
                            </td>
                            <td>
                                ";
                        // line 536
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, false, 536), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 539
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "amount", [], "any", false, false, false, 539), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 542
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum", [], "any", false, false, false, 542), "html", null, true);
                        echo "
                            </td>
                        </tr>
                        ";
                    }
                    // line 546
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 548
                echo "                    </tbody>
                </table>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyName'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 552
            echo "            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 555
        echo "
        <div style=\"page-break-after: always;\">
            <div class=\"main\">
                <div class=\"dataTable__title\">
                    Сумма продаж
                </div>
                <div class=\"chart-wrapper\">
                    <img class=\"chart\" src=\"http://test.test/1.png\" alt=\"chart\">
                </div>
                <div class=\"dataTable__title\">
                    Количество билетов
                </div>
                <div class=\"chart-wrapper\">
                    <img class=\"chart\" src=\"http://test.test/1.png\" alt=\"chart\">
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
        // line 592
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["page2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 593
            echo "                        <tr
                            class=\"tr-simple ";
            // line 594
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 594) == "true")) {
                echo " tr-group ";
            }
            // line 595
            echo "                                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 595) == "true")) {
                echo " tr-group__titleOne ";
            }
            // line 596
            echo "                                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 596) == "true")) {
                echo " tr-group__sub ";
            }
            echo "\">
                            <td class=\"tr-group__first\">
                                ";
            // line 598
            echo twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 598);
            echo "
                            </td>
                            <td>
                                ";
            // line 601
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "tickets", [], "any", false, false, false, 601), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 604
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "percent_tickets", [], "any", false, false, false, 604), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 607
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum", [], "any", false, false, false, 607), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 610
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "percent_sum", [], "any", false, false, false, 610), "html", null, true);
            echo "
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 614
        echo "                    </tbody>
                </table>
            </div>
        </div>

        <div style=\"page-break-after: always;\">
            <div class=\"main\">
                <div class=\"dataTable__title\">
                    Продажи по оперторам
                </div>
                <div class=\"chart-wrapper\">
                    <img class=\"chart\" src=\"http://test.test/1.png\" alt=\"chart\">
                </div>

                <table class=\"dataTable dataTable-manyhr\" cellpadding=\"9\">
                    <thead>
                        <tr class=\"headerTitle\">
                            <td colspan=\"5\">
                                Всего продано
                            </td>
                        </tr>
                        <tr>
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
        // line 655
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["page3"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 656
            echo "                        <tr
                            class=\"tr-simple ";
            // line 657
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 657) == "true")) {
                echo " tr-group ";
            }
            // line 658
            echo "                                                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 658) == "true")) {
                echo " tr-group__titleOne ";
            }
            // line 659
            echo "                                                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 659) == "true")) {
                echo " tr-group__sub ";
            }
            echo "\">
                            <td class=\"tr-group__first\">
                                ";
            // line 661
            echo twig_get_attribute($this->env, $this->source, $context["row"], "operator", [], "any", false, false, false, 661);
            echo "
                            </td>
                            <td>
                                ";
            // line 664
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "number_sold", [], "any", false, false, false, 664), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 667
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum_sold", [], "any", false, false, false, 667), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 670
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "number_return", [], "any", false, false, false, 670), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 673
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum_return", [], "any", false, false, false, 673), "html", null, true);
            echo "
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 677
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
        return "templateChart-ru.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  963 => 677,  953 => 673,  947 => 670,  941 => 667,  935 => 664,  929 => 661,  921 => 659,  916 => 658,  912 => 657,  909 => 656,  905 => 655,  862 => 614,  852 => 610,  846 => 607,  840 => 604,  834 => 601,  828 => 598,  820 => 596,  815 => 595,  811 => 594,  808 => 593,  804 => 592,  765 => 555,  757 => 552,  748 => 548,  741 => 546,  734 => 542,  728 => 539,  722 => 536,  714 => 531,  710 => 529,  705 => 528,  700 => 527,  695 => 526,  693 => 525,  690 => 524,  683 => 520,  677 => 517,  671 => 514,  665 => 511,  659 => 508,  655 => 506,  650 => 505,  645 => 504,  640 => 503,  637 => 502,  633 => 501,  628 => 498,  611 => 483,  609 => 482,  606 => 481,  586 => 463,  584 => 462,  576 => 457,  573 => 456,  569 => 455,  564 => 452,  560 => 451,  551 => 445,  545 => 442,  530 => 430,  522 => 425,  514 => 422,  506 => 417,  499 => 413,  495 => 412,  486 => 406,  479 => 402,  475 => 401,  459 => 388,  450 => 382,  439 => 374,  433 => 371,  427 => 368,  421 => 365,  411 => 358,  405 => 355,  87 => 40,  78 => 34,  68 => 27,  58 => 20,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "templateChart-ru.html", "C:\\Users\\notepc\\Sites\\test\\123\\pdfCode\\templates\\templateChart-ru.html");
    }
}
