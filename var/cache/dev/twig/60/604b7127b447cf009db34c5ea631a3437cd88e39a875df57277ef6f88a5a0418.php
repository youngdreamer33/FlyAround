<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_89e6f431041ee46c319bf5669962debd28f4c5d86eef104098bc0b62b544f06c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74e65f9c2d7fae3a2e823b9d08dc50a9e31c502cba3a62de75e587f27140a250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74e65f9c2d7fae3a2e823b9d08dc50a9e31c502cba3a62de75e587f27140a250->enter($__internal_74e65f9c2d7fae3a2e823b9d08dc50a9e31c502cba3a62de75e587f27140a250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bf1750ef437494022eb2d355d29ccf527326311eb60b35e68872309769883450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1750ef437494022eb2d355d29ccf527326311eb60b35e68872309769883450->enter($__internal_bf1750ef437494022eb2d355d29ccf527326311eb60b35e68872309769883450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74e65f9c2d7fae3a2e823b9d08dc50a9e31c502cba3a62de75e587f27140a250->leave($__internal_74e65f9c2d7fae3a2e823b9d08dc50a9e31c502cba3a62de75e587f27140a250_prof);

        
        $__internal_bf1750ef437494022eb2d355d29ccf527326311eb60b35e68872309769883450->leave($__internal_bf1750ef437494022eb2d355d29ccf527326311eb60b35e68872309769883450_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ef417a1deb03e4c627feda0e48437837e0e5236454b8c722c8442f9f889e105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef417a1deb03e4c627feda0e48437837e0e5236454b8c722c8442f9f889e105->enter($__internal_8ef417a1deb03e4c627feda0e48437837e0e5236454b8c722c8442f9f889e105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1beb5950cb24327d4ae79ac03e0ee2785cbe6690c68076f174b89e9d62a0d2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1beb5950cb24327d4ae79ac03e0ee2785cbe6690c68076f174b89e9d62a0d2ca->enter($__internal_1beb5950cb24327d4ae79ac03e0ee2785cbe6690c68076f174b89e9d62a0d2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1beb5950cb24327d4ae79ac03e0ee2785cbe6690c68076f174b89e9d62a0d2ca->leave($__internal_1beb5950cb24327d4ae79ac03e0ee2785cbe6690c68076f174b89e9d62a0d2ca_prof);

        
        $__internal_8ef417a1deb03e4c627feda0e48437837e0e5236454b8c722c8442f9f889e105->leave($__internal_8ef417a1deb03e4c627feda0e48437837e0e5236454b8c722c8442f9f889e105_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
