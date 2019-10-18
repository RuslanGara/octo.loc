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

/* C:\OSPanel\domains\octo.loc/themes/responsiv-clean/layouts/default.htm */
class __TwigTemplate_f06f9fdb73945defe856bcf1670e75fb5af5a2abb9026965b0e1f694c9deb4e4 extends \Twig\Template
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
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>

        <div style=\"max-width: 1403px; margin: 0 auto\">
            <!-- Header -->
            <header id=\"layout-header\">
                ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "            </header>

            <!-- Sidebar -->
            <section id=\"layout-sidebar\">
                ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "            </section>

            <!-- Content -->
            <section id=\"layout-content\">
                ";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 22
        echo "            </section>

            <!-- Footer -->
            <footer id=\"layout-footer\">
                ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "            </footer>
        </div>

        <!-- Scripts -->
        ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\octo.loc/themes/responsiv-clean/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 32,  92 => 31,  86 => 27,  82 => 26,  76 => 22,  74 => 21,  68 => 17,  64 => 16,  58 => 12,  54 => 11,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'site/meta' %}
    </head>
    <body>

        <div style=\"max-width: 1403px; margin: 0 auto\">
            <!-- Header -->
            <header id=\"layout-header\">
                {% partial 'site/header' %}
            </header>

            <!-- Sidebar -->
            <section id=\"layout-sidebar\">
                {% partial 'site/sidebar' %}
            </section>

            <!-- Content -->
            <section id=\"layout-content\">
                {% page %}
            </section>

            <!-- Footer -->
            <footer id=\"layout-footer\">
                {% partial 'site/footer' %}
            </footer>
        </div>

        <!-- Scripts -->
        {% partial 'site/scripts' %}
    </body>
</html>", "C:\\OSPanel\\domains\\octo.loc/themes/responsiv-clean/layouts/default.htm", "");
    }
}
