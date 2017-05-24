<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ed598f64c3eaa249ab8e1cd012263774744fd2aae7a0bb9f4357007b645c5fd8 extends Twig_Template
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
        $__internal_8ca9185a014604d3b13b374beba94ee13ef3f01bf46e0ca8375fd843fbaf7aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ca9185a014604d3b13b374beba94ee13ef3f01bf46e0ca8375fd843fbaf7aaf->enter($__internal_8ca9185a014604d3b13b374beba94ee13ef3f01bf46e0ca8375fd843fbaf7aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_341f745b99f696be4c9f2de2335cceb7748a4db65430244d5f53b28281482e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341f745b99f696be4c9f2de2335cceb7748a4db65430244d5f53b28281482e55->enter($__internal_341f745b99f696be4c9f2de2335cceb7748a4db65430244d5f53b28281482e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_8ca9185a014604d3b13b374beba94ee13ef3f01bf46e0ca8375fd843fbaf7aaf->leave($__internal_8ca9185a014604d3b13b374beba94ee13ef3f01bf46e0ca8375fd843fbaf7aaf_prof);

        
        $__internal_341f745b99f696be4c9f2de2335cceb7748a4db65430244d5f53b28281482e55->leave($__internal_341f745b99f696be4c9f2de2335cceb7748a4db65430244d5f53b28281482e55_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
