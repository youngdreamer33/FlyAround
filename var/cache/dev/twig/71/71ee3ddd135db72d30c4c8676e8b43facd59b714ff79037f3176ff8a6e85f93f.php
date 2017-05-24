<?php

/* :planemodel:index.html.twig */
class __TwigTemplate_b8d7cc5a3a3f6768b489eb98bc9761d05cc0eb5d567bdb89215892a42f647e83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planemodel:index.html.twig", 1);
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
        $__internal_31a9923c816331e0e082c5a72b9245dddd92618ec2ebddd6bd736c07b36188f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a9923c816331e0e082c5a72b9245dddd92618ec2ebddd6bd736c07b36188f7->enter($__internal_31a9923c816331e0e082c5a72b9245dddd92618ec2ebddd6bd736c07b36188f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:index.html.twig"));

        $__internal_c603d1840e482c8592203f14b17c4c9abe0984063857b2bd41ff2955e112514c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c603d1840e482c8592203f14b17c4c9abe0984063857b2bd41ff2955e112514c->enter($__internal_c603d1840e482c8592203f14b17c4c9abe0984063857b2bd41ff2955e112514c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31a9923c816331e0e082c5a72b9245dddd92618ec2ebddd6bd736c07b36188f7->leave($__internal_31a9923c816331e0e082c5a72b9245dddd92618ec2ebddd6bd736c07b36188f7_prof);

        
        $__internal_c603d1840e482c8592203f14b17c4c9abe0984063857b2bd41ff2955e112514c->leave($__internal_c603d1840e482c8592203f14b17c4c9abe0984063857b2bd41ff2955e112514c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32a45e14f30801c3e0737b9364e0d858e6d0fa1ff046ae339c104b0ade4a640b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a45e14f30801c3e0737b9364e0d858e6d0fa1ff046ae339c104b0ade4a640b->enter($__internal_32a45e14f30801c3e0737b9364e0d858e6d0fa1ff046ae339c104b0ade4a640b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c81782f22e396541f4b81bb60571bc761e1bd4f6c0ae746c053a9114dfad9e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c81782f22e396541f4b81bb60571bc761e1bd4f6c0ae746c053a9114dfad9e7->enter($__internal_8c81782f22e396541f4b81bb60571bc761e1bd4f6c0ae746c053a9114dfad9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planemodels list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Model</th>
                <th>Manufacturer</th>
                <th>Cruisespeed</th>
                <th>Nbseats</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["planeModels"] ?? $this->getContext($context, "planeModels")));
        foreach ($context['_seq'] as $context["_key"] => $context["planeModel"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_show", array("id" => $this->getAttribute($context["planeModel"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "model", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "manufacturer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "cruiseSpeed", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "nbSeats", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeModel"], "status", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_show", array("id" => $this->getAttribute($context["planeModel"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_edit", array("id" => $this->getAttribute($context["planeModel"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planeModel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_new");
        echo "\">Create a new planeModel</a>
        </li>
    </ul>
";
        
        $__internal_8c81782f22e396541f4b81bb60571bc761e1bd4f6c0ae746c053a9114dfad9e7->leave($__internal_8c81782f22e396541f4b81bb60571bc761e1bd4f6c0ae746c053a9114dfad9e7_prof);

        
        $__internal_32a45e14f30801c3e0737b9364e0d858e6d0fa1ff046ae339c104b0ade4a640b->leave($__internal_32a45e14f30801c3e0737b9364e0d858e6d0fa1ff046ae339c104b0ade4a640b_prof);

    }

    public function getTemplateName()
    {
        return ":planemodel:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  120 => 39,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Planemodels list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Model</th>
                <th>Manufacturer</th>
                <th>Cruisespeed</th>
                <th>Nbseats</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for planeModel in planeModels %}
            <tr>
                <td><a href=\"{{ path('planemodel_show', { 'id': planeModel.id }) }}\">{{ planeModel.id }}</a></td>
                <td>{{ planeModel.model }}</td>
                <td>{{ planeModel.manufacturer }}</td>
                <td>{{ planeModel.cruiseSpeed }}</td>
                <td>{{ planeModel.nbSeats }}</td>
                <td>{{ planeModel.status }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('planemodel_show', { 'id': planeModel.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('planemodel_edit', { 'id': planeModel.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('planemodel_new') }}\">Create a new planeModel</a>
        </li>
    </ul>
{% endblock %}
", ":planemodel:index.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/planemodel/index.html.twig");
    }
}
