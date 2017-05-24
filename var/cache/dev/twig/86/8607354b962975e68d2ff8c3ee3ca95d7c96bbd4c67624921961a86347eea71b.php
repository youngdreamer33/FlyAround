<?php

/* :reservation:new.html.twig */
class __TwigTemplate_d0b034b0b7ebb79a7a8c2d7dbc544600c35c5cb4e8270dfb2471953cdccf5cf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:new.html.twig", 1);
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
        $__internal_91d338ea0c61cb1018bfc04c628a4d18b79f815d796da5f85252f94e7af433e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d338ea0c61cb1018bfc04c628a4d18b79f815d796da5f85252f94e7af433e1->enter($__internal_91d338ea0c61cb1018bfc04c628a4d18b79f815d796da5f85252f94e7af433e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:new.html.twig"));

        $__internal_fdfb6c42f7c3f8ffa5d45f5ce4a2e38e1ec109d88dc55ea335fdae8c916a782e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfb6c42f7c3f8ffa5d45f5ce4a2e38e1ec109d88dc55ea335fdae8c916a782e->enter($__internal_fdfb6c42f7c3f8ffa5d45f5ce4a2e38e1ec109d88dc55ea335fdae8c916a782e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91d338ea0c61cb1018bfc04c628a4d18b79f815d796da5f85252f94e7af433e1->leave($__internal_91d338ea0c61cb1018bfc04c628a4d18b79f815d796da5f85252f94e7af433e1_prof);

        
        $__internal_fdfb6c42f7c3f8ffa5d45f5ce4a2e38e1ec109d88dc55ea335fdae8c916a782e->leave($__internal_fdfb6c42f7c3f8ffa5d45f5ce4a2e38e1ec109d88dc55ea335fdae8c916a782e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb9a7b3500aa19032787ab69104e4c29c562e7d4652de84b1b43e0414c448411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9a7b3500aa19032787ab69104e4c29c562e7d4652de84b1b43e0414c448411->enter($__internal_bb9a7b3500aa19032787ab69104e4c29c562e7d4652de84b1b43e0414c448411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84dfff39d2c1f9a015eb79a941ec79af93b3a2b289fe4824aac86187fe706443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84dfff39d2c1f9a015eb79a941ec79af93b3a2b289fe4824aac86187fe706443->enter($__internal_84dfff39d2c1f9a015eb79a941ec79af93b3a2b289fe4824aac86187fe706443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_84dfff39d2c1f9a015eb79a941ec79af93b3a2b289fe4824aac86187fe706443->leave($__internal_84dfff39d2c1f9a015eb79a941ec79af93b3a2b289fe4824aac86187fe706443_prof);

        
        $__internal_bb9a7b3500aa19032787ab69104e4c29c562e7d4652de84b1b43e0414c448411->leave($__internal_bb9a7b3500aa19032787ab69104e4c29c562e7d4652de84b1b43e0414c448411_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:new.html.twig";
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
    <h1>Reservation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":reservation:new.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/reservation/new.html.twig");
    }
}
