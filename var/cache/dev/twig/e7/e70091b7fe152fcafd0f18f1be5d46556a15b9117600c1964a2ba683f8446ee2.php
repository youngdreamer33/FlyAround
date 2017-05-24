<?php

/* :planemodel:edit.html.twig */
class __TwigTemplate_b0f5f24c9405dc5b808e7c097e51e7eee9e9dbb8cae53b83019a94e9e825c2eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planemodel:edit.html.twig", 1);
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
        $__internal_a1272f4afd7b67033e6bc7f245379606389f6832ee7978221aa4b54ab4736369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1272f4afd7b67033e6bc7f245379606389f6832ee7978221aa4b54ab4736369->enter($__internal_a1272f4afd7b67033e6bc7f245379606389f6832ee7978221aa4b54ab4736369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:edit.html.twig"));

        $__internal_b99d088f8cec124ed56b24d9b6897dea0aada982503ce2fd8c35b904eec5022c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99d088f8cec124ed56b24d9b6897dea0aada982503ce2fd8c35b904eec5022c->enter($__internal_b99d088f8cec124ed56b24d9b6897dea0aada982503ce2fd8c35b904eec5022c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1272f4afd7b67033e6bc7f245379606389f6832ee7978221aa4b54ab4736369->leave($__internal_a1272f4afd7b67033e6bc7f245379606389f6832ee7978221aa4b54ab4736369_prof);

        
        $__internal_b99d088f8cec124ed56b24d9b6897dea0aada982503ce2fd8c35b904eec5022c->leave($__internal_b99d088f8cec124ed56b24d9b6897dea0aada982503ce2fd8c35b904eec5022c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fa145a8a97a6506a8738f3c38843831e027c89361493c09e01f5499611b1760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa145a8a97a6506a8738f3c38843831e027c89361493c09e01f5499611b1760->enter($__internal_1fa145a8a97a6506a8738f3c38843831e027c89361493c09e01f5499611b1760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18db9c14d0c10403ef09440122c288884e4a6a3462ec4979e3b5fa5920916c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18db9c14d0c10403ef09440122c288884e4a6a3462ec4979e3b5fa5920916c43->enter($__internal_18db9c14d0c10403ef09440122c288884e4a6a3462ec4979e3b5fa5920916c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planemodel edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_18db9c14d0c10403ef09440122c288884e4a6a3462ec4979e3b5fa5920916c43->leave($__internal_18db9c14d0c10403ef09440122c288884e4a6a3462ec4979e3b5fa5920916c43_prof);

        
        $__internal_1fa145a8a97a6506a8738f3c38843831e027c89361493c09e01f5499611b1760->leave($__internal_1fa145a8a97a6506a8738f3c38843831e027c89361493c09e01f5499611b1760_prof);

    }

    public function getTemplateName()
    {
        return ":planemodel:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Planemodel edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('planemodel_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":planemodel:edit.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/planemodel/edit.html.twig");
    }
}
