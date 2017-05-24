<?php

/* :flight:new.html.twig */
class __TwigTemplate_0a2e6527626c248f56ac46ec5c1a5fc9572f1a8af9fec861e26f603b51bad804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":flight:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef78a1ae30e4578ae00051def6cb05511c6b7d07f8f241b9295a2c414feb21cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef78a1ae30e4578ae00051def6cb05511c6b7d07f8f241b9295a2c414feb21cf->enter($__internal_ef78a1ae30e4578ae00051def6cb05511c6b7d07f8f241b9295a2c414feb21cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:new.html.twig"));

        $__internal_3e0102e5b6923e3821d6b7ef900ce12cfc2e9981f45915c7f0f5dc7050bdc2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0102e5b6923e3821d6b7ef900ce12cfc2e9981f45915c7f0f5dc7050bdc2db->enter($__internal_3e0102e5b6923e3821d6b7ef900ce12cfc2e9981f45915c7f0f5dc7050bdc2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef78a1ae30e4578ae00051def6cb05511c6b7d07f8f241b9295a2c414feb21cf->leave($__internal_ef78a1ae30e4578ae00051def6cb05511c6b7d07f8f241b9295a2c414feb21cf_prof);

        
        $__internal_3e0102e5b6923e3821d6b7ef900ce12cfc2e9981f45915c7f0f5dc7050bdc2db->leave($__internal_3e0102e5b6923e3821d6b7ef900ce12cfc2e9981f45915c7f0f5dc7050bdc2db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f1a6cb00c98c759f7ee540a6415aa4acfd38a6e90e9c6ccfcc08bf5ecc1e1f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f1a6cb00c98c759f7ee540a6415aa4acfd38a6e90e9c6ccfcc08bf5ecc1e1f4->enter($__internal_7f1a6cb00c98c759f7ee540a6415aa4acfd38a6e90e9c6ccfcc08bf5ecc1e1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bab236d2d7f991ca9316567eb29697d71b56e9e30e1609d5432fb35f9f3bd103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab236d2d7f991ca9316567eb29697d71b56e9e30e1609d5432fb35f9f3bd103->enter($__internal_bab236d2d7f991ca9316567eb29697d71b56e9e30e1609d5432fb35f9f3bd103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flight creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bab236d2d7f991ca9316567eb29697d71b56e9e30e1609d5432fb35f9f3bd103->leave($__internal_bab236d2d7f991ca9316567eb29697d71b56e9e30e1609d5432fb35f9f3bd103_prof);

        
        $__internal_7f1a6cb00c98c759f7ee540a6415aa4acfd38a6e90e9c6ccfcc08bf5ecc1e1f4->leave($__internal_7f1a6cb00c98c759f7ee540a6415aa4acfd38a6e90e9c6ccfcc08bf5ecc1e1f4_prof);

    }

    public function getTemplateName()
    {
        return ":flight:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Flight creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('flight_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":flight:new.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/flight/new.html.twig");
    }
}
