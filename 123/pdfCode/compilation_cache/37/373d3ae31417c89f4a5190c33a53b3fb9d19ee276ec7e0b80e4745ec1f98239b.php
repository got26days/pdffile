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
            line-height: 12px;
        }

        .headerTitle td {
            background: none !important;
            color: black !important;
            padding-bottom: 12px !important;
            padding-top: 10px !important;
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

        .dataTable-manyhr td {
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
        // line 356
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/flash.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__person\">
                                ";
        // line 359
        echo twig_escape_filter($this->env, ($context["headerName"] ?? null), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </table>
                    <table class=\"invisable-table\" style=\"padding-top: 5px;\">
                        <tr>
                            <td style=\"width: 14px; padding-right: 7px;\">
                                <img class=\"calendar-svg\" src=\"";
        // line 366
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/calendar.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__subtitle\" style=\"width: 80px;\">
                                ";
        // line 369
        echo twig_escape_filter($this->env, ($context["headerDate"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td style=\"padding-right: 7px;\">
                                <img class=\"point-svg\" src=\"";
        // line 372
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/point.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__subtitle\">
                                ";
        // line 375
        echo twig_escape_filter($this->env, ($context["headerCity"] ?? null), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 383
        echo twig_escape_filter($this->env, ($context["headerDay"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 389
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
        // line 402
        echo twig_escape_filter($this->env, ($context["headerPhone"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 403
        echo twig_escape_filter($this->env, ($context["headerPhone"] ?? null), "html", null, true);
        echo "
                                            </a>
                                        </td>
                                        <td style=\"padding-top: 8px; width: 24px\" align=\"center\">
                                            <img class=\"phone-svg\" src=\"";
        // line 407
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/phone.svg\" alt=\"img\">
                                        </td>

                                    </tr>
                                    <tr height=\"10px;\">
                                        <td class=\"header__nexttitle\" align=\"right\">
                                            <a href=\"mailto:";
        // line 413
        echo twig_escape_filter($this->env, ($context["headerEmail"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 414
        echo twig_escape_filter($this->env, ($context["headerEmail"] ?? null), "html", null, true);
        echo "
                                            </a>
                                        </td>
                                        <td style=\"padding-top: 0px; width: 24px\" align=\"center\">
                                            <img class=\"email-svg\" src=\"";
        // line 418
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/email.svg\" alt=\"img\">
                                        </td>
                                    </tr>
                                    <tr height=\"10px;\">
                                        <td class=\"header__nexttitle\" align=\"right\">
                                            <a href=\"https://";
        // line 423
        echo twig_escape_filter($this->env, ($context["headerLink"] ?? null), "html", null, true);
        echo "/\" target=\"_blank\">";
        echo twig_escape_filter($this->env, ($context["headerLink"] ?? null), "html", null, true);
        echo "</a>
                                        </td>
                                        <td style=\"padding-top: 0px; width: 24px\" align=\"center\"><img class=\"tg-svg\"
                                                src=\"";
        // line 426
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/tg.svg\" alt=\"img\"></td>
                                    </tr>
                                </table>
                            </td>
                            <td style=\"padding-top:5px;\">
                                <img class=\"logo-svg\" src=\"";
        // line 431
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
        // line 443
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/sign.svg\" alt=\"img\"
                    style=\"padding-right: 15px;\"></span>
            <span style=\"padding-left: 15px; padding-right: 4px;\">Организатор</span>
            <span><img class=\"sign-svg\" src=\"";
        // line 446
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/sign.svg\" alt=\"img\"></span>
        </div>
    </footer>

    <main>

        ";
        // line 452
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowsPages"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 453
            echo "        <div style=\"page-break-after: always;\">
            <div class=\"main\">

                ";
            // line 456
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["keyName"] => $context["table"]) {
                // line 457
                echo "                <table class=\"dataTable\" cellpadding=\"9\" border=\"0\" cellspacing=\"0\">
                    <thead>
                        ";
                // line 459
                if (($context["keyName"] == "План")) {
                    // line 460
                    echo "                        <tr class=\"headerTitle\">
                            <td colspan=\"5\">
                                ";
                    // line 462
                    echo twig_escape_filter($this->env, $context["keyName"], "html", null, true);
                    echo "
                            </td>
                        </tr>
                        <tr>
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
                // line 483
                echo "
                        ";
                // line 484
                if (($context["keyName"] == "Ценовые пояса")) {
                    // line 485
                    echo "                        <tr class=\"headerTitle\">
                            <td colspan=\"4\">
                                ";
                    // line 487
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
                // line 505
                echo "
                    </thead>
                    <tbody>
                        ";
                // line 508
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["table"]);
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 509
                    echo "                        ";
                    if (($context["keyName"] == "План")) {
                        // line 510
                        echo "                        <tr class=\"tr-simple tr-plan ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 510) == "true")) {
                            echo " tr-group ";
                        }
                        // line 511
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 511) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 512
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 512) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 513
                        echo "                                    \">
                            <td class=\"tr-group__first\">
                                ";
                        // line 515
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "tickets", [], "any", false, false, false, 515), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 518
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "invitation", [], "any", false, false, false, 518), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 521
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "shaft", [], "any", false, false, false, 521), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 524
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sale", [], "any", false, false, false, 524), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 527
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "avg", [], "any", false, false, false, 527), "html", null, true);
                        echo "
                            </td>
                        </tr>
                        ";
                    }
                    // line 531
                    echo "
                        ";
                    // line 532
                    if (($context["keyName"] == "Ценовые пояса")) {
                        // line 533
                        echo "                        <tr class=\"tr-simple ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 533) == "true")) {
                            echo " tr-group ";
                        }
                        // line 534
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 534) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 535
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 535) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 536
                        echo "                                    \">
                            <td class=\"tr-group__first\">
                                <div class=\"zone-circle\" style=\"background-color: ";
                        // line 538
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "zone", [], "any", false, false, false, 538), "html", null, true);
                        echo ";\">

                                </div>
                            </td>
                            <td>
                                ";
                        // line 543
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, false, 543), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 546
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "amount", [], "any", false, false, false, 546), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 549
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum", [], "any", false, false, false, 549), "html", null, true);
                        echo "
                            </td>
                        </tr>
                        ";
                    }
                    // line 553
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 555
                echo "                    </tbody>
                </table>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyName'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 559
            echo "            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 562
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
        // line 599
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["page2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 600
            echo "                        <tr
                            class=\"tr-simple ";
            // line 601
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 601) == "true")) {
                echo " tr-group ";
            }
            // line 602
            echo "                                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 602) == "true")) {
                echo " tr-group__titleOne ";
            }
            // line 603
            echo "                                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 603) == "true")) {
                echo " tr-group__sub ";
            }
            echo "\">
                            <td class=\"tr-group__first\">
                                ";
            // line 605
            echo twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 605);
            echo "
                            </td>
                            <td>
                                ";
            // line 608
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "tickets", [], "any", false, false, false, 608), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 611
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "percent_tickets", [], "any", false, false, false, 611), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 614
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum", [], "any", false, false, false, 614), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 617
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "percent_sum", [], "any", false, false, false, 617), "html", null, true);
            echo "
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 621
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
        // line 662
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["page3"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 663
            echo "                        <tr
                            class=\"tr-simple ";
            // line 664
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 664) == "true")) {
                echo " tr-group ";
            }
            // line 665
            echo "                                                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 665) == "true")) {
                echo " tr-group__titleOne ";
            }
            // line 666
            echo "                                                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 666) == "true")) {
                echo " tr-group__sub ";
            }
            echo "\">
                            <td class=\"tr-group__first\">
                                ";
            // line 668
            echo twig_get_attribute($this->env, $this->source, $context["row"], "operator", [], "any", false, false, false, 668);
            echo "
                            </td>
                            <td>
                                ";
            // line 671
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "number_sold", [], "any", false, false, false, 671), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 674
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum_sold", [], "any", false, false, false, 674), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 677
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "number_return", [], "any", false, false, false, 677), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 680
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum_return", [], "any", false, false, false, 680), "html", null, true);
            echo "
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 684
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
        return array (  973 => 684,  963 => 680,  957 => 677,  951 => 674,  945 => 671,  939 => 668,  931 => 666,  926 => 665,  922 => 664,  919 => 663,  915 => 662,  872 => 621,  862 => 617,  856 => 614,  850 => 611,  844 => 608,  838 => 605,  830 => 603,  825 => 602,  821 => 601,  818 => 600,  814 => 599,  775 => 562,  767 => 559,  758 => 555,  751 => 553,  744 => 549,  738 => 546,  732 => 543,  724 => 538,  720 => 536,  715 => 535,  710 => 534,  705 => 533,  703 => 532,  700 => 531,  693 => 527,  687 => 524,  681 => 521,  675 => 518,  669 => 515,  665 => 513,  660 => 512,  655 => 511,  650 => 510,  647 => 509,  643 => 508,  638 => 505,  617 => 487,  613 => 485,  611 => 484,  608 => 483,  584 => 462,  580 => 460,  578 => 459,  574 => 457,  570 => 456,  565 => 453,  561 => 452,  552 => 446,  546 => 443,  531 => 431,  523 => 426,  515 => 423,  507 => 418,  500 => 414,  496 => 413,  487 => 407,  480 => 403,  476 => 402,  460 => 389,  451 => 383,  440 => 375,  434 => 372,  428 => 369,  422 => 366,  412 => 359,  406 => 356,  87 => 40,  78 => 34,  68 => 27,  58 => 20,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "templateChart-ru.html", "C:\\Users\\notepc\\Sites\\test\\123\\pdfCode\\templates\\templateChart-ru.html");
    }
}
