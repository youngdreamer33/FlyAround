<?php

/* :flight:edit.html.twig */
class __TwigTemplate_81ba96b2b6b4fc682da50dea7586b8b088f53195967e81c32cfca51d24287e4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":flight:edit.html.twig", 1);
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
        $__internal_d0c8b98e0dae8384dcf21320323b1737b1d0603c996fd270efc7d14fb6e554c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c8b98e0dae8384dcf21320323b1737b1d0603c996fd270efc7d14fb6e554c1->enter($__internal_d0c8b98e0dae8384dcf21320323b1737b1d0603c996fd270efc7d14fb6e554c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:edit.html.twig"));

        $__internal_b76818a83e476f490fa4513bdddcf6a5dc364eef5473b1f6d3876ba23ae323b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76818a83e476f490fa4513bdddcf6a5dc364eef5473b1f6d3876ba23ae323b8->enter($__internal_b76818a83e476f490fa4513bdddcf6a5dc364eef5473b1f6d3876ba23ae323b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0c8b98e0dae8384dcf21320323b1737b1d0603c996fd270efc7d14fb6e554c1->leave($__internal_d0c8b98e0dae8384dcf21320323b1737b1d0603c996fd270efc7d14fb6e554c1_prof);

        
        $__internal_b76818a83e476f490fa4513bdddcf6a5dc364eef5473b1f6d3876ba23ae323b8->leave($__internal_b76818a83e476f490fa4513bdddcf6a5dc364eef5473b1f6d3876ba23ae323b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5575cd978cab6389a91078055a6f0dc566d41b373f6075174268371c8fa8056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5575cd978cab6389a91078055a6f0dc566d41b373f6075174268371c8fa8056->enter($__internal_d5575cd978cab6389a91078055a6f0dc566d41b373f6075174268371c8fa8056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ce14175c6f9e27cbcf73cb7a79d0c39d9d940f8b0d9bbf0466fc28d4de15d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce14175c6f9e27cbcf73cb7a79d0c39d9d940f8b0d9bbf0466fc28d4de15d32->enter($__internal_7ce14175c6f9e27cbcf73cb7a79d0c39d9d940f8b0d9bbf0466fc28d4de15d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flight edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_index");
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
        
        $__internal_7ce14175c6f9e27cbcf73cb7a79d0c39d9d940f8b0d9bbf0466fc28d4de15d32->leave($__internal_7ce14175c6f9e27cbcf73cb7a79d0c39d9d940f8b0d9bbf0466fc28d4de15d32_prof);

        
        $__internal_d5575cd978cab6389a91078055a6f0dc566d41b373f6075174268371c8fa8056->leave($__internal_d5575cd978cab6389a91078055a6f0dc566d41b373f6075174268371c8fa8056_prof);

    }

    public function getTemplateName()
    {
        return ":flight:edit.html.twig";
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
    <h1>Flight edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('flight_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":flight:edit.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/flight/edit.html.twig");
    }
}
