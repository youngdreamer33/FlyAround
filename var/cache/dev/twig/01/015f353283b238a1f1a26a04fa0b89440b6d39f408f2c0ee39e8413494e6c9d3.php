<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_aaefabb95fdb057edc91b57e65ad07320397beccb8b0c0616689c51bac6073bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95cb2c5bf417bec51814be7169b7c383993afcff941a793e50910a3b75f57dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95cb2c5bf417bec51814be7169b7c383993afcff941a793e50910a3b75f57dd4->enter($__internal_95cb2c5bf417bec51814be7169b7c383993afcff941a793e50910a3b75f57dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_645b80ac336061627f592b85eff70a1ca87f19094c81fa4a515804071c2029b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645b80ac336061627f592b85eff70a1ca87f19094c81fa4a515804071c2029b8->enter($__internal_645b80ac336061627f592b85eff70a1ca87f19094c81fa4a515804071c2029b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_95cb2c5bf417bec51814be7169b7c383993afcff941a793e50910a3b75f57dd4->leave($__internal_95cb2c5bf417bec51814be7169b7c383993afcff941a793e50910a3b75f57dd4_prof);

        
        $__internal_645b80ac336061627f592b85eff70a1ca87f19094c81fa4a515804071c2029b8->leave($__internal_645b80ac336061627f592b85eff70a1ca87f19094c81fa4a515804071c2029b8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_effeca07dd5390cff3f978ce4f729404b578665a02f5d2093d99ea4ddef2f44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_effeca07dd5390cff3f978ce4f729404b578665a02f5d2093d99ea4ddef2f44a->enter($__internal_effeca07dd5390cff3f978ce4f729404b578665a02f5d2093d99ea4ddef2f44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_87815e0d560c02649ca1732cd2302dd0d5a8392b97fdcd119a6cf870d2d0a357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87815e0d560c02649ca1732cd2302dd0d5a8392b97fdcd119a6cf870d2d0a357->enter($__internal_87815e0d560c02649ca1732cd2302dd0d5a8392b97fdcd119a6cf870d2d0a357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_87815e0d560c02649ca1732cd2302dd0d5a8392b97fdcd119a6cf870d2d0a357->leave($__internal_87815e0d560c02649ca1732cd2302dd0d5a8392b97fdcd119a6cf870d2d0a357_prof);

        
        $__internal_effeca07dd5390cff3f978ce4f729404b578665a02f5d2093d99ea4ddef2f44a->leave($__internal_effeca07dd5390cff3f978ce4f729404b578665a02f5d2093d99ea4ddef2f44a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
