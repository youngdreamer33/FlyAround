<?php

/* :user:show.html.twig */
class __TwigTemplate_7e0f6a5acbf709c76ff0dc40b25b3b9c5e461bc7dd7b57573f4088c4f2bd26ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show.html.twig", 1);
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
        $__internal_4ff00fbe2e7c92854763aeeea213c92b27da6e16efc58ac469f0100101cd1d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff00fbe2e7c92854763aeeea213c92b27da6e16efc58ac469f0100101cd1d26->enter($__internal_4ff00fbe2e7c92854763aeeea213c92b27da6e16efc58ac469f0100101cd1d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $__internal_f653e4a8028739f1c03bcdfebf57d334a2b3eb31ea1838d1256dc73ee30dec90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f653e4a8028739f1c03bcdfebf57d334a2b3eb31ea1838d1256dc73ee30dec90->enter($__internal_f653e4a8028739f1c03bcdfebf57d334a2b3eb31ea1838d1256dc73ee30dec90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ff00fbe2e7c92854763aeeea213c92b27da6e16efc58ac469f0100101cd1d26->leave($__internal_4ff00fbe2e7c92854763aeeea213c92b27da6e16efc58ac469f0100101cd1d26_prof);

        
        $__internal_f653e4a8028739f1c03bcdfebf57d334a2b3eb31ea1838d1256dc73ee30dec90->leave($__internal_f653e4a8028739f1c03bcdfebf57d334a2b3eb31ea1838d1256dc73ee30dec90_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0763c3e6e5ca2b3dd2ee670ce9f014a64cd3c06b09726fef04bec514791f97cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0763c3e6e5ca2b3dd2ee670ce9f014a64cd3c06b09726fef04bec514791f97cf->enter($__internal_0763c3e6e5ca2b3dd2ee670ce9f014a64cd3c06b09726fef04bec514791f97cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_191d3253b7f97d8583126492f5441770ffb51e540cb263193d6ddd4716ca9f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191d3253b7f97d8583126492f5441770ffb51e540cb263193d6ddd4716ca9f44->enter($__internal_191d3253b7f97d8583126492f5441770ffb51e540cb263193d6ddd4716ca9f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_191d3253b7f97d8583126492f5441770ffb51e540cb263193d6ddd4716ca9f44->leave($__internal_191d3253b7f97d8583126492f5441770ffb51e540cb263193d6ddd4716ca9f44_prof);

        
        $__internal_0763c3e6e5ca2b3dd2ee670ce9f014a64cd3c06b09726fef04bec514791f97cf->leave($__internal_0763c3e6e5ca2b3dd2ee670ce9f014a64cd3c06b09726fef04bec514791f97cf_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ user.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:show.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/user/show.html.twig");
    }
}
