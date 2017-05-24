<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4797223814f9f4baf13dd6b3e4d12709f6698e41d16f53c7b98f05ee42b19e32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6721ba849363db8e75bdaa87050cf959389d3202af6afa185614efd3dfb53e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6721ba849363db8e75bdaa87050cf959389d3202af6afa185614efd3dfb53e1a->enter($__internal_6721ba849363db8e75bdaa87050cf959389d3202af6afa185614efd3dfb53e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_9ae23934fd8b14671611b3e01a97fcff3149afc53a9d7f2848e3a7d33846000f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae23934fd8b14671611b3e01a97fcff3149afc53a9d7f2848e3a7d33846000f->enter($__internal_9ae23934fd8b14671611b3e01a97fcff3149afc53a9d7f2848e3a7d33846000f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6721ba849363db8e75bdaa87050cf959389d3202af6afa185614efd3dfb53e1a->leave($__internal_6721ba849363db8e75bdaa87050cf959389d3202af6afa185614efd3dfb53e1a_prof);

        
        $__internal_9ae23934fd8b14671611b3e01a97fcff3149afc53a9d7f2848e3a7d33846000f->leave($__internal_9ae23934fd8b14671611b3e01a97fcff3149afc53a9d7f2848e3a7d33846000f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
