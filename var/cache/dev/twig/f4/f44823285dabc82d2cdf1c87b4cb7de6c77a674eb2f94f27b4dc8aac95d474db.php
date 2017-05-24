<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_fdef7b3cbc51627ddf34b13ab6fe79909f3fb2aa9aacdf2b43b9e2fe712f399f extends Twig_Template
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
        $__internal_fef10561feb468e66ed8409da50014abdc09ea8c936ca181f197286bf9873d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef10561feb468e66ed8409da50014abdc09ea8c936ca181f197286bf9873d44->enter($__internal_fef10561feb468e66ed8409da50014abdc09ea8c936ca181f197286bf9873d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_e6d9727dcb38a20526c0e030cfc9dd729a8980fc1acc5a18c1e3b711f5386305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d9727dcb38a20526c0e030cfc9dd729a8980fc1acc5a18c1e3b711f5386305->enter($__internal_e6d9727dcb38a20526c0e030cfc9dd729a8980fc1acc5a18c1e3b711f5386305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_fef10561feb468e66ed8409da50014abdc09ea8c936ca181f197286bf9873d44->leave($__internal_fef10561feb468e66ed8409da50014abdc09ea8c936ca181f197286bf9873d44_prof);

        
        $__internal_e6d9727dcb38a20526c0e030cfc9dd729a8980fc1acc5a18c1e3b711f5386305->leave($__internal_e6d9727dcb38a20526c0e030cfc9dd729a8980fc1acc5a18c1e3b711f5386305_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
