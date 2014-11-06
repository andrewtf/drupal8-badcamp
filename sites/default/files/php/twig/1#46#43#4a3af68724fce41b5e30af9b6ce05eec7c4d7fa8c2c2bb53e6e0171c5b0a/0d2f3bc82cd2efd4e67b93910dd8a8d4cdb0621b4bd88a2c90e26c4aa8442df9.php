<?php

/* core/modules/system/templates/progress-bar.html.twig */
class __TwigTemplate_46434a3af68724fce41b5e30af9b6ce05eec7c4d7fa8c2c2bb53e6e0171c5b0a extends Twig_Template
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
        // line 16
        echo "<div class=\"progress\" data-drupal-progress>
  ";
        // line 17
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 18
            echo "    <div class=\"progress__label\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</div>
  ";
        }
        // line 20
        echo "  <div class=\"progress__track\"><div class=\"progress__bar\" style=\"width: ";
        echo twig_drupal_escape_filter($this->env, (isset($context["percent"]) ? $context["percent"] : null), "html", null, true);
        echo "%\"></div></div>
  <div class=\"progress__percentage\">";
        // line 21
        echo twig_drupal_escape_filter($this->env, (isset($context["percent"]) ? $context["percent"] : null), "html", null, true);
        echo "%</div>
  <div class=\"progress__description\">";
        // line 22
        echo twig_drupal_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/progress-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 22,  35 => 21,  30 => 20,  22 => 17,  85 => 54,  81 => 52,  78 => 51,  72 => 49,  68 => 47,  59 => 45,  55 => 44,  43 => 40,  40 => 39,  34 => 36,  25 => 30,  28 => 25,  21 => 23,  49 => 42,  42 => 23,  27 => 35,  23 => 29,  97 => 45,  91 => 42,  88 => 56,  86 => 40,  83 => 39,  80 => 38,  76 => 36,  73 => 35,  71 => 34,  65 => 31,  60 => 30,  54 => 28,  52 => 43,  48 => 25,  45 => 24,  41 => 22,  38 => 21,  36 => 37,  32 => 21,  26 => 16,  24 => 18,  19 => 16,);
    }
}
