<?php

/* WCSCoavBundle:Default:index.html.twig */
class __TwigTemplate_1df966f41b79e44b5ae46a0e70d57500872dffda0bc3b62a8fe47d884d96e833 extends Twig_Template
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
        $__internal_9a28cdf89c94b863dfcaeb4b3b5c488e7ea87c4212da759ac4a537f729d2794a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a28cdf89c94b863dfcaeb4b3b5c488e7ea87c4212da759ac4a537f729d2794a->enter($__internal_9a28cdf89c94b863dfcaeb4b3b5c488e7ea87c4212da759ac4a537f729d2794a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:Default:index.html.twig"));

        $__internal_8f5bb6069b357a742f455b845d60117975cec3f7aab959c3ebb892b86595affb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5bb6069b357a742f455b845d60117975cec3f7aab959c3ebb892b86595affb->enter($__internal_8f5bb6069b357a742f455b845d60117975cec3f7aab959c3ebb892b86595affb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WCSCoavBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_9a28cdf89c94b863dfcaeb4b3b5c488e7ea87c4212da759ac4a537f729d2794a->leave($__internal_9a28cdf89c94b863dfcaeb4b3b5c488e7ea87c4212da759ac4a537f729d2794a_prof);

        
        $__internal_8f5bb6069b357a742f455b845d60117975cec3f7aab959c3ebb892b86595affb->leave($__internal_8f5bb6069b357a742f455b845d60117975cec3f7aab959c3ebb892b86595affb_prof);

    }

    public function getTemplateName()
    {
        return "WCSCoavBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "WCSCoavBundle:Default:index.html.twig", "/var/www/html/PHP/Symfony/FlyAround/src/WCS/CoavBundle/Resources/views/Default/index.html.twig");
    }
}
