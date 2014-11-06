<?php

/* core/modules/views/templates/views-mini-pager.html.twig */
class __TwigTemplate_54bf9b90f1252d512b65eef41a09e62d6d8e8e3fcf6ce0cd0956e6e77d068c16 extends Twig_Template
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
        // line 14
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 15
            echo "  <h2 class=\"visually-hidden\">";
            echo twig_render_var(t("Pages"));
            echo "</h2>
  ";
            // line 16
            echo twig_drupal_escape_filter($this->env, (isset($context["items"]) ? $context["items"] : null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 16,  21 => 15,  19 => 14,);
    }
}
