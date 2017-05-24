<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f5e276029df096f60f1d55e16bb79f27bb0e261287257bb8e74c790056fba810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_3eb85a478dd948e2b662328547b74adfbe64c517820d290154717393f45dbb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb85a478dd948e2b662328547b74adfbe64c517820d290154717393f45dbb9d->enter($__internal_3eb85a478dd948e2b662328547b74adfbe64c517820d290154717393f45dbb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3444a1a9e441c3772aca8b74ceaabb1fcb39e58881f5180037bf3089ab34e436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3444a1a9e441c3772aca8b74ceaabb1fcb39e58881f5180037bf3089ab34e436->enter($__internal_3444a1a9e441c3772aca8b74ceaabb1fcb39e58881f5180037bf3089ab34e436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eb85a478dd948e2b662328547b74adfbe64c517820d290154717393f45dbb9d->leave($__internal_3eb85a478dd948e2b662328547b74adfbe64c517820d290154717393f45dbb9d_prof);

        
        $__internal_3444a1a9e441c3772aca8b74ceaabb1fcb39e58881f5180037bf3089ab34e436->leave($__internal_3444a1a9e441c3772aca8b74ceaabb1fcb39e58881f5180037bf3089ab34e436_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_153b594462614c010e0169476e89bd958cd706879e16dbffc9512ac21cdc3fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153b594462614c010e0169476e89bd958cd706879e16dbffc9512ac21cdc3fe6->enter($__internal_153b594462614c010e0169476e89bd958cd706879e16dbffc9512ac21cdc3fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_94bdd0fbaf90d935d15b44e2df091495b5c17230a16030e52cf1b343b2a53bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94bdd0fbaf90d935d15b44e2df091495b5c17230a16030e52cf1b343b2a53bc3->enter($__internal_94bdd0fbaf90d935d15b44e2df091495b5c17230a16030e52cf1b343b2a53bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_94bdd0fbaf90d935d15b44e2df091495b5c17230a16030e52cf1b343b2a53bc3->leave($__internal_94bdd0fbaf90d935d15b44e2df091495b5c17230a16030e52cf1b343b2a53bc3_prof);

        
        $__internal_153b594462614c010e0169476e89bd958cd706879e16dbffc9512ac21cdc3fe6->leave($__internal_153b594462614c010e0169476e89bd958cd706879e16dbffc9512ac21cdc3fe6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c14e61f8aa85c3f7a0082d007499be01c1be233f80b435097d081fb2cfea567b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14e61f8aa85c3f7a0082d007499be01c1be233f80b435097d081fb2cfea567b->enter($__internal_c14e61f8aa85c3f7a0082d007499be01c1be233f80b435097d081fb2cfea567b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cc13b975410703bb7ab2c7d21ee204dc79dfa24fad3e6fd97e780a3649387440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc13b975410703bb7ab2c7d21ee204dc79dfa24fad3e6fd97e780a3649387440->enter($__internal_cc13b975410703bb7ab2c7d21ee204dc79dfa24fad3e6fd97e780a3649387440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc13b975410703bb7ab2c7d21ee204dc79dfa24fad3e6fd97e780a3649387440->leave($__internal_cc13b975410703bb7ab2c7d21ee204dc79dfa24fad3e6fd97e780a3649387440_prof);

        
        $__internal_c14e61f8aa85c3f7a0082d007499be01c1be233f80b435097d081fb2cfea567b->leave($__internal_c14e61f8aa85c3f7a0082d007499be01c1be233f80b435097d081fb2cfea567b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_365d608df0f86e5533f06263eb95ef9ea05d66fb934ae6311e2532a918941667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365d608df0f86e5533f06263eb95ef9ea05d66fb934ae6311e2532a918941667->enter($__internal_365d608df0f86e5533f06263eb95ef9ea05d66fb934ae6311e2532a918941667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c87e0618f3ba26a2990068a7bbe569d7f82b6e79910a42daf44a3cd2b76b21c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c87e0618f3ba26a2990068a7bbe569d7f82b6e79910a42daf44a3cd2b76b21c->enter($__internal_1c87e0618f3ba26a2990068a7bbe569d7f82b6e79910a42daf44a3cd2b76b21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1c87e0618f3ba26a2990068a7bbe569d7f82b6e79910a42daf44a3cd2b76b21c->leave($__internal_1c87e0618f3ba26a2990068a7bbe569d7f82b6e79910a42daf44a3cd2b76b21c_prof);

        
        $__internal_365d608df0f86e5533f06263eb95ef9ea05d66fb934ae6311e2532a918941667->leave($__internal_365d608df0f86e5533f06263eb95ef9ea05d66fb934ae6311e2532a918941667_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
