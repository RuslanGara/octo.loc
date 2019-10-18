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

/* C:\OSPanel\domains\octo.loc/themes/responsiv-clean/partials/site/meta.htm */
class __TwigTemplate_0f08f3e77f350b423f7df433dad8cea979711bae9d6b1720096d92df90178ad2 extends \Twig\Template
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
        echo "<meta charset=\"utf-8\">
<title>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 2), "title", [], "any", false, false, false, 2), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 2), "site_name", [], "any", false, false, false, 2), "html", null, true);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 3), "meta_description", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
<meta name=\"title\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "meta_title", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"OctoberCMS\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"generator\" content=\"OctoberCMS\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
<link href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "@framework.extras", 1 => "assets/less/vendor.less"]);
        // line 12
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/less/theme.less"]);
        echo "\" rel=\"stylesheet\">
";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\octo.loc/themes/responsiv-clean/partials/site/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  66 => 13,  63 => 12,  61 => 9,  57 => 8,  50 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<title>{{ this.page.title }} - {{ this.theme.site_name }}</title>
<meta name=\"description\" content=\"{{ this.page.meta_description }}\">
<meta name=\"title\" content=\"{{ this.page.meta_title }}\">
<meta name=\"author\" content=\"OctoberCMS\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"generator\" content=\"OctoberCMS\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
<link href=\"{{ [
    '@framework.extras',
    'assets/less/vendor.less'
]|theme }}\" rel=\"stylesheet\">
<link href=\"{{ ['assets/less/theme.less']|theme }}\" rel=\"stylesheet\">
{% styles %}", "C:\\OSPanel\\domains\\octo.loc/themes/responsiv-clean/partials/site/meta.htm", "");
    }
}
