<?php

/* core/modules/system/templates/status-messages.html.twig */
class __TwigTemplate_773ffa4f9c2a12d7b8b1c1a5ecc16cad5a2f941d896ec85dc18e1685bf06fc95 extends Twig_Template
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
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 29
            echo "  ";
            // line 30
            $context["classes"] = array(0 => "messages", 1 => ("messages--" . (isset($context["type"]) ? $context["type"] : null)));
            // line 35
            echo "  <div class=\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "class"), "html", null, true);
            echo "\" role=\"contentinfo\" aria-label=\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"), "html", null, true);
            echo "\">
    ";
            // line 36
            if (((isset($context["type"]) ? $context["type"] : null) == "error")) {
                // line 37
                echo "      <div role=\"alert\">
    ";
            }
            // line 39
            echo "      ";
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array")) {
                // line 40
                echo "        <h2 class=\"visually-hidden\">";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"), "html", null, true);
                echo "</h2>
      ";
            }
            // line 42
            echo "      ";
            if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)) > 1)) {
                // line 43
                echo "        <ul class=\"messages__list\">
          ";
                // line 44
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 45
                    echo "            <li class=\"messages__item\">";
                    echo twig_drupal_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "        </ul>
      ";
            } else {
                // line 49
                echo "        ";
                echo twig_drupal_escape_filter($this->env, twig_first($this->env, (isset($context["messages"]) ? $context["messages"] : null)), "html", null, true);
                echo "
      ";
            }
            // line 51
            echo "    ";
            if (((isset($context["type"]) ? $context["type"] : null) == "error")) {
                // line 52
                echo "      </div>
    ";
            }
            // line 54
            echo "  </div>
  ";
            // line 56
            echo "  ";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 54,  81 => 52,  78 => 51,  72 => 49,  68 => 47,  59 => 45,  55 => 44,  43 => 40,  40 => 39,  34 => 36,  25 => 30,  28 => 25,  21 => 23,  49 => 42,  42 => 23,  27 => 35,  23 => 29,  97 => 45,  91 => 42,  88 => 56,  86 => 40,  83 => 39,  80 => 38,  76 => 36,  73 => 35,  71 => 34,  65 => 31,  60 => 30,  54 => 28,  52 => 43,  48 => 25,  45 => 24,  41 => 22,  38 => 21,  36 => 37,  32 => 21,  26 => 16,  24 => 15,  19 => 28,);
    }
}
