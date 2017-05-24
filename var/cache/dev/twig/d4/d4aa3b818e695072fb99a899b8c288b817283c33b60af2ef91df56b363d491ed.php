<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b637723b582a7979b4b36d8b8f86a06c12f6affa9919a773d7bb7ead0fa50a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97bb16b4767b28c6b1033f6f1a3e7f83616695fe2d4133a3243db262cb09f428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97bb16b4767b28c6b1033f6f1a3e7f83616695fe2d4133a3243db262cb09f428->enter($__internal_97bb16b4767b28c6b1033f6f1a3e7f83616695fe2d4133a3243db262cb09f428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_9426776d69b56015b5a29aec74273d9a110c79b30e4dc8b748d234fe8e13c1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9426776d69b56015b5a29aec74273d9a110c79b30e4dc8b748d234fe8e13c1ed->enter($__internal_9426776d69b56015b5a29aec74273d9a110c79b30e4dc8b748d234fe8e13c1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97bb16b4767b28c6b1033f6f1a3e7f83616695fe2d4133a3243db262cb09f428->leave($__internal_97bb16b4767b28c6b1033f6f1a3e7f83616695fe2d4133a3243db262cb09f428_prof);

        
        $__internal_9426776d69b56015b5a29aec74273d9a110c79b30e4dc8b748d234fe8e13c1ed->leave($__internal_9426776d69b56015b5a29aec74273d9a110c79b30e4dc8b748d234fe8e13c1ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ccb9ed4b9f0d0970934dcbd767e011c0910a722bc0ffabd58f23024aab87bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ccb9ed4b9f0d0970934dcbd767e011c0910a722bc0ffabd58f23024aab87bc9->enter($__internal_3ccb9ed4b9f0d0970934dcbd767e011c0910a722bc0ffabd58f23024aab87bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10b8363b56ceb2a1c1c46844d3c09996e24de4248ffdf391fda3e32bf5ec8eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b8363b56ceb2a1c1c46844d3c09996e24de4248ffdf391fda3e32bf5ec8eee->enter($__internal_10b8363b56ceb2a1c1c46844d3c09996e24de4248ffdf391fda3e32bf5ec8eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_10b8363b56ceb2a1c1c46844d3c09996e24de4248ffdf391fda3e32bf5ec8eee->leave($__internal_10b8363b56ceb2a1c1c46844d3c09996e24de4248ffdf391fda3e32bf5ec8eee_prof);

        
        $__internal_3ccb9ed4b9f0d0970934dcbd767e011c0910a722bc0ffabd58f23024aab87bc9->leave($__internal_3ccb9ed4b9f0d0970934dcbd767e011c0910a722bc0ffabd58f23024aab87bc9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ac8961dfa490536550d166b9e1e18e4f6768661d5ab31c7c1b2810e052c0a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac8961dfa490536550d166b9e1e18e4f6768661d5ab31c7c1b2810e052c0a5f->enter($__internal_7ac8961dfa490536550d166b9e1e18e4f6768661d5ab31c7c1b2810e052c0a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa63a9beb8009c568de8ec35cf4c8ff67eeed3b08e233da049efb404c9a7d372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa63a9beb8009c568de8ec35cf4c8ff67eeed3b08e233da049efb404c9a7d372->enter($__internal_fa63a9beb8009c568de8ec35cf4c8ff67eeed3b08e233da049efb404c9a7d372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_fa63a9beb8009c568de8ec35cf4c8ff67eeed3b08e233da049efb404c9a7d372->leave($__internal_fa63a9beb8009c568de8ec35cf4c8ff67eeed3b08e233da049efb404c9a7d372_prof);

        
        $__internal_7ac8961dfa490536550d166b9e1e18e4f6768661d5ab31c7c1b2810e052c0a5f->leave($__internal_7ac8961dfa490536550d166b9e1e18e4f6768661d5ab31c7c1b2810e052c0a5f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
