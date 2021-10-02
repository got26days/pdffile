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

        .tr-simple td{
            border-bottom: 1px solid  #E8ECF7;
        }

        

        footer {
            position: fixed;
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

        .sub-before img{
            widht: 12px;
            height: 12px;
        }

        .tr-group__sub .sub-before{
            display: block;
            position:absolute;
            left: 31px;
            top: -7px;
        }

        .redPrice{
            color: #FF0066 !important;
        }
        .greenPrice{
            color: #0E9702 !important;
        }
        table { 
            border-spacing: 0 !important;
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
        // line 316
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
        // line 326
        echo twig_escape_filter($this->env, ($context["headerDate"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td style=\"padding-right: 7px;\">
                                <img class=\"point-svg\" src=\"http://test.test/images/point.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__subtitle\">
                                ";
        // line 332
        echo twig_escape_filter($this->env, ($context["headerCity"] ?? null), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 340
        echo twig_escape_filter($this->env, ($context["headerDay"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 346
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
        // line 359
        echo twig_escape_filter($this->env, ($context["headerPhone"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 360
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
        // line 370
        echo twig_escape_filter($this->env, ($context["headerEmail"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 371
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
        // line 380
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
        // line 408
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowsPages1"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 409
            echo "        <div 
        ";
            // line 410
            if (($context["key"] != 0)) {
                // line 411
                echo "        style=\"page-break-before: always;\"
        ";
            }
            // line 412
            echo ">
            <div class=\"main\">
                ";
            // line 414
            if (($context["key"] == 0)) {
                // line 415
                echo "                <div class=\"title-zone tz-p1\">
                    <span>Финансовый результат</span>
                </div>
                ";
            }
            // line 419
            echo "                <table class=\"dataTable\" 
                ";
            // line 420
            if (($context["key"] != 0)) {
                // line 421
                echo "                style=\"padding-top: 50px;\"
                ";
            }
            // line 423
            echo "                cellpadding=\"9\">
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
            // line 438
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 439
                echo "                        <tr 
                            class=\"tr-simple ";
                // line 440
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 440) == "true")) {
                    echo " tr-group ";
                }
                // line 441
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 441) == "true")) {
                    echo " tr-group__titleOne ";
                }
                // line 442
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 442) == "true")) {
                    echo " tr-group__sub ";
                }
                echo "\"
                        >
                            <td class=\"tr-group__first\">
                                ";
                // line 445
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 445), "html", null, true);
                echo "
                            </td>
                            <td>
                                ";
                // line 448
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 448), "html", null, true);
                echo "
                            </td>
                            <td>
                                ";
                // line 451
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 451), "html", null, true);
                echo "
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 455
            echo "                    </tbody>
                </table>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 460
        echo "
        ";
        // line 461
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowsPages2"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 462
            echo "        <div 
        style=\"page-break-before: always;\">
            <div class=\"main\">

           
                <div class=\"title-zone\" style=\"padding-top: 20px;\">
                    ";
            // line 468
            if (($context["key"] == 0)) {
                // line 469
                echo "                    <span>Финансовый отчет</span>
                    ";
            } else {
                // line 471
                echo "                    <div style=\"height: 12px;\"></div>
                    ";
            }
            // line 473
            echo "                </div>
                ";
            // line 474
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["keyName"] => $context["table"]) {
                // line 475
                echo "                    <div class=\"dataTable__title\"
                    >
                        ";
                // line 477
                echo twig_escape_filter($this->env, $context["keyName"], "html", null, true);
                echo " 
                    </div>

                    <table class=\"dataTable\" 
                    cellpadding=\"9\" border=\"0\" cellspacing=\"0\">
                        <thead>
                            ";
                // line 483
                if (($context["keyName"] == "Продажи")) {
                    // line 484
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
                // line 505
                echo "
                            ";
                // line 506
                if (((($context["keyName"] == "Организация мероприятия") || ($context["keyName"] == "Реклама")) || ($context["keyName"] == "Интернет-маркетинг"))) {
                    // line 507
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
                // line 525
                echo "
                            ";
                // line 526
                if (((($context["keyName"] == "Налоги и сборы") || ($context["keyName"] == "Гонорары")) || ($context["keyName"] == "Прибыль"))) {
                    // line 527
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
                // line 545
                echo "
                            ";
                // line 546
                if (($context["keyName"] == "АВ билетных операторов")) {
                    // line 547
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
                // line 559
                echo "                        </thead>
                        <tbody>
                            ";
                // line 561
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["table"]);
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 562
                    echo "                                ";
                    if (($context["keyName"] == "Продажи")) {
                        // line 563
                        echo "                                <tr 
                                    class=\"tr-simple ";
                        // line 564
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 564) == "true")) {
                            echo " tr-group ";
                        }
                        // line 565
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 565) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 566
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 566) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 567
                        echo "                                    \"
                                >
                                    <td class=\"tr-group__first\">
                                        ";
                        // line 570
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "operator", [], "any", false, false, false, 570), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 573
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 573), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 576
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 576), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 579
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum", [], "any", false, false, false, 579), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 582
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 582), "html", null, true);
                        echo "
                                    </td>
                                    <td class=\"";
                        // line 584
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balanceColor", [], "any", false, false, false, 584), "html", null, true);
                        echo "\">
                                        ";
                        // line 585
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 585), "html", null, true);
                        echo "
                                    </td>
                                </tr>
                            ";
                    }
                    // line 589
                    echo "
                            ";
                    // line 590
                    if (($context["keyName"] == "АВ билетных операторов")) {
                        // line 591
                        echo "                                <tr
                                    class=\"tr-simple ";
                        // line 592
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 592) == "true")) {
                            echo " tr-group ";
                        }
                        // line 593
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 593) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 594
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 594) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 595
                        echo "                                    \"
                                >
                                    <td class=\"tr-group__first\">
                                        ";
                        // line 598
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 598), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 601
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 601), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 604
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 604), "html", null, true);
                        echo "
                                    </td>
                                </tr>
                            ";
                    }
                    // line 608
                    echo "
                            ";
                    // line 609
                    if (((($context["keyName"] == "Налоги и сборы") || ($context["keyName"] == "Гонорары")) || ($context["keyName"] == "Прибыль"))) {
                        // line 610
                        echo "                                <tr
                                    class=\"tr-simple ";
                        // line 611
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 611) == "true")) {
                            echo " tr-group ";
                        }
                        // line 612
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 612) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 613
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 613) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 614
                        echo "                                    \"
                                >
                                    <td class=\"tr-group__first\">
                                        ";
                        // line 617
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "category", [], "any", false, false, false, 617), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 620
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 620), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 623
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 623), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 626
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 626), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 629
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 629), "html", null, true);
                        echo "
                                    </td>
                                </tr>
                            ";
                    }
                    // line 633
                    echo "
                            ";
                    // line 634
                    if (((($context["keyName"] == "Организация мероприятия") || ($context["keyName"] == "Реклама")) || ($context["keyName"] == "Интернет-маркетинг"))) {
                        // line 635
                        echo "                                <tr
                                    class=\"tr-simple ";
                        // line 636
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 636) == "true")) {
                            echo " tr-group ";
                        }
                        // line 637
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 637) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 638
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 638) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 639
                        echo "                                    \"
                                >
                                    <td class=\"tr-group__first\">
                                       <div class=\"sub-before\">
                                           <img src=\"http://test.test/images/arrow.svg\" alt=\"arrow\">
                                       </div> 
                                       
                                       ";
                        // line 646
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 646), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 649
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 649), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 652
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 652), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 655
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 655), "html", null, true);
                        echo "
                                    </td>
                                    <td class=\"";
                        // line 657
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balanceColor", [], "any", false, false, false, 657), "html", null, true);
                        echo "\">
                                        ";
                        // line 658
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 658), "html", null, true);
                        echo "
                                    </td>
                                </tr>
                            ";
                    }
                    // line 662
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 663
                echo "                        </tbody>
                    </table>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyName'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 667
            echo "            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 670
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
        return array (  990 => 670,  982 => 667,  973 => 663,  967 => 662,  960 => 658,  956 => 657,  951 => 655,  945 => 652,  939 => 649,  933 => 646,  924 => 639,  919 => 638,  914 => 637,  910 => 636,  907 => 635,  905 => 634,  902 => 633,  895 => 629,  889 => 626,  883 => 623,  877 => 620,  871 => 617,  866 => 614,  861 => 613,  856 => 612,  852 => 611,  849 => 610,  847 => 609,  844 => 608,  837 => 604,  831 => 601,  825 => 598,  820 => 595,  815 => 594,  810 => 593,  806 => 592,  803 => 591,  801 => 590,  798 => 589,  791 => 585,  787 => 584,  782 => 582,  776 => 579,  770 => 576,  764 => 573,  758 => 570,  753 => 567,  748 => 566,  743 => 565,  739 => 564,  736 => 563,  733 => 562,  729 => 561,  725 => 559,  711 => 547,  709 => 546,  706 => 545,  686 => 527,  684 => 526,  681 => 525,  661 => 507,  659 => 506,  656 => 505,  633 => 484,  631 => 483,  622 => 477,  618 => 475,  614 => 474,  611 => 473,  607 => 471,  603 => 469,  601 => 468,  593 => 462,  589 => 461,  586 => 460,  576 => 455,  566 => 451,  560 => 448,  554 => 445,  545 => 442,  540 => 441,  536 => 440,  533 => 439,  529 => 438,  512 => 423,  508 => 421,  506 => 420,  503 => 419,  497 => 415,  495 => 414,  491 => 412,  487 => 411,  485 => 410,  482 => 409,  478 => 408,  445 => 380,  433 => 371,  429 => 370,  416 => 360,  412 => 359,  396 => 346,  387 => 340,  376 => 332,  367 => 326,  354 => 316,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template.html", "C:\\Users\\notepc\\Sites\\test\\templates\\template.html");
    }
}
