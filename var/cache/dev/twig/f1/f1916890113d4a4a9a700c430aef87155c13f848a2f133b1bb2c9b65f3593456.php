<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a613a6a2cd9b22897c8a66fa60399697652bf88d28e45b8294e00a702066e566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2e2070b355ed77fb29e42c1e61c1c495c761c8255193872631e84060d4c74d40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e2070b355ed77fb29e42c1e61c1c495c761c8255193872631e84060d4c74d40->enter($__internal_2e2070b355ed77fb29e42c1e61c1c495c761c8255193872631e84060d4c74d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_351160a83c45492409f27b44b836a6d9e61ceedef5998528a92d5210189a6538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351160a83c45492409f27b44b836a6d9e61ceedef5998528a92d5210189a6538->enter($__internal_351160a83c45492409f27b44b836a6d9e61ceedef5998528a92d5210189a6538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e2070b355ed77fb29e42c1e61c1c495c761c8255193872631e84060d4c74d40->leave($__internal_2e2070b355ed77fb29e42c1e61c1c495c761c8255193872631e84060d4c74d40_prof);

        
        $__internal_351160a83c45492409f27b44b836a6d9e61ceedef5998528a92d5210189a6538->leave($__internal_351160a83c45492409f27b44b836a6d9e61ceedef5998528a92d5210189a6538_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_de8751d8586cb1a2d58eeaa1e656e0ad0d97f998d5b3ab56893be317b5e69dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8751d8586cb1a2d58eeaa1e656e0ad0d97f998d5b3ab56893be317b5e69dd0->enter($__internal_de8751d8586cb1a2d58eeaa1e656e0ad0d97f998d5b3ab56893be317b5e69dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8378c69fab625940aca4699b2ce35b9804a9f2cf3144b386d15bddbd9b35a02a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8378c69fab625940aca4699b2ce35b9804a9f2cf3144b386d15bddbd9b35a02a->enter($__internal_8378c69fab625940aca4699b2ce35b9804a9f2cf3144b386d15bddbd9b35a02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8378c69fab625940aca4699b2ce35b9804a9f2cf3144b386d15bddbd9b35a02a->leave($__internal_8378c69fab625940aca4699b2ce35b9804a9f2cf3144b386d15bddbd9b35a02a_prof);

        
        $__internal_de8751d8586cb1a2d58eeaa1e656e0ad0d97f998d5b3ab56893be317b5e69dd0->leave($__internal_de8751d8586cb1a2d58eeaa1e656e0ad0d97f998d5b3ab56893be317b5e69dd0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c7094ad2fa9de30e0b4ba4ba28cdcd6dbc37d6e966f692ce11c5be136efce04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c7094ad2fa9de30e0b4ba4ba28cdcd6dbc37d6e966f692ce11c5be136efce04->enter($__internal_1c7094ad2fa9de30e0b4ba4ba28cdcd6dbc37d6e966f692ce11c5be136efce04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_05017fe1f922793a0046a6c9b1ef119d3cfecc1e470f5ebc26f22e658d9b3f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05017fe1f922793a0046a6c9b1ef119d3cfecc1e470f5ebc26f22e658d9b3f81->enter($__internal_05017fe1f922793a0046a6c9b1ef119d3cfecc1e470f5ebc26f22e658d9b3f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_05017fe1f922793a0046a6c9b1ef119d3cfecc1e470f5ebc26f22e658d9b3f81->leave($__internal_05017fe1f922793a0046a6c9b1ef119d3cfecc1e470f5ebc26f22e658d9b3f81_prof);

        
        $__internal_1c7094ad2fa9de30e0b4ba4ba28cdcd6dbc37d6e966f692ce11c5be136efce04->leave($__internal_1c7094ad2fa9de30e0b4ba4ba28cdcd6dbc37d6e966f692ce11c5be136efce04_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c9232a37dcf85c5c4806b5792588a095aff9257999a540fe435aa5b94b3d6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c9232a37dcf85c5c4806b5792588a095aff9257999a540fe435aa5b94b3d6e1->enter($__internal_1c9232a37dcf85c5c4806b5792588a095aff9257999a540fe435aa5b94b3d6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cf7db7cffa3596e3d07bb0e724ed301d8fa8d6db82b3a5fc610f2682ec001cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7db7cffa3596e3d07bb0e724ed301d8fa8d6db82b3a5fc610f2682ec001cbe->enter($__internal_cf7db7cffa3596e3d07bb0e724ed301d8fa8d6db82b3a5fc610f2682ec001cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cf7db7cffa3596e3d07bb0e724ed301d8fa8d6db82b3a5fc610f2682ec001cbe->leave($__internal_cf7db7cffa3596e3d07bb0e724ed301d8fa8d6db82b3a5fc610f2682ec001cbe_prof);

        
        $__internal_1c9232a37dcf85c5c4806b5792588a095aff9257999a540fe435aa5b94b3d6e1->leave($__internal_1c9232a37dcf85c5c4806b5792588a095aff9257999a540fe435aa5b94b3d6e1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
