<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d7e6cce490cf57ea2009fe76aa05ae8cfdb5dae41cedf16f66f00ec05608b804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_942954ed156bf7371a1986dd27c50e7082e24676a253baca6e0e15baf5e542d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_942954ed156bf7371a1986dd27c50e7082e24676a253baca6e0e15baf5e542d5->enter($__internal_942954ed156bf7371a1986dd27c50e7082e24676a253baca6e0e15baf5e542d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_aa64a2d914e2e6e1bada3476b86b0c8a0530db9e2f918cfeb958f9f2157a8e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa64a2d914e2e6e1bada3476b86b0c8a0530db9e2f918cfeb958f9f2157a8e04->enter($__internal_aa64a2d914e2e6e1bada3476b86b0c8a0530db9e2f918cfeb958f9f2157a8e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_942954ed156bf7371a1986dd27c50e7082e24676a253baca6e0e15baf5e542d5->leave($__internal_942954ed156bf7371a1986dd27c50e7082e24676a253baca6e0e15baf5e542d5_prof);

        
        $__internal_aa64a2d914e2e6e1bada3476b86b0c8a0530db9e2f918cfeb958f9f2157a8e04->leave($__internal_aa64a2d914e2e6e1bada3476b86b0c8a0530db9e2f918cfeb958f9f2157a8e04_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad63207195b954f55366fdeae38d0855ec91b1f31464cabd38afbb400adadc64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad63207195b954f55366fdeae38d0855ec91b1f31464cabd38afbb400adadc64->enter($__internal_ad63207195b954f55366fdeae38d0855ec91b1f31464cabd38afbb400adadc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73fc404d770f4c6122ca0e23fb22e794008f2dc908862903d4571636ac1d4e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73fc404d770f4c6122ca0e23fb22e794008f2dc908862903d4571636ac1d4e13->enter($__internal_73fc404d770f4c6122ca0e23fb22e794008f2dc908862903d4571636ac1d4e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_73fc404d770f4c6122ca0e23fb22e794008f2dc908862903d4571636ac1d4e13->leave($__internal_73fc404d770f4c6122ca0e23fb22e794008f2dc908862903d4571636ac1d4e13_prof);

        
        $__internal_ad63207195b954f55366fdeae38d0855ec91b1f31464cabd38afbb400adadc64->leave($__internal_ad63207195b954f55366fdeae38d0855ec91b1f31464cabd38afbb400adadc64_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a2a2dba80c6259c3d1cb5589ecda7177067213a0824589ba4f9ad293a8ebbc9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a2dba80c6259c3d1cb5589ecda7177067213a0824589ba4f9ad293a8ebbc9c->enter($__internal_a2a2dba80c6259c3d1cb5589ecda7177067213a0824589ba4f9ad293a8ebbc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3cc4d3fdf8a66121773c669248657ac7be6b7dbfc6faee89a0f7701b1bf59ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc4d3fdf8a66121773c669248657ac7be6b7dbfc6faee89a0f7701b1bf59ff2->enter($__internal_3cc4d3fdf8a66121773c669248657ac7be6b7dbfc6faee89a0f7701b1bf59ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3cc4d3fdf8a66121773c669248657ac7be6b7dbfc6faee89a0f7701b1bf59ff2->leave($__internal_3cc4d3fdf8a66121773c669248657ac7be6b7dbfc6faee89a0f7701b1bf59ff2_prof);

        
        $__internal_a2a2dba80c6259c3d1cb5589ecda7177067213a0824589ba4f9ad293a8ebbc9c->leave($__internal_a2a2dba80c6259c3d1cb5589ecda7177067213a0824589ba4f9ad293a8ebbc9c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d28390fbb8147ba628a928053ebe7632bba0481dfa8d0230c4f4a37ef6d388cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28390fbb8147ba628a928053ebe7632bba0481dfa8d0230c4f4a37ef6d388cf->enter($__internal_d28390fbb8147ba628a928053ebe7632bba0481dfa8d0230c4f4a37ef6d388cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dea51f73222925c7b9406306646bddcdafa362042de5938ca752e798a2eb31ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea51f73222925c7b9406306646bddcdafa362042de5938ca752e798a2eb31ef->enter($__internal_dea51f73222925c7b9406306646bddcdafa362042de5938ca752e798a2eb31ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_dea51f73222925c7b9406306646bddcdafa362042de5938ca752e798a2eb31ef->leave($__internal_dea51f73222925c7b9406306646bddcdafa362042de5938ca752e798a2eb31ef_prof);

        
        $__internal_d28390fbb8147ba628a928053ebe7632bba0481dfa8d0230c4f4a37ef6d388cf->leave($__internal_d28390fbb8147ba628a928053ebe7632bba0481dfa8d0230c4f4a37ef6d388cf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
