<?php

/* :flight:show.html.twig */
class __TwigTemplate_54fd729718160761906768ad494698da8006367c7d50208c05fd3b3f733e51aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":flight:show.html.twig", 1);
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
        $__internal_1ad1db8eb7c3325cad88d1f13e5fddf13f983209d5331828cd0a7238cb47b7e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad1db8eb7c3325cad88d1f13e5fddf13f983209d5331828cd0a7238cb47b7e1->enter($__internal_1ad1db8eb7c3325cad88d1f13e5fddf13f983209d5331828cd0a7238cb47b7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:show.html.twig"));

        $__internal_11d3ff3a115dace3fc932633f179ecdf31e7178c2381f74d869ae1277390c15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d3ff3a115dace3fc932633f179ecdf31e7178c2381f74d869ae1277390c15a->enter($__internal_11d3ff3a115dace3fc932633f179ecdf31e7178c2381f74d869ae1277390c15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ad1db8eb7c3325cad88d1f13e5fddf13f983209d5331828cd0a7238cb47b7e1->leave($__internal_1ad1db8eb7c3325cad88d1f13e5fddf13f983209d5331828cd0a7238cb47b7e1_prof);

        
        $__internal_11d3ff3a115dace3fc932633f179ecdf31e7178c2381f74d869ae1277390c15a->leave($__internal_11d3ff3a115dace3fc932633f179ecdf31e7178c2381f74d869ae1277390c15a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7527eb7930b5143f5708d694ef7c332d9b6a1970a3b1e6b3e22e5f1d4cd4d716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7527eb7930b5143f5708d694ef7c332d9b6a1970a3b1e6b3e22e5f1d4cd4d716->enter($__internal_7527eb7930b5143f5708d694ef7c332d9b6a1970a3b1e6b3e22e5f1d4cd4d716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf9d453fe18f1555e5b23a831599b3092fdceabdfa220fcd257200f7da85fa9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9d453fe18f1555e5b23a831599b3092fdceabdfa220fcd257200f7da85fa9e->enter($__internal_bf9d453fe18f1555e5b23a831599b3092fdceabdfa220fcd257200f7da85fa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flight</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Departure</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "departure", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Arrival</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "arrival", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pilot</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "pilot", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Freeseats</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "freeSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Takeoftime</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "takeOfTime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "takeOfTime", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_edit", array("id" => $this->getAttribute(($context["flight"] ?? $this->getContext($context, "flight")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bf9d453fe18f1555e5b23a831599b3092fdceabdfa220fcd257200f7da85fa9e->leave($__internal_bf9d453fe18f1555e5b23a831599b3092fdceabdfa220fcd257200f7da85fa9e_prof);

        
        $__internal_7527eb7930b5143f5708d694ef7c332d9b6a1970a3b1e6b3e22e5f1d4cd4d716->leave($__internal_7527eb7930b5143f5708d694ef7c332d9b6a1970a3b1e6b3e22e5f1d4cd4d716_prof);

    }

    public function getTemplateName()
    {
        return ":flight:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  116 => 43,  110 => 40,  104 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Flight</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ flight.id }}</td>
            </tr>
            <tr>
                <th>Departure</th>
                <td>{{ flight.departure }}</td>
            </tr>
            <tr>
                <th>Arrival</th>
                <td>{{ flight.arrival }}</td>
            </tr>
            <tr>
                <th>Pilot</th>
                <td>{{ flight.pilot }}</td>
            </tr>
            <tr>
                <th>Freeseats</th>
                <td>{{ flight.freeSeats }}</td>
            </tr>
            <tr>
                <th>Takeoftime</th>
                <td>{% if flight.takeOfTime %}{{ flight.takeOfTime|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('flight_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('flight_edit', { 'id': flight.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":flight:show.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/flight/show.html.twig");
    }
}
