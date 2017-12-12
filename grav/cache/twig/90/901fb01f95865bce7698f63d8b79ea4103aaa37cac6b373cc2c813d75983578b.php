<?php

/* contact.html.twig */
class __TwigTemplate_bbd6e12b10b1b9167982243978e32786fd4146294cc57eab1a9f59314414d367 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "contact.html.twig", 1);
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
        echo "<div class=\"about\">
\t";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    <div class=\"image-contact\">
        <img src=\"";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(twig_first($this->env, twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "contactImage", array()))));
        echo "\" alt=\"\">
        <div class=\"info-contact\">
            <h1>";
        // line 9
        echo $this->getAttribute(($context["header"] ?? null), "contactTitle", array());
        echo "</h1>
            <h2>";
        // line 10
        echo $this->getAttribute(($context["header"] ?? null), "mail", array());
        echo "</h2>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  44 => 9,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
<div class=\"about\">
\t{{ page.content}}
    <div class=\"image-contact\">
        <img src=\"{{ url(page.header.contactImage|keys|first) }}\" alt=\"\">
        <div class=\"info-contact\">
            <h1>{{ header.contactTitle }}</h1>
            <h2>{{ header.mail }}</h2>
        </div>
    </div>
</div>
{% endblock %}", "contact.html.twig", "/Applications/MAMP/htdocs/VN/grav/user/themes/navascues/templates/contact.html.twig");
    }
}
