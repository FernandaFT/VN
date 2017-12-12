<?php

/* maintenance.html.twig */
class __TwigTemplate_0f715f713278c190e9df77194b360d983de259eb180d2161e644a8239a6f5c93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "maintenance.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<section>
    ";
        // line 5
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array()) == "es")) {
            // line 6
            echo "        <h1 class=\"general-title\">Cuidado de las piezas</h1>
    ";
        }
        // line 8
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array()) == "en")) {
            // line 9
            echo "        <h1 class=\"general-title\">Care of the pieces</h1>
    ";
        }
        // line 11
        echo "</section>

<section class=\"limiter section-limiter\">
    <div>
        <div class=\"maintenance-content\">
            <img src=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(twig_first($this->env, twig_get_array_keys_filter($this->getAttribute(($context["header"] ?? null), "care_first_icon", array()))));
        echo "\" alt=\"\"> 
            <h2>";
        // line 17
        echo $this->getAttribute(($context["header"] ?? null), "care_first_title", array());
        echo "</h2>           
        </div>
       <ul class=\"list-maintenance\">
           ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "care_first_list", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "               <li>";
            echo $this->getAttribute($context["item"], "care_first_item", array());
            echo "</li>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "       </ul>
    </div>
    <div>
        <div class=\"maintenance-content\">
            <img src=\"";
        // line 27
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(twig_first($this->env, twig_get_array_keys_filter($this->getAttribute(($context["header"] ?? null), "care_second_icon", array()))));
        echo "\" alt=\"\">
            <h2>";
        // line 28
        echo $this->getAttribute(($context["header"] ?? null), "care_second_title", array());
        echo "</h2>     
        </div>

        <ul class=\"list-maintenance\">
           ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "care_second_list", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "               <li>";
            echo $this->getAttribute($context["item"], "care_second_item", array());
            echo "</li>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "       </ul>
    </div>
    <div>
        <div class=\"maintenance-content\">
            <img src=\"";
        // line 39
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(twig_first($this->env, twig_get_array_keys_filter($this->getAttribute(($context["header"] ?? null), "care_third_icon", array()))));
        echo "\" alt=\"\">
            <h2>";
        // line 40
        echo $this->getAttribute(($context["header"] ?? null), "care_first_title", array());
        echo "</h2>         
        </div>
        <ul class=\"list-maintenance\">
           ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "care_third_list", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "               <li>";
            echo $this->getAttribute($context["item"], "care_third_item", array());
            echo "</li>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "       </ul>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "maintenance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 46,  127 => 44,  123 => 43,  117 => 40,  113 => 39,  107 => 35,  98 => 33,  94 => 32,  87 => 28,  83 => 27,  77 => 23,  68 => 21,  64 => 20,  58 => 17,  54 => 16,  47 => 11,  43 => 9,  40 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<section>
    {% if grav.language.getActive == 'es' %}
        <h1 class=\"general-title\">Cuidado de las piezas</h1>
    {% endif %}
    {% if grav.language.getActive == 'en' %}
        <h1 class=\"general-title\">Care of the pieces</h1>
    {% endif %}
</section>

<section class=\"limiter section-limiter\">
    <div>
        <div class=\"maintenance-content\">
            <img src=\"{{ url(header.care_first_icon|keys|first) }}\" alt=\"\"> 
            <h2>{{header.care_first_title}}</h2>           
        </div>
       <ul class=\"list-maintenance\">
           {% for item in header.care_first_list %}
               <li>{{item.care_first_item}}</li>
           {% endfor %}
       </ul>
    </div>
    <div>
        <div class=\"maintenance-content\">
            <img src=\"{{ url(header.care_second_icon|keys|first) }}\" alt=\"\">
            <h2>{{header.care_second_title}}</h2>     
        </div>

        <ul class=\"list-maintenance\">
           {% for item in header.care_second_list %}
               <li>{{item.care_second_item}}</li>
           {% endfor %}
       </ul>
    </div>
    <div>
        <div class=\"maintenance-content\">
            <img src=\"{{ url(header.care_third_icon|keys|first) }}\" alt=\"\">
            <h2>{{header.care_first_title}}</h2>         
        </div>
        <ul class=\"list-maintenance\">
           {% for item in header.care_third_list %}
               <li>{{item.care_third_item}}</li>
           {% endfor %}
       </ul>
    </div>
</section>
{% endblock %}", "maintenance.html.twig", "/Applications/MAMP/htdocs/VN/grav/user/themes/navascues/templates/maintenance.html.twig");
    }
}
