<?php

/* :reservation:show.html.twig */
class __TwigTemplate_6ccbb9126a73d4cd521e1731fd32b2ecb15ee26c97ebd91398bcacf77e12c76e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:show.html.twig", 1);
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
        $__internal_d46af8c99912edcc76aba93f397f1d683820ba2cdbd53c6df438544ec36e24ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46af8c99912edcc76aba93f397f1d683820ba2cdbd53c6df438544ec36e24ee->enter($__internal_d46af8c99912edcc76aba93f397f1d683820ba2cdbd53c6df438544ec36e24ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:show.html.twig"));

        $__internal_60b63cce325631987a9b3b9d4c234949d9bfe502f34a202661a396549e7d5b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b63cce325631987a9b3b9d4c234949d9bfe502f34a202661a396549e7d5b23->enter($__internal_60b63cce325631987a9b3b9d4c234949d9bfe502f34a202661a396549e7d5b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d46af8c99912edcc76aba93f397f1d683820ba2cdbd53c6df438544ec36e24ee->leave($__internal_d46af8c99912edcc76aba93f397f1d683820ba2cdbd53c6df438544ec36e24ee_prof);

        
        $__internal_60b63cce325631987a9b3b9d4c234949d9bfe502f34a202661a396549e7d5b23->leave($__internal_60b63cce325631987a9b3b9d4c234949d9bfe502f34a202661a396549e7d5b23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_685e67ed1ef35ad9499a2f31911048f4dd7e57c84d219a9ac4b55bbacd23c3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685e67ed1ef35ad9499a2f31911048f4dd7e57c84d219a9ac4b55bbacd23c3e5->enter($__internal_685e67ed1ef35ad9499a2f31911048f4dd7e57c84d219a9ac4b55bbacd23c3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9df99b977463b4de108cd58d5402fdb5d036aff07fad8af8abf06550713aeb86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df99b977463b4de108cd58d5402fdb5d036aff07fad8af8abf06550713aeb86->enter($__internal_9df99b977463b4de108cd58d5402fdb5d036aff07fad8af8abf06550713aeb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbseats</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "nbSeats", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_edit", array("id" => $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9df99b977463b4de108cd58d5402fdb5d036aff07fad8af8abf06550713aeb86->leave($__internal_9df99b977463b4de108cd58d5402fdb5d036aff07fad8af8abf06550713aeb86_prof);

        
        $__internal_685e67ed1ef35ad9499a2f31911048f4dd7e57c84d219a9ac4b55bbacd23c3e5->leave($__internal_685e67ed1ef35ad9499a2f31911048f4dd7e57c84d219a9ac4b55bbacd23c3e5_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reservation.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ reservation.name }}</td>
            </tr>
            <tr>
                <th>Nbseats</th>
                <td>{{ reservation.nbSeats }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('reservation_edit', { 'id': reservation.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":reservation:show.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/reservation/show.html.twig");
    }
}
