<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_613178b24aef7e1dee0e3cd93f8393d1524d06bae56091fd1630ad3aeb8204b3 extends Twig_Template
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
        $__internal_40decd17a86082871659cd9befdfa9a08aa53c8a21f188b185407e7fd8e8af73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40decd17a86082871659cd9befdfa9a08aa53c8a21f188b185407e7fd8e8af73->enter($__internal_40decd17a86082871659cd9befdfa9a08aa53c8a21f188b185407e7fd8e8af73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_2e6143e5e087b3baa2a42c9534acf078fecaeb3008ce3be6842fb01238bb2093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6143e5e087b3baa2a42c9534acf078fecaeb3008ce3be6842fb01238bb2093->enter($__internal_2e6143e5e087b3baa2a42c9534acf078fecaeb3008ce3be6842fb01238bb2093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_40decd17a86082871659cd9befdfa9a08aa53c8a21f188b185407e7fd8e8af73->leave($__internal_40decd17a86082871659cd9befdfa9a08aa53c8a21f188b185407e7fd8e8af73_prof);

        
        $__internal_2e6143e5e087b3baa2a42c9534acf078fecaeb3008ce3be6842fb01238bb2093->leave($__internal_2e6143e5e087b3baa2a42c9534acf078fecaeb3008ce3be6842fb01238bb2093_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
