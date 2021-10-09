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
class __TwigTemplate_c20437502456da1093233c50b6d0c58347815ccc6f103a1c95ff273aa70980e3 extends Template
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
            src: url(";
        // line 22
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/fonts/Montserrat-Regular.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Montserrat-Bold';
            font-style: normal;
            font-weight: normal;
            src: url(";
        // line 29
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/fonts/Montserrat-Bold.ttf) format('truetype');
        }

        @font-face {
            font-family: 'HouschkaPro';
            font-style: normal;
            font-weight: normal;
            src: url(";
        // line 36
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/fonts/HouschkaPro-Medium.ttf) format('truetype');
        }

        body {
            background-image: url('";
        // line 40
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/back.png');
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

        .tr-group__first {
            padding-left: 30px;
            position: relative;
        }

        .tr-simple td {
            border-bottom: 1px solid #E8ECF7;
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

        .dataTable__title {
            text-align: center;
            font-size: 17px;
            padding-top: 8px;
            padding-bottom: 10px;
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
                                <img class=\"flash-svg\" src=\"";
        // line 318
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/flash.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__person\">
                                ";
        // line 321
        echo twig_escape_filter($this->env, ($context["headerName"] ?? null), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </table>
                    <table class=\"invisable-table\" style=\"padding-top: 5px;\">
                        <tr>
                            <td style=\"width: 14px; padding-right: 7px;\">
                                <img class=\"calendar-svg\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/calendar.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__subtitle\" style=\"width: 80px;\">
                                ";
        // line 331
        echo twig_escape_filter($this->env, ($context["headerDate"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td style=\"padding-right: 7px;\">
                                <img class=\"point-svg\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/point.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__subtitle\">
                                ";
        // line 337
        echo twig_escape_filter($this->env, ($context["headerCity"] ?? null), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 345
        echo twig_escape_filter($this->env, ($context["headerDay"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 351
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
        // line 364
        echo twig_escape_filter($this->env, ($context["headerPhone"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 365
        echo twig_escape_filter($this->env, ($context["headerPhone"] ?? null), "html", null, true);
        echo "
                                            </a>
                                        </td>
                                        <td style=\"padding-top: 8px; width: 24px\" align=\"center\">
                                            <img class=\"phone-svg\" src=\"";
        // line 369
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/phone.svg\" alt=\"img\">
                                        </td>

                                    </tr>
                                    <tr height=\"10px;\">
                                        <td class=\"header__nexttitle\" align=\"right\">
                                            <a href=\"mailto:";
        // line 375
        echo twig_escape_filter($this->env, ($context["headerEmail"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 376
        echo twig_escape_filter($this->env, ($context["headerEmail"] ?? null), "html", null, true);
        echo "
                                            </a>
                                        </td>
                                        <td style=\"padding-top: 0px; width: 24px\" align=\"center\">
                                            <img class=\"email-svg\" src=\"";
        // line 380
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/email.svg\" alt=\"img\">
                                        </td>
                                    </tr>
                                    <tr height=\"10px;\">
                                        <td class=\"header__nexttitle\" align=\"right\">
                                            <a href=\"https://";
        // line 385
        echo twig_escape_filter($this->env, ($context["headerLink"] ?? null), "html", null, true);
        echo "/\" target=\"_blank\">";
        echo twig_escape_filter($this->env, ($context["headerLink"] ?? null), "html", null, true);
        echo "</a>
                                        </td>
                                        <td style=\"padding-top: 0px; width: 24px\" align=\"center\"><img class=\"tg-svg\"
                                                src=\"";
        // line 388
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/tg.svg\" alt=\"img\"></td>
                                    </tr>
                                </table>
                            </td>
                            <td style=\"padding-top:5px;\">
                                <img class=\"logo-svg\" src=\"";
        // line 393
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
        // line 405
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/sign.svg\" alt=\"img\"
                    style=\"padding-right: 15px;\"></span>
            <span style=\"padding-left: 15px; padding-right: 4px;\">Организатор</span>
            <span><img class=\"sign-svg\" src=\"";
        // line 408
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/sign.svg\" alt=\"img\"></span>
        </div>
    </footer>

    <main>
        ";
        // line 413
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowsPages1"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 414
            echo "        <div ";
            if (($context["key"] != 0)) {
                echo " style=\"page-break-before: always;\" ";
            }
            echo ">
            <div class=\"main\">
                ";
            // line 416
            if (($context["key"] == 0)) {
                // line 417
                echo "                <div class=\"title-zone tz-p1\">
                    <span>Финансовый результат</span>
                </div>
                ";
            }
            // line 421
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
            // line 436
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 437
                echo "                        <tr class=\"tr-simple ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 437) == "true")) {
                    echo " tr-group ";
                }
                // line 438
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 438) == "true")) {
                    echo " tr-group__titleOne ";
                }
                // line 439
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 439) == "true")) {
                    echo " tr-group__sub ";
                }
                echo "\">
                            <td class=\"tr-group__first\">
                                ";
                // line 441
                echo twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 441);
                echo "
                            </td>
                            <td>
                                ";
                // line 444
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 444), "html", null, true);
                echo "
                            </td>
                            <td>
                                ";
                // line 447
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 447), "html", null, true);
                echo "
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 451
            echo "                    </tbody>
                </table>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 456
        echo "
        ";
        // line 457
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowsPages2"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 458
            echo "        <div style=\"page-break-before: always;\">
            <div class=\"main\">


                <div class=\"title-zone\" style=\"padding-top: 20px;\">
                    ";
            // line 463
            if (($context["key"] == 0)) {
                // line 464
                echo "                    <span>Финансовый отчет</span>
                    ";
            } else {
                // line 466
                echo "                    <div style=\"height: 12px;\"></div>
                    ";
            }
            // line 468
            echo "                </div>
                ";
            // line 469
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["keyName"] => $context["table"]) {
                // line 470
                echo "                <div class=\"dataTable__title\">
                    ";
                // line 471
                echo twig_escape_filter($this->env, $context["keyName"], "html", null, true);
                echo "
                </div>

                <table class=\"dataTable\" cellpadding=\"9\" border=\"0\" cellspacing=\"0\">
                    <thead>
                        ";
                // line 476
                if (($context["keyName"] == "Продажи")) {
                    // line 477
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
                // line 498
                echo "
                        ";
                // line 499
                if (((($context["keyName"] == "Организация мероприятия") || ($context["keyName"] == "Реклама")) || ($context["keyName"] == "Интернет-маркетинг"))) {
                    // line 501
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
                // line 519
                echo "
                        ";
                // line 520
                if (((($context["keyName"] == "Налоги и сборы") || ($context["keyName"] == "Гонорары")) || ($context["keyName"] == "Прибыль"))) {
                    // line 521
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
                // line 539
                echo "
                        ";
                // line 540
                if (($context["keyName"] == "АВ билетных операторов")) {
                    // line 541
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
                // line 553
                echo "                    </thead>
                    <tbody>
                        ";
                // line 555
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["table"]);
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 556
                    echo "                        ";
                    if (($context["keyName"] == "Продажи")) {
                        // line 557
                        echo "                        <tr class=\"tr-simple ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 557) == "true")) {
                            echo " tr-group ";
                        }
                        // line 558
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 558) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 559
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 559) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 560
                        echo "                                    \">
                            <td class=\"tr-group__first\">
                                ";
                        // line 562
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "operator", [], "any", false, false, false, 562), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 565
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 565), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 568
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 568), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 571
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum", [], "any", false, false, false, 571), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 574
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 574), "html", null, true);
                        echo "
                            </td>
                            <td class=\"";
                        // line 576
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balanceColor", [], "any", false, false, false, 576), "html", null, true);
                        echo "\">
                                ";
                        // line 577
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 577), "html", null, true);
                        echo "
                            </td>
                        </tr>
                        ";
                    }
                    // line 581
                    echo "
                        ";
                    // line 582
                    if (($context["keyName"] == "АВ билетных операторов")) {
                        // line 583
                        echo "                        <tr class=\"tr-simple ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 583) == "true")) {
                            echo " tr-group ";
                        }
                        // line 584
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 584) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 585
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 585) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 586
                        echo "                                    \">
                            <td class=\"tr-group__first\">
                                ";
                        // line 588
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 588), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 591
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 591), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 594
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 594), "html", null, true);
                        echo "
                            </td>
                        </tr>
                        ";
                    }
                    // line 598
                    echo "
                        ";
                    // line 599
                    if (((($context["keyName"] == "Налоги и сборы") || ($context["keyName"] == "Гонорары")) || ($context["keyName"] == "Прибыль"))) {
                        // line 600
                        echo "                        <tr class=\"tr-simple ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 600) == "true")) {
                            echo " tr-group ";
                        }
                        // line 601
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 601) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 602
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 602) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 603
                        echo "                                    \">
                            <td class=\"tr-group__first\">
                                ";
                        // line 605
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "category", [], "any", false, false, false, 605), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 608
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 608), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 611
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 611), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 614
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 614), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 617
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 617), "html", null, true);
                        echo "
                            </td>
                        </tr>
                        ";
                    }
                    // line 621
                    echo "
                        ";
                    // line 622
                    if (((($context["keyName"] == "Организация мероприятия") || ($context["keyName"] == "Реклама")) || ($context["keyName"] == "Интернет-маркетинг"))) {
                        // line 624
                        echo "                        <tr class=\"tr-simple ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 624) == "true")) {
                            echo " tr-group ";
                        }
                        // line 625
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 625) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 626
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 626) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 627
                        echo "                                    \">
                            <td class=\"tr-group__first\">
                                <div class=\"sub-before\">
                                    <img src=\"";
                        // line 630
                        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
                        echo "/images/arrow.svg\" alt=\"arrow\">
                                </div>

                                ";
                        // line 633
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 633), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 636
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 636), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 639
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 639), "html", null, true);
                        echo "
                            </td>
                            <td>
                                ";
                        // line 642
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 642), "html", null, true);
                        echo "
                            </td>
                            <td class=\"";
                        // line 644
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balanceColor", [], "any", false, false, false, 644), "html", null, true);
                        echo "\">
                                ";
                        // line 645
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 645), "html", null, true);
                        echo "
                            </td>
                        </tr>
                        ";
                    }
                    // line 649
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 650
                echo "                    </tbody>
                </table>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyName'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 654
            echo "            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 657
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
        return array (  1009 => 657,  1001 => 654,  992 => 650,  986 => 649,  979 => 645,  975 => 644,  970 => 642,  964 => 639,  958 => 636,  952 => 633,  946 => 630,  941 => 627,  936 => 626,  931 => 625,  926 => 624,  924 => 622,  921 => 621,  914 => 617,  908 => 614,  902 => 611,  896 => 608,  890 => 605,  886 => 603,  881 => 602,  876 => 601,  871 => 600,  869 => 599,  866 => 598,  859 => 594,  853 => 591,  847 => 588,  843 => 586,  838 => 585,  833 => 584,  828 => 583,  826 => 582,  823 => 581,  816 => 577,  812 => 576,  807 => 574,  801 => 571,  795 => 568,  789 => 565,  783 => 562,  779 => 560,  774 => 559,  769 => 558,  764 => 557,  761 => 556,  757 => 555,  753 => 553,  739 => 541,  737 => 540,  734 => 539,  714 => 521,  712 => 520,  709 => 519,  689 => 501,  687 => 499,  684 => 498,  661 => 477,  659 => 476,  651 => 471,  648 => 470,  644 => 469,  641 => 468,  637 => 466,  633 => 464,  631 => 463,  624 => 458,  620 => 457,  617 => 456,  607 => 451,  597 => 447,  591 => 444,  585 => 441,  577 => 439,  572 => 438,  567 => 437,  563 => 436,  542 => 421,  536 => 417,  534 => 416,  526 => 414,  522 => 413,  514 => 408,  508 => 405,  493 => 393,  485 => 388,  477 => 385,  469 => 380,  462 => 376,  458 => 375,  449 => 369,  442 => 365,  438 => 364,  422 => 351,  413 => 345,  402 => 337,  396 => 334,  390 => 331,  384 => 328,  374 => 321,  368 => 318,  87 => 40,  80 => 36,  70 => 29,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template.html", "C:\\Users\\notepc\\Sites\\test\\123\\pdfCode\\templates\\template.html");
    }
}
