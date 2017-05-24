<?php

/* :planemodel:show.html.twig */
class __TwigTemplate_0780f1d6998ce27b5a47e30211ce6ea71179fc810d1d2065332e012ff5d95319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planemodel:show.html.twig", 1);
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
        $__internal_2b968b9ba86c1e4fb7d1face33dbe655b038c377cb31be9a9c608f74f7072d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b968b9ba86c1e4fb7d1face33dbe655b038c377cb31be9a9c608f74f7072d03->enter($__internal_2b968b9ba86c1e4fb7d1face33dbe655b038c377cb31be9a9c608f74f7072d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:show.html.twig"));

        $__internal_e4bcb20ec14c94e1bebdedc25979bf32a628e4f9c59fce11497f978c92d4dc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bcb20ec14c94e1bebdedc25979bf32a628e4f9c59fce11497f978c92d4dc18->enter($__internal_e4bcb20ec14c94e1bebdedc25979bf32a628e4f9c59fce11497f978c92d4dc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planemodel:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b968b9ba86c1e4fb7d1face33dbe655b038c377cb31be9a9c608f74f7072d03->leave($__internal_2b968b9ba86c1e4fb7d1face33dbe655b038c377cb31be9a9c608f74f7072d03_prof);

        
        $__internal_e4bcb20ec14c94e1bebdedc25979bf32a628e4f9c59fce11497f978c92d4dc18->leave($__internal_e4bcb20ec14c94e1bebdedc25979bf32a628e4f9c59fce11497f978c92d4dc18_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a42415c1ef60e479c4234548c1b068dbee231eaad3a2ff51879e56409c9632d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a42415c1ef60e479c4234548c1b068dbee231eaad3a2ff51879e56409c9632d->enter($__internal_9a42415c1ef60e479c4234548c1b068dbee231eaad3a2ff51879e56409c9632d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74151e1dc30d84cfdb9bc74e027f3daa49bbd5009be2c9b877eb55ab9bdf96e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74151e1dc30d84cfdb9bc74e027f3daa49bbd5009be2c9b877eb55ab9bdf96e2->enter($__internal_74151e1dc30d84cfdb9bc74e027f3daa49bbd5009be2c9b877eb55ab9bdf96e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planemodel</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "model", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Manufacturer</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "manufacturer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cruisespeed</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "cruiseSpeed", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbseats</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "nbSeats", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planemodel_edit", array("id" => $this->getAttribute(($context["planeModel"] ?? $this->getContext($context, "planeModel")), "id", array()))), "html", null, true);
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
        
        $__internal_74151e1dc30d84cfdb9bc74e027f3daa49bbd5009be2c9b877eb55ab9bdf96e2->leave($__internal_74151e1dc30d84cfdb9bc74e027f3daa49bbd5009be2c9b877eb55ab9bdf96e2_prof);

        
        $__internal_9a42415c1ef60e479c4234548c1b068dbee231eaad3a2ff51879e56409c9632d->leave($__internal_9a42415c1ef60e479c4234548c1b068dbee231eaad3a2ff51879e56409c9632d_prof);

    }

    public function getTemplateName()
    {
        return ":planemodel:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  114 => 43,  108 => 40,  102 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Planemodel</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ planeModel.id }}</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>{{ planeModel.model }}</td>
            </tr>
            <tr>
                <th>Manufacturer</th>
                <td>{{ planeModel.manufacturer }}</td>
            </tr>
            <tr>
                <th>Cruisespeed</th>
                <td>{{ planeModel.cruiseSpeed }}</td>
            </tr>
            <tr>
                <th>Nbseats</th>
                <td>{{ planeModel.nbSeats }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ planeModel.status }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('planemodel_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('planemodel_edit', { 'id': planeModel.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":planemodel:show.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/planemodel/show.html.twig");
    }
}
