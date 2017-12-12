<?php

/* jewelry-page.html.twig */
class __TwigTemplate_0cbd8c098f00cbdf5a69bb8cbacd8cd29ad3eff370f9bcb752c47dfdaa25c8a6 extends Twig_Template
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
        $this->loadTemplate("jewelry-page.html.twig", "jewelry-page.html.twig", 1, "1849575140")->display($context);
    }

    public function getTemplateName()
    {
        return "jewelry-page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
\t{% set collection = page.collection() %}
\t
\t{% block content %}

\t\t<div class=\"section-pattern section-pattern-lightgray\">
\t\t\t<div class=\"discover-category\">
\t\t\t\t<h1>{{ page.header.page_title }}</h1>
\t\t\t</div>
\t\t</div>

\t\t\t
\t\t<div class=\"wrapper-categories\">
\t\t\t<div id=\"listing\">
\t\t\t\t<ul class=\"holder\">
\t\t\t\t\t{% for child in collection %}
\t\t\t\t\t\t<li>
\t\t\t        \t\t{% include 'jewel-node.html.twig' with {'category':page, 'page':child, 'truncate':true} %}
\t\t\t    \t\t</li>
\t\t\t  \t\t{% endfor %}
\t\t\t  \t</ul>
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "jewelry-page.html.twig", "/Applications/MAMP/htdocs/VN/grav/user/themes/navascues/templates/jewelry-page.html.twig");
    }
}


/* jewelry-page.html.twig */
class __TwigTemplate_0cbd8c098f00cbdf5a69bb8cbacd8cd29ad3eff370f9bcb752c47dfdaa25c8a6_1849575140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "jewelry-page.html.twig", 1);
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
        // line 2
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
\t\t<div class=\"section-pattern section-pattern-lightgray\">
\t\t\t<div class=\"discover-category\">
\t\t\t\t<h1>";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "page_title", array());
        echo "</h1>
\t\t\t</div>
\t\t</div>

\t\t\t
\t\t<div class=\"wrapper-categories\">
\t\t\t<div id=\"listing\">
\t\t\t\t<ul class=\"holder\">
\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 17
            echo "\t\t\t\t\t\t<li>
\t\t\t        \t\t";
            // line 18
            $this->loadTemplate("jewel-node.html.twig", "jewelry-page.html.twig", 18)->display(array_merge($context, array("category" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true)));
            // line 19
            echo "\t\t\t    \t\t</li>
\t\t\t  \t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t  \t</ul>
\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "jewelry-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 21,  141 => 19,  139 => 18,  136 => 17,  119 => 16,  108 => 8,  103 => 5,  100 => 4,  96 => 1,  94 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
\t{% set collection = page.collection() %}
\t
\t{% block content %}

\t\t<div class=\"section-pattern section-pattern-lightgray\">
\t\t\t<div class=\"discover-category\">
\t\t\t\t<h1>{{ page.header.page_title }}</h1>
\t\t\t</div>
\t\t</div>

\t\t\t
\t\t<div class=\"wrapper-categories\">
\t\t\t<div id=\"listing\">
\t\t\t\t<ul class=\"holder\">
\t\t\t\t\t{% for child in collection %}
\t\t\t\t\t\t<li>
\t\t\t        \t\t{% include 'jewel-node.html.twig' with {'category':page, 'page':child, 'truncate':true} %}
\t\t\t    \t\t</li>
\t\t\t  \t\t{% endfor %}
\t\t\t  \t</ul>
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "jewelry-page.html.twig", "/Applications/MAMP/htdocs/VN/grav/user/themes/navascues/templates/jewelry-page.html.twig");
    }
}
