<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3b800c76039893f776d13579b102652f2f9390bd8d7e25474946641ff184e935 extends Twig_Template
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
        $__internal_2e9ea8a8727352f05653358b987b8cca661fced2223d18f457aa67d0b5b75b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e9ea8a8727352f05653358b987b8cca661fced2223d18f457aa67d0b5b75b98->enter($__internal_2e9ea8a8727352f05653358b987b8cca661fced2223d18f457aa67d0b5b75b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_a0d7265aef16a7ba63f5cd8d44172f81c3909b31cb44bacbe57ba6bccbd4c3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d7265aef16a7ba63f5cd8d44172f81c3909b31cb44bacbe57ba6bccbd4c3e0->enter($__internal_a0d7265aef16a7ba63f5cd8d44172f81c3909b31cb44bacbe57ba6bccbd4c3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2e9ea8a8727352f05653358b987b8cca661fced2223d18f457aa67d0b5b75b98->leave($__internal_2e9ea8a8727352f05653358b987b8cca661fced2223d18f457aa67d0b5b75b98_prof);

        
        $__internal_a0d7265aef16a7ba63f5cd8d44172f81c3909b31cb44bacbe57ba6bccbd4c3e0->leave($__internal_a0d7265aef16a7ba63f5cd8d44172f81c3909b31cb44bacbe57ba6bccbd4c3e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
