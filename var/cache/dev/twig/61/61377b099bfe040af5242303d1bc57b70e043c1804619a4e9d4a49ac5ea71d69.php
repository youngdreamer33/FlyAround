<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_87c54b94642b5acb5f8392769c9f7cda27b8679021e0bbdc2603da56cb6339b7 extends Twig_Template
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
        $__internal_6f99fabf020a473d14fca32f3d6609141f6615c0089e60b3092ede878e236747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f99fabf020a473d14fca32f3d6609141f6615c0089e60b3092ede878e236747->enter($__internal_6f99fabf020a473d14fca32f3d6609141f6615c0089e60b3092ede878e236747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7e59cc7a8bf3e80f2e8c15663876478680e8f2f69976513e1d2445b02d912a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e59cc7a8bf3e80f2e8c15663876478680e8f2f69976513e1d2445b02d912a9e->enter($__internal_7e59cc7a8bf3e80f2e8c15663876478680e8f2f69976513e1d2445b02d912a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6f99fabf020a473d14fca32f3d6609141f6615c0089e60b3092ede878e236747->leave($__internal_6f99fabf020a473d14fca32f3d6609141f6615c0089e60b3092ede878e236747_prof);

        
        $__internal_7e59cc7a8bf3e80f2e8c15663876478680e8f2f69976513e1d2445b02d912a9e->leave($__internal_7e59cc7a8bf3e80f2e8c15663876478680e8f2f69976513e1d2445b02d912a9e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
