<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_73735ef2de69645ebcdeac65c950fbb0f088f50adae5df3c40ef4d9100a786c6 extends Twig_Template
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
        $__internal_2afeb228e9e3e5fb57884b30923b5512e0295db5f0ce774aa6ac3edff20abbc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2afeb228e9e3e5fb57884b30923b5512e0295db5f0ce774aa6ac3edff20abbc3->enter($__internal_2afeb228e9e3e5fb57884b30923b5512e0295db5f0ce774aa6ac3edff20abbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_8c622689d57d660b3621a0ecf7257ac0c95d2a557ca940df2ea5957dbc1f4910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c622689d57d660b3621a0ecf7257ac0c95d2a557ca940df2ea5957dbc1f4910->enter($__internal_8c622689d57d660b3621a0ecf7257ac0c95d2a557ca940df2ea5957dbc1f4910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2afeb228e9e3e5fb57884b30923b5512e0295db5f0ce774aa6ac3edff20abbc3->leave($__internal_2afeb228e9e3e5fb57884b30923b5512e0295db5f0ce774aa6ac3edff20abbc3_prof);

        
        $__internal_8c622689d57d660b3621a0ecf7257ac0c95d2a557ca940df2ea5957dbc1f4910->leave($__internal_8c622689d57d660b3621a0ecf7257ac0c95d2a557ca940df2ea5957dbc1f4910_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
