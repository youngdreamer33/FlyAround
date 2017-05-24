<?php

/* :user:index.html.twig */
class __TwigTemplate_31cd7980d539f5030c9ba6008ad2e907e5d380f9e651916b39530209789f802f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:index.html.twig", 1);
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
        $__internal_5a09f86ad643687e3e5e28df35598a63a1d998fdee4a46102459ca3b3bd3b71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a09f86ad643687e3e5e28df35598a63a1d998fdee4a46102459ca3b3bd3b71d->enter($__internal_5a09f86ad643687e3e5e28df35598a63a1d998fdee4a46102459ca3b3bd3b71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $__internal_69b35d5b2de47ded650c7a8d3c45df0f566cc623707ab87c05958d8640c4a6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b35d5b2de47ded650c7a8d3c45df0f566cc623707ab87c05958d8640c4a6e2->enter($__internal_69b35d5b2de47ded650c7a8d3c45df0f566cc623707ab87c05958d8640c4a6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a09f86ad643687e3e5e28df35598a63a1d998fdee4a46102459ca3b3bd3b71d->leave($__internal_5a09f86ad643687e3e5e28df35598a63a1d998fdee4a46102459ca3b3bd3b71d_prof);

        
        $__internal_69b35d5b2de47ded650c7a8d3c45df0f566cc623707ab87c05958d8640c4a6e2->leave($__internal_69b35d5b2de47ded650c7a8d3c45df0f566cc623707ab87c05958d8640c4a6e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf41680bd908d1c3a54ca172e7765d52dd47b9cd6e25912802cc4e2769aefc88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf41680bd908d1c3a54ca172e7765d52dd47b9cd6e25912802cc4e2769aefc88->enter($__internal_bf41680bd908d1c3a54ca172e7765d52dd47b9cd6e25912802cc4e2769aefc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b5a2b7fd4fc8ae9fb2a7e975a011f270171a64a6b23ee6e1960e2e3c500fa94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5a2b7fd4fc8ae9fb2a7e975a011f270171a64a6b23ee6e1960e2e3c500fa94->enter($__internal_6b5a2b7fd4fc8ae9fb2a7e975a011f270171a64a6b23ee6e1960e2e3c500fa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_6b5a2b7fd4fc8ae9fb2a7e975a011f270171a64a6b23ee6e1960e2e3c500fa94->leave($__internal_6b5a2b7fd4fc8ae9fb2a7e975a011f270171a64a6b23ee6e1960e2e3c500fa94_prof);

        
        $__internal_bf41680bd908d1c3a54ca172e7765d52dd47b9cd6e25912802cc4e2769aefc88->leave($__internal_bf41680bd908d1c3a54ca172e7765d52dd47b9cd6e25912802cc4e2769aefc88_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", ":user:index.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/user/index.html.twig");
    }
}
