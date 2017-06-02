<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e32041a14db84cdbecd583ea47492401edccfd82ba96075542e035e86014e523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_c47fd24c41fdfed36f7ef84a8e340825cb33d213d7fe90bec6c8f3dac3e968a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47fd24c41fdfed36f7ef84a8e340825cb33d213d7fe90bec6c8f3dac3e968a7->enter($__internal_c47fd24c41fdfed36f7ef84a8e340825cb33d213d7fe90bec6c8f3dac3e968a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_01d1aa6e694251dff786240e0c896247989d82ac7a7385e18c17b0c7b02908cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d1aa6e694251dff786240e0c896247989d82ac7a7385e18c17b0c7b02908cb->enter($__internal_01d1aa6e694251dff786240e0c896247989d82ac7a7385e18c17b0c7b02908cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c47fd24c41fdfed36f7ef84a8e340825cb33d213d7fe90bec6c8f3dac3e968a7->leave($__internal_c47fd24c41fdfed36f7ef84a8e340825cb33d213d7fe90bec6c8f3dac3e968a7_prof);

        
        $__internal_01d1aa6e694251dff786240e0c896247989d82ac7a7385e18c17b0c7b02908cb->leave($__internal_01d1aa6e694251dff786240e0c896247989d82ac7a7385e18c17b0c7b02908cb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c12638bbfa760b959e5f09f3a0e99b1e6451dc129a1820d10056d221f254516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c12638bbfa760b959e5f09f3a0e99b1e6451dc129a1820d10056d221f254516->enter($__internal_7c12638bbfa760b959e5f09f3a0e99b1e6451dc129a1820d10056d221f254516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b2c784c82486610989b2a1ac762d7f97fcdd5cb7f41a486ac8578e0e4fb8ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2c784c82486610989b2a1ac762d7f97fcdd5cb7f41a486ac8578e0e4fb8ca2->enter($__internal_7b2c784c82486610989b2a1ac762d7f97fcdd5cb7f41a486ac8578e0e4fb8ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7b2c784c82486610989b2a1ac762d7f97fcdd5cb7f41a486ac8578e0e4fb8ca2->leave($__internal_7b2c784c82486610989b2a1ac762d7f97fcdd5cb7f41a486ac8578e0e4fb8ca2_prof);

        
        $__internal_7c12638bbfa760b959e5f09f3a0e99b1e6451dc129a1820d10056d221f254516->leave($__internal_7c12638bbfa760b959e5f09f3a0e99b1e6451dc129a1820d10056d221f254516_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d46fb60e37516162a07f7882e47d227672193f4b7ac00b7c787031f16194653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d46fb60e37516162a07f7882e47d227672193f4b7ac00b7c787031f16194653->enter($__internal_6d46fb60e37516162a07f7882e47d227672193f4b7ac00b7c787031f16194653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0d4a2994eb1ee134aa3d17b2755d025fe927eb9a817f1685682cd7d768091397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4a2994eb1ee134aa3d17b2755d025fe927eb9a817f1685682cd7d768091397->enter($__internal_0d4a2994eb1ee134aa3d17b2755d025fe927eb9a817f1685682cd7d768091397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0d4a2994eb1ee134aa3d17b2755d025fe927eb9a817f1685682cd7d768091397->leave($__internal_0d4a2994eb1ee134aa3d17b2755d025fe927eb9a817f1685682cd7d768091397_prof);

        
        $__internal_6d46fb60e37516162a07f7882e47d227672193f4b7ac00b7c787031f16194653->leave($__internal_6d46fb60e37516162a07f7882e47d227672193f4b7ac00b7c787031f16194653_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8cab422fce70070e0e1a29d9d71e2f3a6b74fa0bd85034c8839137e5a27e6f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cab422fce70070e0e1a29d9d71e2f3a6b74fa0bd85034c8839137e5a27e6f5a->enter($__internal_8cab422fce70070e0e1a29d9d71e2f3a6b74fa0bd85034c8839137e5a27e6f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6d1a64e8d7639887ef139b550ffb3fb866a77f924b412e581ae87b196962d9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1a64e8d7639887ef139b550ffb3fb866a77f924b412e581ae87b196962d9d3->enter($__internal_6d1a64e8d7639887ef139b550ffb3fb866a77f924b412e581ae87b196962d9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6d1a64e8d7639887ef139b550ffb3fb866a77f924b412e581ae87b196962d9d3->leave($__internal_6d1a64e8d7639887ef139b550ffb3fb866a77f924b412e581ae87b196962d9d3_prof);

        
        $__internal_8cab422fce70070e0e1a29d9d71e2f3a6b74fa0bd85034c8839137e5a27e6f5a->leave($__internal_8cab422fce70070e0e1a29d9d71e2f3a6b74fa0bd85034c8839137e5a27e6f5a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
