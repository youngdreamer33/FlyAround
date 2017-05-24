<?php

/* :user:new.html.twig */
class __TwigTemplate_49c558ab67ab2088e237b2719b27a2d33383dc86615ee4a744669f014520590a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
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
        $__internal_5c1a2f2c864117e98a27057b330f03767bee08383aeb0f966555b05967d13feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1a2f2c864117e98a27057b330f03767bee08383aeb0f966555b05967d13feb->enter($__internal_5c1a2f2c864117e98a27057b330f03767bee08383aeb0f966555b05967d13feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $__internal_3553087a61f831964e5a4045791f047afcec2561986a7d42a7c516d5057ff95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3553087a61f831964e5a4045791f047afcec2561986a7d42a7c516d5057ff95e->enter($__internal_3553087a61f831964e5a4045791f047afcec2561986a7d42a7c516d5057ff95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c1a2f2c864117e98a27057b330f03767bee08383aeb0f966555b05967d13feb->leave($__internal_5c1a2f2c864117e98a27057b330f03767bee08383aeb0f966555b05967d13feb_prof);

        
        $__internal_3553087a61f831964e5a4045791f047afcec2561986a7d42a7c516d5057ff95e->leave($__internal_3553087a61f831964e5a4045791f047afcec2561986a7d42a7c516d5057ff95e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42e92b8080604da0bf4fed4302d0f815510f759cf76c5bb5377553db7c62771a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e92b8080604da0bf4fed4302d0f815510f759cf76c5bb5377553db7c62771a->enter($__internal_42e92b8080604da0bf4fed4302d0f815510f759cf76c5bb5377553db7c62771a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a10e9e5d70063054767831078e72736f31c97a354e91a90d9177b07c184669b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a10e9e5d70063054767831078e72736f31c97a354e91a90d9177b07c184669b->enter($__internal_9a10e9e5d70063054767831078e72736f31c97a354e91a90d9177b07c184669b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9a10e9e5d70063054767831078e72736f31c97a354e91a90d9177b07c184669b->leave($__internal_9a10e9e5d70063054767831078e72736f31c97a354e91a90d9177b07c184669b_prof);

        
        $__internal_42e92b8080604da0bf4fed4302d0f815510f759cf76c5bb5377553db7c62771a->leave($__internal_42e92b8080604da0bf4fed4302d0f815510f759cf76c5bb5377553db7c62771a_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":user:new.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/user/new.html.twig");
    }
}
