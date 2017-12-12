<?php

/* about.html.twig */
class __TwigTemplate_15097dab92c99a40a50594b7575b483d16fc0c60aa7c3bc5e63722ee1c837344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "about.html.twig", 1);
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
        echo "<div class=\"about-section limiter\">
    
    <section class=\"imageVega\">
    \t<img src=\"";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(twig_first($this->env, twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "bgImage", array()))));
        echo "\" alt=\"\">
    </section>

    <section class=\"infoVega\">
        <h1>";
        // line 11
        echo $this->getAttribute(($context["header"] ?? null), "title", array());
        echo "</h1>
        <p>";
        // line 12
        echo $this->getAttribute(($context["header"] ?? null), "description", array());
        echo "</p>
    </section>

</div>
";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  43 => 11,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
<div class=\"about-section limiter\">
    
    <section class=\"imageVega\">
    \t<img src=\"{{ url(page.header.bgImage|keys|first) }}\" alt=\"\">
    </section>

    <section class=\"infoVega\">
        <h1>{{ header.title }}</h1>
        <p>{{ header.description }}</p>
    </section>

</div>
{% endblock %}", "about.html.twig", "/Applications/MAMP/htdocs/VN/grav/user/themes/navascues/templates/about.html.twig");
    }
}
