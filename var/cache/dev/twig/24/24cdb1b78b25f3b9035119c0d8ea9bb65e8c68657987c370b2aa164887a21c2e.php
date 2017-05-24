<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3ee860a2cff957446f4e9e2481079c3f6a949a8e6a353099fa77fd7770c2b433 extends Twig_Template
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
        $__internal_03bfb9ccd2aa60e810a6c023df25221652bb67e33e2ad858cf098f6faae438bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03bfb9ccd2aa60e810a6c023df25221652bb67e33e2ad858cf098f6faae438bd->enter($__internal_03bfb9ccd2aa60e810a6c023df25221652bb67e33e2ad858cf098f6faae438bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9b02c4885305a640594f4dac2f8e4b6683b84d8c90f45dca0ae175ed02b2b12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b02c4885305a640594f4dac2f8e4b6683b84d8c90f45dca0ae175ed02b2b12d->enter($__internal_9b02c4885305a640594f4dac2f8e4b6683b84d8c90f45dca0ae175ed02b2b12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_03bfb9ccd2aa60e810a6c023df25221652bb67e33e2ad858cf098f6faae438bd->leave($__internal_03bfb9ccd2aa60e810a6c023df25221652bb67e33e2ad858cf098f6faae438bd_prof);

        
        $__internal_9b02c4885305a640594f4dac2f8e4b6683b84d8c90f45dca0ae175ed02b2b12d->leave($__internal_9b02c4885305a640594f4dac2f8e4b6683b84d8c90f45dca0ae175ed02b2b12d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
