<?php

/* :terrain:index.html.twig */
class __TwigTemplate_39c03063315b09773a3f7af70384d6dd89bdd17c6506816cc957f16b24fcf4bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":terrain:index.html.twig", 1);
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
        $__internal_7b7881633397ba5936ada00c195da80aa1d5abf6f790fe6be40b64061ec2b7a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b7881633397ba5936ada00c195da80aa1d5abf6f790fe6be40b64061ec2b7a4->enter($__internal_7b7881633397ba5936ada00c195da80aa1d5abf6f790fe6be40b64061ec2b7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":terrain:index.html.twig"));

        $__internal_c5eb810ac908724be0fb34e845d02013e10a273f5b53ec8592558138d3725c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5eb810ac908724be0fb34e845d02013e10a273f5b53ec8592558138d3725c6e->enter($__internal_c5eb810ac908724be0fb34e845d02013e10a273f5b53ec8592558138d3725c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":terrain:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b7881633397ba5936ada00c195da80aa1d5abf6f790fe6be40b64061ec2b7a4->leave($__internal_7b7881633397ba5936ada00c195da80aa1d5abf6f790fe6be40b64061ec2b7a4_prof);

        
        $__internal_c5eb810ac908724be0fb34e845d02013e10a273f5b53ec8592558138d3725c6e->leave($__internal_c5eb810ac908724be0fb34e845d02013e10a273f5b53ec8592558138d3725c6e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb2e72b14e1d83611977cf1f52d9e95088c0d5414e99a1a6f889d80439c3789a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2e72b14e1d83611977cf1f52d9e95088c0d5414e99a1a6f889d80439c3789a->enter($__internal_cb2e72b14e1d83611977cf1f52d9e95088c0d5414e99a1a6f889d80439c3789a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9dec560927e03af2daa81fc99b274d33924f32f111e05f12acf64b560d9e4c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dec560927e03af2daa81fc99b274d33924f32f111e05f12acf64b560d9e4c16->enter($__internal_9dec560927e03af2daa81fc99b274d33924f32f111e05f12acf64b560d9e4c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Terrains list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Icao</th>
                <th>Lattitue</th>
                <th>Longitude</th>
                <th>City</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["terrains"] ?? $this->getContext($context, "terrains")));
        foreach ($context['_seq'] as $context["_key"] => $context["terrain"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terrain_show", array("id" => $this->getAttribute($context["terrain"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "icao", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "lattitue", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "longitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "city", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["terrain"], "country", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terrain_show", array("id" => $this->getAttribute($context["terrain"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terrain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    
";
        
        $__internal_9dec560927e03af2daa81fc99b274d33924f32f111e05f12acf64b560d9e4c16->leave($__internal_9dec560927e03af2daa81fc99b274d33924f32f111e05f12acf64b560d9e4c16_prof);

        
        $__internal_cb2e72b14e1d83611977cf1f52d9e95088c0d5414e99a1a6f889d80439c3789a->leave($__internal_cb2e72b14e1d83611977cf1f52d9e95088c0d5414e99a1a6f889d80439c3789a_prof);

    }

    public function getTemplateName()
    {
        return ":terrain:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 38,  107 => 32,  100 => 28,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Terrains list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Icao</th>
                <th>Lattitue</th>
                <th>Longitude</th>
                <th>City</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for terrain in terrains %}
            <tr>
                <td><a href=\"{{ path('terrain_show', { 'id': terrain.id }) }}\">{{ terrain.id }}</a></td>
                <td>{{ terrain.name }}</td>
                <td>{{ terrain.icao }}</td>
                <td>{{ terrain.lattitue }}</td>
                <td>{{ terrain.longitude }}</td>
                <td>{{ terrain.city }}</td>
                <td>{{ terrain.country }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('terrain_show', { 'id': terrain.id }) }}\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    
{% endblock %}
", ":terrain:index.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/terrain/index.html.twig");
    }
}
