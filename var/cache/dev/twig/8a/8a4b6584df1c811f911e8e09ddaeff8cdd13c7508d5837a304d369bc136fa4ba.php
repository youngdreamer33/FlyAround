<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_4215492859ff851dd46248b460e126b3fb360a785635db52ff03b10fe3f09c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7507cc03d52bc2366f2a33227fe9c57b1a03fe49d1e3cb45e86d27b049970b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7507cc03d52bc2366f2a33227fe9c57b1a03fe49d1e3cb45e86d27b049970b41->enter($__internal_7507cc03d52bc2366f2a33227fe9c57b1a03fe49d1e3cb45e86d27b049970b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c8fb0c494b2b7b6ed9d114f09edefd8e74ac3125ae026eb7c19f2f2e1ca67cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fb0c494b2b7b6ed9d114f09edefd8e74ac3125ae026eb7c19f2f2e1ca67cfb->enter($__internal_c8fb0c494b2b7b6ed9d114f09edefd8e74ac3125ae026eb7c19f2f2e1ca67cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7507cc03d52bc2366f2a33227fe9c57b1a03fe49d1e3cb45e86d27b049970b41->leave($__internal_7507cc03d52bc2366f2a33227fe9c57b1a03fe49d1e3cb45e86d27b049970b41_prof);

        
        $__internal_c8fb0c494b2b7b6ed9d114f09edefd8e74ac3125ae026eb7c19f2f2e1ca67cfb->leave($__internal_c8fb0c494b2b7b6ed9d114f09edefd8e74ac3125ae026eb7c19f2f2e1ca67cfb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_40df375bdde280deeea2812f147dcb43615022897c8353f4317db2e49c48d953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40df375bdde280deeea2812f147dcb43615022897c8353f4317db2e49c48d953->enter($__internal_40df375bdde280deeea2812f147dcb43615022897c8353f4317db2e49c48d953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_28d4fc33a3b7aac534183395af71871bc065278afe7fae1bc485a0e1da0f5e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d4fc33a3b7aac534183395af71871bc065278afe7fae1bc485a0e1da0f5e38->enter($__internal_28d4fc33a3b7aac534183395af71871bc065278afe7fae1bc485a0e1da0f5e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_28d4fc33a3b7aac534183395af71871bc065278afe7fae1bc485a0e1da0f5e38->leave($__internal_28d4fc33a3b7aac534183395af71871bc065278afe7fae1bc485a0e1da0f5e38_prof);

        
        $__internal_40df375bdde280deeea2812f147dcb43615022897c8353f4317db2e49c48d953->leave($__internal_40df375bdde280deeea2812f147dcb43615022897c8353f4317db2e49c48d953_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_03bfcb194c38232ce4a320874520ed7021bd8874bce3135d31ecedf9437d7e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03bfcb194c38232ce4a320874520ed7021bd8874bce3135d31ecedf9437d7e81->enter($__internal_03bfcb194c38232ce4a320874520ed7021bd8874bce3135d31ecedf9437d7e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39f54f28069b08f4876c61f4044e6bf12186fc362a8d41af41d9d59d1c35e8c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f54f28069b08f4876c61f4044e6bf12186fc362a8d41af41d9d59d1c35e8c2->enter($__internal_39f54f28069b08f4876c61f4044e6bf12186fc362a8d41af41d9d59d1c35e8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_39f54f28069b08f4876c61f4044e6bf12186fc362a8d41af41d9d59d1c35e8c2->leave($__internal_39f54f28069b08f4876c61f4044e6bf12186fc362a8d41af41d9d59d1c35e8c2_prof);

        
        $__internal_03bfcb194c38232ce4a320874520ed7021bd8874bce3135d31ecedf9437d7e81->leave($__internal_03bfcb194c38232ce4a320874520ed7021bd8874bce3135d31ecedf9437d7e81_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
