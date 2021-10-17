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

/* footer-en.html */
class __TwigTemplate_452590459e6aa29a2700f4e4a15e72893c3ddfc10bc34825dd687cbe0769e016 extends Template
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
        echo "<footer>
\t<div class=\"footer\">
\t\t<span style=\"padding-right: 4px;\">Артист</span>
\t\t<span><img class=\"sign-svg\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/sign.svg\" alt=\"img\" style=\"padding-right: 15px;\"></span>
\t\t<span style=\"padding-left: 15px; padding-right: 4px;\">Организатор</span>
\t\t<span><img class=\"sign-svg\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/images/sign.svg\" alt=\"img\"></span>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "footer-en.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer-en.html", "C:\\Users\\notepc\\Sites\\test\\123\\pdfCode\\templates\\footer-en.html");
    }
}
