<?php

/* :planemodel:new.html.twig */
class __TwigTemplate_42bcc724e12e238a34f899c3b2d008648c77bd548605bae3a69b7eb3a9371ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planemodel:new.html.twig", 1);
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
        $__internal_4fd4a9cb40e8b7c0b2135401b2974b599b34ea8d060a3cbdbf7b7b3330fe64ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fd4a9cb40e8b7c0b2135401b2974b599b34ea8d060a3cbdbf7b7b3330fe64ff->enter($__internal_4fd4a9cb40e8b7c0b2135401b2974b599b34ea8d060a3cbdbf7b7b3330fe64ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:new.html.twig"));

        $__internal_bd3284760cae1825a1f435af84f6686af7a88a60495d6ac6dfe26eeaa3543964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3284760cae1825a1f435af84f6686af7a88a60495d6ac6dfe26eeaa3543964->enter($__internal_bd3284760cae1825a1f435af84f6686af7a88a60495d6ac6dfe26eeaa3543964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fd4a9cb40e8b7c0b2135401b2974b599b34ea8d060a3cbdbf7b7b3330fe64ff->leave($__internal_4fd4a9cb40e8b7c0b2135401b2974b599b34ea8d060a3cbdbf7b7b3330fe64ff_prof);

        
        $__internal_bd3284760cae1825a1f435af84f6686af7a88a60495d6ac6dfe26eeaa3543964->leave($__internal_bd3284760cae1825a1f435af84f6686af7a88a60495d6ac6dfe26eeaa3543964_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3435d84936d068a6853f2fda55bc84a1fe00fd00b0a5463f6601a483bd2706c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3435d84936d068a6853f2fda55bc84a1fe00fd00b0a5463f6601a483bd2706c2->enter($__internal_3435d84936d068a6853f2fda55bc84a1fe00fd00b0a5463f6601a483bd2706c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8146a5da7371d82d924a49cff1235117ed7f27b78e78d2098e1e7d919407d1cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8146a5da7371d82d924a49cff1235117ed7f27b78e78d2098e1e7d919407d1cd->enter($__internal_8146a5da7371d82d924a49cff1235117ed7f27b78e78d2098e1e7d919407d1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planemodel creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8146a5da7371d82d924a49cff1235117ed7f27b78e78d2098e1e7d919407d1cd->leave($__internal_8146a5da7371d82d924a49cff1235117ed7f27b78e78d2098e1e7d919407d1cd_prof);

        
        $__internal_3435d84936d068a6853f2fda55bc84a1fe00fd00b0a5463f6601a483bd2706c2->leave($__internal_3435d84936d068a6853f2fda55bc84a1fe00fd00b0a5463f6601a483bd2706c2_prof);

    }

    public function getTemplateName()
    {
        return ":planemodel:new.html.twig";
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
    <h1>Planemodel creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('planemodel_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":planemodel:new.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/planemodel/new.html.twig");
    }
}
