<?php

/* :reservation:index.html.twig */
class __TwigTemplate_6f7212a0f5b4d5571f425898d99a8d6ab752d0b1e6a35112902ee4723c0ddc00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:index.html.twig", 1);
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
        $__internal_7dc6d95dc2a834b5ad182e51756164960932be87452b32ea89a5e417d284a819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc6d95dc2a834b5ad182e51756164960932be87452b32ea89a5e417d284a819->enter($__internal_7dc6d95dc2a834b5ad182e51756164960932be87452b32ea89a5e417d284a819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $__internal_a4b2d44b2ee7f9b21acc9c2d4c61f55f86ceb65129f56a7e7979c333877427a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b2d44b2ee7f9b21acc9c2d4c61f55f86ceb65129f56a7e7979c333877427a8->enter($__internal_a4b2d44b2ee7f9b21acc9c2d4c61f55f86ceb65129f56a7e7979c333877427a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dc6d95dc2a834b5ad182e51756164960932be87452b32ea89a5e417d284a819->leave($__internal_7dc6d95dc2a834b5ad182e51756164960932be87452b32ea89a5e417d284a819_prof);

        
        $__internal_a4b2d44b2ee7f9b21acc9c2d4c61f55f86ceb65129f56a7e7979c333877427a8->leave($__internal_a4b2d44b2ee7f9b21acc9c2d4c61f55f86ceb65129f56a7e7979c333877427a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_008ff3cfa27320d6ea9f73e2f54e147f3fbd9c14e15609ef30ba0cafac25dc11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008ff3cfa27320d6ea9f73e2f54e147f3fbd9c14e15609ef30ba0cafac25dc11->enter($__internal_008ff3cfa27320d6ea9f73e2f54e147f3fbd9c14e15609ef30ba0cafac25dc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c67c07640fa800dc7d95f1cf7b3b9ae64bccd1258cd4273c9996bd8b3b6f380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c67c07640fa800dc7d95f1cf7b3b9ae64bccd1258cd4273c9996bd8b3b6f380->enter($__internal_4c67c07640fa800dc7d95f1cf7b3b9ae64bccd1258cd4273c9996bd8b3b6f380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Nbseats</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "nbSeats", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_edit", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_new");
        echo "\">Create a new reservation</a>
        </li>
    </ul>
";
        
        $__internal_4c67c07640fa800dc7d95f1cf7b3b9ae64bccd1258cd4273c9996bd8b3b6f380->leave($__internal_4c67c07640fa800dc7d95f1cf7b3b9ae64bccd1258cd4273c9996bd8b3b6f380_prof);

        
        $__internal_008ff3cfa27320d6ea9f73e2f54e147f3fbd9c14e15609ef30ba0cafac25dc11->leave($__internal_008ff3cfa27320d6ea9f73e2f54e147f3fbd9c14e15609ef30ba0cafac25dc11_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reservations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Nbseats</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reservation in reservations %}
            <tr>
                <td><a href=\"{{ path('reservation_show', { 'id': reservation.id }) }}\">{{ reservation.id }}</a></td>
                <td>{{ reservation.name }}</td>
                <td>{{ reservation.nbSeats }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('reservation_show', { 'id': reservation.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('reservation_edit', { 'id': reservation.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reservation_new') }}\">Create a new reservation</a>
        </li>
    </ul>
{% endblock %}
", ":reservation:index.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/reservation/index.html.twig");
    }
}
