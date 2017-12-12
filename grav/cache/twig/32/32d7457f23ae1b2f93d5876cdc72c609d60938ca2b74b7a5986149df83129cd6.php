<?php

/* modular/home-section.html.twig */
class __TwigTemplate_d49a81e5792555c5b2f434d739a84073b7e95d09b7b7fdb51815b88cdd186c18 extends Twig_Template
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
        // line 1
        echo "<div class=\"section\">
    ";
        // line 2
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

    <div>
      <img src=\"";
        // line 5
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(twig_first($this->env, twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "leftImage", array()))));
        echo "\" alt=\"\">
    </div>  

    <h1>";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sectionTitle", array());
        echo "</h1>

    ";
        // line 10
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array()) == "es")) {
            // line 11
            echo "      <a href=\"";
            echo ($context["base_url"] ?? null);
            echo $this->getAttribute(($context["header"] ?? null), "redirectPage", array());
            echo "\">Ver más</a>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array()) == "en")) {
            // line 15
            echo "      <a href=\"";
            echo ($context["base_url"] ?? null);
            echo $this->getAttribute(($context["header"] ?? null), "redirectPage", array());
            echo "\">More</a>
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        if ($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "rightImage", array())), "path", array())) {
            // line 19
            echo "        <div>
          <img src=\"";
            // line 20
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(twig_first($this->env, twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "rightImage", array()))));
            echo "\" alt=\"\">
        </div>
    ";
        }
        // line 23
        echo "        
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/home-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  68 => 20,  65 => 19,  63 => 18,  60 => 17,  53 => 15,  51 => 14,  48 => 13,  41 => 11,  39 => 10,  34 => 8,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section\">
    {{ page.content}}

    <div>
      <img src=\"{{ url(page.header.leftImage|keys|first) }}\" alt=\"\">
    </div>  

    <h1>{{ page.header.sectionTitle }}</h1>

    {% if grav.language.getActive == 'es' %}
      <a href=\"{{base_url}}{{header.redirectPage}}\">Ver más</a>
    {% endif %}

    {% if grav.language.getActive == 'en' %}
      <a href=\"{{base_url}}{{header.redirectPage}}\">More</a>
    {% endif %}

    {% if (page.header.rightImage|first).path %}
        <div>
          <img src=\"{{ url(page.header.rightImage|keys|first) }}\" alt=\"\">
        </div>
    {% endif %}
        
</div>
", "modular/home-section.html.twig", "/Applications/MAMP/htdocs/VN/grav/user/themes/navascues/templates/modular/home-section.html.twig");
    }
}
