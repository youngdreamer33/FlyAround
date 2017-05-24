<?php

/* :user:edit.html.twig */
class __TwigTemplate_0f612a596ff8e7cabb00af03b9a8cc025d2e6b8e4ae0b9f37894b090af23b085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
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
        $__internal_d694b1966fc5ab32d7c5983760cea50beffe7de92db62a91519a79239513243e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d694b1966fc5ab32d7c5983760cea50beffe7de92db62a91519a79239513243e->enter($__internal_d694b1966fc5ab32d7c5983760cea50beffe7de92db62a91519a79239513243e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $__internal_8fa0d9c9e1662c3944390e35a4d99fd3260a1f87c794994d7427caec8c5306be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa0d9c9e1662c3944390e35a4d99fd3260a1f87c794994d7427caec8c5306be->enter($__internal_8fa0d9c9e1662c3944390e35a4d99fd3260a1f87c794994d7427caec8c5306be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d694b1966fc5ab32d7c5983760cea50beffe7de92db62a91519a79239513243e->leave($__internal_d694b1966fc5ab32d7c5983760cea50beffe7de92db62a91519a79239513243e_prof);

        
        $__internal_8fa0d9c9e1662c3944390e35a4d99fd3260a1f87c794994d7427caec8c5306be->leave($__internal_8fa0d9c9e1662c3944390e35a4d99fd3260a1f87c794994d7427caec8c5306be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d49fd2527f93213dc9276b7d315cefa3e42bed331cf229c420aef5df9def501e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d49fd2527f93213dc9276b7d315cefa3e42bed331cf229c420aef5df9def501e->enter($__internal_d49fd2527f93213dc9276b7d315cefa3e42bed331cf229c420aef5df9def501e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73639a9fa1aa19fc35a0d26c12082bcaaf1f00813c489ed0621f3d563824ebfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73639a9fa1aa19fc35a0d26c12082bcaaf1f00813c489ed0621f3d563824ebfc->enter($__internal_73639a9fa1aa19fc35a0d26c12082bcaaf1f00813c489ed0621f3d563824ebfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_73639a9fa1aa19fc35a0d26c12082bcaaf1f00813c489ed0621f3d563824ebfc->leave($__internal_73639a9fa1aa19fc35a0d26c12082bcaaf1f00813c489ed0621f3d563824ebfc_prof);

        
        $__internal_d49fd2527f93213dc9276b7d315cefa3e42bed331cf229c420aef5df9def501e->leave($__internal_d49fd2527f93213dc9276b7d315cefa3e42bed331cf229c420aef5df9def501e_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:edit.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/user/edit.html.twig");
    }
}
