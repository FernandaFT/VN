<?php

/* jewel-node.html.twig */
class __TwigTemplate_1b8584ba38710cb370302b875b7011e0c38c22666c8ae86db3e36dac16d67d8f extends Twig_Template
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
        if (($context["truncate"] ?? null)) {
            // line 2
            echo "<!-- se muestra si es la lista de categorías -->

<div class=\"jewel-list-item\">

\t<img src=\"";
            // line 6
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(twig_first($this->env, twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "myJewel", array()))));
            echo "\" alt=\"\">

    <div>
        <h5>";
            // line 9
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</h5>

        ";
            // line 11
            if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array()) == "es")) {
                // line 12
                echo "\t\t\t<p>Precio: ";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "price", array());
                echo "</p>
    \t";
            }
            // line 14
            echo "
        ";
            // line 15
            if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array()) == "en")) {
                // line 16
                echo "\t\t\t<p>Price: ";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "price", array());
                echo "</p>
\t\t";
            }
            // line 18
            echo "
\t\t<p><a class=\"button button-blue\" href=\"";
            // line 19
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p> 

\t</div>

</div>

";
        } else {
            // line 26
            echo "<!-- se muestra si es el detalle de la categoría -->

\t";
            // line 28
            $this->loadTemplate("jewel-node.html.twig", "jewel-node.html.twig", 28, "1666088266")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "jewel-node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  72 => 26,  60 => 19,  57 => 18,  51 => 16,  49 => 15,  46 => 14,  40 => 12,  38 => 11,  33 => 9,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if truncate %}
<!-- se muestra si es la lista de categorías -->

<div class=\"jewel-list-item\">

\t<img src=\"{{ url(page.header.myJewel|keys|first) }}\" alt=\"\">

    <div>
        <h5>{{ page.title }}</h5>

        {% if grav.language.getActive == 'es' %}
\t\t\t<p>Precio: {{ page.header.price }}</p>
    \t{% endif %}

        {% if grav.language.getActive == 'en' %}
\t\t\t<p>Price: {{ page.header.price }}</p>
\t\t{% endif %}

\t\t<p><a class=\"button button-blue\" href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p> 

\t</div>

</div>

{% else %}
<!-- se muestra si es el detalle de la categoría -->

\t{% embed 'partials/base.html.twig' %}

\t{% block content %}

        <img src=\"{{ url(page.header.myJewel|keys|first) }}\" alt=\"\">

    <div>

        <h1>{{ page.title }}</h1>

        {{ page.content}}

        {% if grav.language.getActive == 'es' %}
\t\t\t<p>Precio: {{ header.price }}</p>
    \t{% endif %}

        {% if grav.language.getActive == 'en' %}
\t\t\t<p>Price: {{ header.price }}</p>
\t\t{% endif %}

\t</div>

\t{% endblock %}

\t{% endembed %}
{% endif %}", "jewel-node.html.twig", "/Applications/MAMP/htdocs/VN/grav/user/themes/navascues/templates/jewel-node.html.twig");
    }
}


/* jewel-node.html.twig */
class __TwigTemplate_1b8584ba38710cb370302b875b7011e0c38c22666c8ae86db3e36dac16d67d8f_1666088266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "jewel-node.html.twig", 28);
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

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "
        <img src=\"";
        // line 32
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(twig_first($this->env, twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "myJewel", array()))));
        echo "\" alt=\"\">

    <div>

        <h1>";
        // line 36
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>

        ";
        // line 38
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

        ";
        // line 40
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array()) == "es")) {
            // line 41
            echo "\t\t\t<p>Precio: ";
            echo $this->getAttribute(($context["header"] ?? null), "price", array());
            echo "</p>
    \t";
        }
        // line 43
        echo "
        ";
        // line 44
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array()) == "en")) {
            // line 45
            echo "\t\t\t<p>Price: ";
            echo $this->getAttribute(($context["header"] ?? null), "price", array());
            echo "</p>
\t\t";
        }
        // line 47
        echo "
\t</div>

\t";
    }

    public function getTemplateName()
    {
        return "jewel-node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 47,  222 => 45,  220 => 44,  217 => 43,  211 => 41,  209 => 40,  204 => 38,  199 => 36,  192 => 32,  189 => 31,  186 => 30,  76 => 28,  72 => 26,  60 => 19,  57 => 18,  51 => 16,  49 => 15,  46 => 14,  40 => 12,  38 => 11,  33 => 9,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if truncate %}
<!-- se muestra si es la lista de categorías -->

<div class=\"jewel-list-item\">

\t<img src=\"{{ url(page.header.myJewel|keys|first) }}\" alt=\"\">

    <div>
        <h5>{{ page.title }}</h5>

        {% if grav.language.getActive == 'es' %}
\t\t\t<p>Precio: {{ page.header.price }}</p>
    \t{% endif %}

        {% if grav.language.getActive == 'en' %}
\t\t\t<p>Price: {{ page.header.price }}</p>
\t\t{% endif %}

\t\t<p><a class=\"button button-blue\" href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p> 

\t</div>

</div>

{% else %}
<!-- se muestra si es el detalle de la categoría -->

\t{% embed 'partials/base.html.twig' %}

\t{% block content %}

        <img src=\"{{ url(page.header.myJewel|keys|first) }}\" alt=\"\">

    <div>

        <h1>{{ page.title }}</h1>

        {{ page.content}}

        {% if grav.language.getActive == 'es' %}
\t\t\t<p>Precio: {{ header.price }}</p>
    \t{% endif %}

        {% if grav.language.getActive == 'en' %}
\t\t\t<p>Price: {{ header.price }}</p>
\t\t{% endif %}

\t</div>

\t{% endblock %}

\t{% endembed %}
{% endif %}", "jewel-node.html.twig", "/Applications/MAMP/htdocs/VN/grav/user/themes/navascues/templates/jewel-node.html.twig");
    }
}
