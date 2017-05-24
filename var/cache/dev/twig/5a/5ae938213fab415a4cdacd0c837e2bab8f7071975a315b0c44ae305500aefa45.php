<?php

/* :reservation:edit.html.twig */
class __TwigTemplate_f9bece0909fc312a76fe92b742c16ee638c995c31b7b070bb3caf440d41ab6fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:edit.html.twig", 1);
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
        $__internal_687d247a6966a54e8b0bc3846601eadd3f2da893631a806bb9b94dc8e1dc15a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687d247a6966a54e8b0bc3846601eadd3f2da893631a806bb9b94dc8e1dc15a3->enter($__internal_687d247a6966a54e8b0bc3846601eadd3f2da893631a806bb9b94dc8e1dc15a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:edit.html.twig"));

        $__internal_24cc9adb58fbee51cc40bc76ed96abb1c7be0ab6675e625500ec287e5a0427ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cc9adb58fbee51cc40bc76ed96abb1c7be0ab6675e625500ec287e5a0427ec->enter($__internal_24cc9adb58fbee51cc40bc76ed96abb1c7be0ab6675e625500ec287e5a0427ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_687d247a6966a54e8b0bc3846601eadd3f2da893631a806bb9b94dc8e1dc15a3->leave($__internal_687d247a6966a54e8b0bc3846601eadd3f2da893631a806bb9b94dc8e1dc15a3_prof);

        
        $__internal_24cc9adb58fbee51cc40bc76ed96abb1c7be0ab6675e625500ec287e5a0427ec->leave($__internal_24cc9adb58fbee51cc40bc76ed96abb1c7be0ab6675e625500ec287e5a0427ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb2f99f33b9e51cc168b4e8e480f1c2c36546d0b55a483a71658fb15f02f9307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2f99f33b9e51cc168b4e8e480f1c2c36546d0b55a483a71658fb15f02f9307->enter($__internal_fb2f99f33b9e51cc168b4e8e480f1c2c36546d0b55a483a71658fb15f02f9307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2732172cf28b1f5a43f1729e3daa13a33a29d468af6082d4f277d70c0fdce53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2732172cf28b1f5a43f1729e3daa13a33a29d468af6082d4f277d70c0fdce53a->enter($__internal_2732172cf28b1f5a43f1729e3daa13a33a29d468af6082d4f277d70c0fdce53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
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
        
        $__internal_2732172cf28b1f5a43f1729e3daa13a33a29d468af6082d4f277d70c0fdce53a->leave($__internal_2732172cf28b1f5a43f1729e3daa13a33a29d468af6082d4f277d70c0fdce53a_prof);

        
        $__internal_fb2f99f33b9e51cc168b4e8e480f1c2c36546d0b55a483a71658fb15f02f9307->leave($__internal_fb2f99f33b9e51cc168b4e8e480f1c2c36546d0b55a483a71658fb15f02f9307_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:edit.html.twig";
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
    <h1>Reservation edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":reservation:edit.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/reservation/edit.html.twig");
    }
}
