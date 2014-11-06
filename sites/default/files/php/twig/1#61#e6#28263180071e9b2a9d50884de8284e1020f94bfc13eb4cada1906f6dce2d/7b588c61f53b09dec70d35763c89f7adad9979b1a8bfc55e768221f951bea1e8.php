<?php

/* core/modules/system/templates/select.html.twig */
class __TwigTemplate_61e628263180071e9b2a9d50884de8284e1020f94bfc13eb4cada1906f6dce2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 15
        echo "<select";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["options"]) ? $context["options"] : null), "html", null, true);
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 46,  65 => 44,  62 => 43,  56 => 41,  54 => 40,  49 => 39,  43 => 37,  41 => 36,  33 => 33,  26 => 31,  24 => 26,  95 => 87,  89 => 84,  84 => 83,  81 => 82,  75 => 80,  72 => 79,  66 => 77,  64 => 76,  59 => 75,  53 => 72,  48 => 71,  45 => 70,  39 => 68,  36 => 67,  30 => 65,  28 => 32,  23 => 25,  21 => 24,  19 => 15,);
    }
}
