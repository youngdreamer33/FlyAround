<?php

/* :flight:index.html.twig */
class __TwigTemplate_db9bc0301e430798df0e4d2eeeb99769dc01f8c73d7b047ce58f3a2bb5b572dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":flight:index.html.twig", 1);
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
        $__internal_c772352e3b9bc4ebf9d6ebd2bd9280ce7be57500673d099c61f7c76bdf52a559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c772352e3b9bc4ebf9d6ebd2bd9280ce7be57500673d099c61f7c76bdf52a559->enter($__internal_c772352e3b9bc4ebf9d6ebd2bd9280ce7be57500673d099c61f7c76bdf52a559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:index.html.twig"));

        $__internal_558ab880b58cf3eee2835b6ce0264c3f3d3095a854e02e702a267c68f0195ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558ab880b58cf3eee2835b6ce0264c3f3d3095a854e02e702a267c68f0195ab5->enter($__internal_558ab880b58cf3eee2835b6ce0264c3f3d3095a854e02e702a267c68f0195ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":flight:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c772352e3b9bc4ebf9d6ebd2bd9280ce7be57500673d099c61f7c76bdf52a559->leave($__internal_c772352e3b9bc4ebf9d6ebd2bd9280ce7be57500673d099c61f7c76bdf52a559_prof);

        
        $__internal_558ab880b58cf3eee2835b6ce0264c3f3d3095a854e02e702a267c68f0195ab5->leave($__internal_558ab880b58cf3eee2835b6ce0264c3f3d3095a854e02e702a267c68f0195ab5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f48046ba6e814afa161638b69daba17679890458c4346b379e45a8686eb43e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48046ba6e814afa161638b69daba17679890458c4346b379e45a8686eb43e41->enter($__internal_f48046ba6e814afa161638b69daba17679890458c4346b379e45a8686eb43e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c87b06cb80097e9f1e306c89237b3443743aeb3091baee0c6357b8ef2d5c78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c87b06cb80097e9f1e306c89237b3443743aeb3091baee0c6357b8ef2d5c78f->enter($__internal_9c87b06cb80097e9f1e306c89237b3443743aeb3091baee0c6357b8ef2d5c78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Flights list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Pilot</th>
                <th>Freeseats</th>
                <th>Takeoftime</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["flights"] ?? $this->getContext($context, "flights")));
        foreach ($context['_seq'] as $context["_key"] => $context["flight"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_show", array("id" => $this->getAttribute($context["flight"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "departure", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "arrival", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "pilot", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["flight"], "freeSeats", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["flight"], "takeOfTime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["flight"], "takeOfTime", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_show", array("id" => $this->getAttribute($context["flight"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_edit", array("id" => $this->getAttribute($context["flight"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("flight_new");
        echo "\">Create a new flight</a>
        </li>
    </ul>
";
        
        $__internal_9c87b06cb80097e9f1e306c89237b3443743aeb3091baee0c6357b8ef2d5c78f->leave($__internal_9c87b06cb80097e9f1e306c89237b3443743aeb3091baee0c6357b8ef2d5c78f_prof);

        
        $__internal_f48046ba6e814afa161638b69daba17679890458c4346b379e45a8686eb43e41->leave($__internal_f48046ba6e814afa161638b69daba17679890458c4346b379e45a8686eb43e41_prof);

    }

    public function getTemplateName()
    {
        return ":flight:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 44,  122 => 39,  110 => 33,  104 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Flights list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Pilot</th>
                <th>Freeseats</th>
                <th>Takeoftime</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for flight in flights %}
            <tr>
                <td><a href=\"{{ path('flight_show', { 'id': flight.id }) }}\">{{ flight.id }}</a></td>
                <td>{{ flight.departure }}</td>
                <td>{{ flight.arrival }}</td>
                <td>{{ flight.pilot }}</td>
                <td>{{ flight.freeSeats }}</td>
                <td>{% if flight.takeOfTime %}{{ flight.takeOfTime|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('flight_show', { 'id': flight.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('flight_edit', { 'id': flight.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('flight_new') }}\">Create a new flight</a>
        </li>
    </ul>
{% endblock %}
", ":flight:index.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/flight/index.html.twig");
    }
}
