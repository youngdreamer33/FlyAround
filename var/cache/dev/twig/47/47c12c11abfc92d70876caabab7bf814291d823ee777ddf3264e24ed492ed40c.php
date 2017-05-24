<?php

/* :terrain:show.html.twig */
class __TwigTemplate_e7e8571c3e76633dad8cac1b2566297d71214691211af7ace7f55d394a6f5e26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":terrain:show.html.twig", 1);
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
        $__internal_a4ad0928a2805599472777a557708793156730f8e2af0e192b3c6b11cb008399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ad0928a2805599472777a557708793156730f8e2af0e192b3c6b11cb008399->enter($__internal_a4ad0928a2805599472777a557708793156730f8e2af0e192b3c6b11cb008399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":terrain:show.html.twig"));

        $__internal_55e2b35f45446486083507ad9b575d853601779ee1453befb5b355d343f70466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e2b35f45446486083507ad9b575d853601779ee1453befb5b355d343f70466->enter($__internal_55e2b35f45446486083507ad9b575d853601779ee1453befb5b355d343f70466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":terrain:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ad0928a2805599472777a557708793156730f8e2af0e192b3c6b11cb008399->leave($__internal_a4ad0928a2805599472777a557708793156730f8e2af0e192b3c6b11cb008399_prof);

        
        $__internal_55e2b35f45446486083507ad9b575d853601779ee1453befb5b355d343f70466->leave($__internal_55e2b35f45446486083507ad9b575d853601779ee1453befb5b355d343f70466_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e04f0597177fbc46f6fba53a73a93533e885000201d59cd30d5a052a7c07f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e04f0597177fbc46f6fba53a73a93533e885000201d59cd30d5a052a7c07f9e->enter($__internal_2e04f0597177fbc46f6fba53a73a93533e885000201d59cd30d5a052a7c07f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e37192f21e0b24ed194a121ec5800e9481a060a6f9c0fa0667f929105f428981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37192f21e0b24ed194a121ec5800e9481a060a6f9c0fa0667f929105f428981->enter($__internal_e37192f21e0b24ed194a121ec5800e9481a060a6f9c0fa0667f929105f428981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Terrain</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Icao</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "icao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lattitue</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "lattitue", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Longitude</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "longitude", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "city", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["terrain"] ?? $this->getContext($context, "terrain")), "country", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terrain_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e37192f21e0b24ed194a121ec5800e9481a060a6f9c0fa0667f929105f428981->leave($__internal_e37192f21e0b24ed194a121ec5800e9481a060a6f9c0fa0667f929105f428981_prof);

        
        $__internal_2e04f0597177fbc46f6fba53a73a93533e885000201d59cd30d5a052a7c07f9e->leave($__internal_2e04f0597177fbc46f6fba53a73a93533e885000201d59cd30d5a052a7c07f9e_prof);

    }

    public function getTemplateName()
    {
        return ":terrain:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 41,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Terrain</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ terrain.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ terrain.name }}</td>
            </tr>
            <tr>
                <th>Icao</th>
                <td>{{ terrain.icao }}</td>
            </tr>
            <tr>
                <th>Lattitue</th>
                <td>{{ terrain.lattitue }}</td>
            </tr>
            <tr>
                <th>Longitude</th>
                <td>{{ terrain.longitude }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ terrain.city }}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>{{ terrain.country }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('terrain_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":terrain:show.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/terrain/show.html.twig");
    }
}
