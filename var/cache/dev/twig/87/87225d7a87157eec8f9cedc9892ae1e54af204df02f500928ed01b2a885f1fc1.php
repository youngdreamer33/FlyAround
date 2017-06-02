<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_35fd9d2c58f593900fee87462fc7540f589c0a853dbe1dd4c0a2751a67a78112 extends Twig_Template
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
        $__internal_ccd4c2c67ec28648f0c262fca5486de4c6a8e3c5918ad219c67532fd47b305ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd4c2c67ec28648f0c262fca5486de4c6a8e3c5918ad219c67532fd47b305ce->enter($__internal_ccd4c2c67ec28648f0c262fca5486de4c6a8e3c5918ad219c67532fd47b305ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_1eb1f7595ad2c6861ae91c556d0f372c923a53ae24e00b56505dcb7adadb0231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb1f7595ad2c6861ae91c556d0f372c923a53ae24e00b56505dcb7adadb0231->enter($__internal_1eb1f7595ad2c6861ae91c556d0f372c923a53ae24e00b56505dcb7adadb0231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_ccd4c2c67ec28648f0c262fca5486de4c6a8e3c5918ad219c67532fd47b305ce->leave($__internal_ccd4c2c67ec28648f0c262fca5486de4c6a8e3c5918ad219c67532fd47b305ce_prof);

        
        $__internal_1eb1f7595ad2c6861ae91c556d0f372c923a53ae24e00b56505dcb7adadb0231->leave($__internal_1eb1f7595ad2c6861ae91c556d0f372c923a53ae24e00b56505dcb7adadb0231_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
