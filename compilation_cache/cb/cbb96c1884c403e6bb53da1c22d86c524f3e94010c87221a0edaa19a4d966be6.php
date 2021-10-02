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
            padding-left: 50px !important;
        }

        .redPrice{
            color: #FF0066 !important;
        }
        .greenPrice{
            color: #0E9702 !important;
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
        // line 297
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
        // line 307
        echo twig_escape_filter($this->env, ($context["headerDate"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td style=\"padding-right: 7px;\">
                                <img class=\"point-svg\" src=\"http://test.test/images/point.svg\" alt=\"img\">
                            </td>
                            <td align=\"left\" class=\"header__subtitle\">
                                ";
        // line 313
        echo twig_escape_filter($this->env, ($context["headerCity"] ?? null), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 321
        echo twig_escape_filter($this->env, ($context["headerDay"] ?? null), "html", null, true);
        echo "
                            </td>
                            <td>

                            </td>
                            <td align=\"left\" class=\"header__nexttitle\">
                                ";
        // line 327
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
        // line 340
        echo twig_escape_filter($this->env, ($context["headerPhone"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 341
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
        // line 351
        echo twig_escape_filter($this->env, ($context["headerEmail"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">
                                                ";
        // line 352
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
        // line 361
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
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowsPages1"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 390
            echo "        <div 
        ";
            // line 391
            if (($context["key"] != 0)) {
                // line 392
                echo "        style=\"page-break-before: always;\"
        ";
            }
            // line 393
            echo ">
            <div class=\"main\">
                ";
            // line 395
            if (($context["key"] == 0)) {
                // line 396
                echo "                <div class=\"title-zone tz-p1\">
                    <span>Финансовый результат</span>
                </div>
                ";
            }
            // line 400
            echo "                <table class=\"dataTable\" 
                ";
            // line 401
            if (($context["key"] != 0)) {
                // line 402
                echo "                style=\"padding-top: 50px;\"
                ";
            }
            // line 404
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
            // line 419
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 420
                echo "                        <tr 
                            class=\"
                            tr-simple
                                ";
                // line 423
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 423) == "true")) {
                    echo " tr-group ";
                }
                // line 424
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 424) == "true")) {
                    echo " tr-group__titleOne ";
                }
                // line 425
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 425) == "true")) {
                    echo " tr-group__sub ";
                }
                // line 426
                echo "                            \"
                        >
                            <td class=\"tr-group__first\">
                                ";
                // line 429
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 429), "html", null, true);
                echo "
                            </td>
                            <td>
                                ";
                // line 432
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 432), "html", null, true);
                echo "
                            </td>
                            <td>
                                ";
                // line 435
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 435), "html", null, true);
                echo "
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 439
            echo "                    </tbody>
                </table>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 444
        echo "
        ";
        // line 445
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowsPages2"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 446
            echo "        <div 
        style=\"page-break-before: always;\">
            <div class=\"main\">

           
                <div class=\"title-zone\" style=\"padding-top: 20px;\">
                    ";
            // line 452
            if (($context["key"] == 0)) {
                // line 453
                echo "                    <span>Финансовый отчет</span>
                    ";
            } else {
                // line 455
                echo "                    <div style=\"height: 12px;\"></div>
                    ";
            }
            // line 457
            echo "                </div>
                ";
            // line 458
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["page"]);
            foreach ($context['_seq'] as $context["keyName"] => $context["table"]) {
                // line 459
                echo "                    <div class=\"dataTable__title\"
                    >
                        ";
                // line 461
                echo twig_escape_filter($this->env, $context["keyName"], "html", null, true);
                echo " 
                    </div>

                    <table class=\"dataTable\" 
                    cellpadding=\"9\" border=\"0\" cellspacing=\"0\">
                        <thead>
                            ";
                // line 467
                if (($context["keyName"] == "Продажи")) {
                    // line 468
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
                // line 489
                echo "
                            ";
                // line 490
                if (($context["keyName"] == "Организация мероприятия")) {
                    // line 491
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
                // line 509
                echo "
                            ";
                // line 510
                if (($context["keyName"] == "Налоги и сборы")) {
                    // line 511
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
                // line 529
                echo "
                            ";
                // line 530
                if (($context["keyName"] == "АВ билетных операторов")) {
                    // line 531
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
                // line 543
                echo "                        </thead>
                        <tbody>
                            ";
                // line 545
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["table"]);
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 546
                    echo "                                ";
                    if (($context["keyName"] == "Продажи")) {
                        // line 547
                        echo "                                <tr 
                                    class=\"
                                        tr-simple
                                        ";
                        // line 550
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 550) == "true")) {
                            echo " tr-group ";
                        }
                        // line 551
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 551) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 552
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 552) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 553
                        echo "                                    \"
                                >
                                    <td class=\"tr-group__first\">
                                        ";
                        // line 556
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "operator", [], "any", false, false, false, 556), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 559
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 559), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 562
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 562), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 565
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "sum", [], "any", false, false, false, 565), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 568
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 568), "html", null, true);
                        echo "
                                    </td>
                                    <td class=\"";
                        // line 570
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balanceColor", [], "any", false, false, false, 570), "html", null, true);
                        echo "\">
                                        ";
                        // line 571
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 571), "html", null, true);
                        echo "
                                    </td>
                                </tr>
                            ";
                    }
                    // line 575
                    echo "
                            ";
                    // line 576
                    if (($context["keyName"] == "АВ билетных операторов")) {
                        // line 577
                        echo "                                <tr
                                    class=\"
                                        tr-simple
                                        ";
                        // line 580
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 580) == "true")) {
                            echo " tr-group ";
                        }
                        // line 581
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 581) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 582
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 582) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 583
                        echo "                                    \"
                                >
                                    <td class=\"tr-group__first\">
                                        ";
                        // line 586
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 586), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 589
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 589), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 592
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 592), "html", null, true);
                        echo "
                                    </td>
                                </tr>
                            ";
                    }
                    // line 596
                    echo "
                            ";
                    // line 597
                    if (($context["keyName"] == "Налоги и сборы")) {
                        // line 598
                        echo "                                <tr
                                    class=\"
                                        tr-simple
                                        ";
                        // line 601
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 601) == "true")) {
                            echo " tr-group ";
                        }
                        // line 602
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 602) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 603
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 603) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 604
                        echo "                                    \"
                                >
                                    <td class=\"tr-group__first\">
                                        ";
                        // line 607
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "category", [], "any", false, false, false, 607), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 610
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 610), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 613
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 613), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 616
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 616), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 619
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 619), "html", null, true);
                        echo "
                                    </td>
                                </tr>
                            ";
                    }
                    // line 623
                    echo "
                            ";
                    // line 624
                    if (($context["keyName"] == "Организация мероприятия")) {
                        // line 625
                        echo "                                <tr
                                    class=\"
                                        tr-simple
                                        ";
                        // line 628
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTotal", [], "any", false, false, false, 628) == "true")) {
                            echo " tr-group ";
                        }
                        // line 629
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isTitle", [], "any", false, false, false, 629) == "true")) {
                            echo " tr-group__title ";
                        }
                        // line 630
                        echo "                                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["row"], "isSub", [], "any", false, false, false, 630) == "true")) {
                            echo " tr-group__sub ";
                        }
                        // line 631
                        echo "                                    \"
                                >
                                    <td class=\"tr-group__first\">
                                        ";
                        // line 634
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 634), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 637
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "plan", [], "any", false, false, false, 637), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 640
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "fact", [], "any", false, false, false, 640), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        ";
                        // line 643
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paid", [], "any", false, false, false, 643), "html", null, true);
                        echo "
                                    </td>
                                    <td class=\"";
                        // line 645
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balanceColor", [], "any", false, false, false, 645), "html", null, true);
                        echo "\">
                                        ";
                        // line 646
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "balance", [], "any", false, false, false, 646), "html", null, true);
                        echo "
                                    </td>
                                </tr>
                            ";
                    }
                    // line 650
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 651
                echo "                        </tbody>
                    </table>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyName'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 655
            echo "            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 658
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
        return array (  978 => 658,  970 => 655,  961 => 651,  955 => 650,  948 => 646,  944 => 645,  939 => 643,  933 => 640,  927 => 637,  921 => 634,  916 => 631,  911 => 630,  906 => 629,  902 => 628,  897 => 625,  895 => 624,  892 => 623,  885 => 619,  879 => 616,  873 => 613,  867 => 610,  861 => 607,  856 => 604,  851 => 603,  846 => 602,  842 => 601,  837 => 598,  835 => 597,  832 => 596,  825 => 592,  819 => 589,  813 => 586,  808 => 583,  803 => 582,  798 => 581,  794 => 580,  789 => 577,  787 => 576,  784 => 575,  777 => 571,  773 => 570,  768 => 568,  762 => 565,  756 => 562,  750 => 559,  744 => 556,  739 => 553,  734 => 552,  729 => 551,  725 => 550,  720 => 547,  717 => 546,  713 => 545,  709 => 543,  695 => 531,  693 => 530,  690 => 529,  670 => 511,  668 => 510,  665 => 509,  645 => 491,  643 => 490,  640 => 489,  617 => 468,  615 => 467,  606 => 461,  602 => 459,  598 => 458,  595 => 457,  591 => 455,  587 => 453,  585 => 452,  577 => 446,  573 => 445,  570 => 444,  560 => 439,  550 => 435,  544 => 432,  538 => 429,  533 => 426,  528 => 425,  523 => 424,  519 => 423,  514 => 420,  510 => 419,  493 => 404,  489 => 402,  487 => 401,  484 => 400,  478 => 396,  476 => 395,  472 => 393,  468 => 392,  466 => 391,  463 => 390,  459 => 389,  426 => 361,  414 => 352,  410 => 351,  397 => 341,  393 => 340,  377 => 327,  368 => 321,  357 => 313,  348 => 307,  335 => 297,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template.html", "C:\\Users\\notepc\\Sites\\test\\templates\\template.html");
    }
}
