<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a35857ee1311a28a3bc68d6cb688f4573a483378ff1d1ae838e53d4742bfcaab extends Twig_Template
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
        $__internal_5a8f0214b3854bcaf70091ccfec27287b46f1dad13058909c49fa675692fb217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8f0214b3854bcaf70091ccfec27287b46f1dad13058909c49fa675692fb217->enter($__internal_5a8f0214b3854bcaf70091ccfec27287b46f1dad13058909c49fa675692fb217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_2e04a93357e8ba99cd6c7f61e321d81e44c96305dfd1859cce6ff100d987a544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e04a93357e8ba99cd6c7f61e321d81e44c96305dfd1859cce6ff100d987a544->enter($__internal_2e04a93357e8ba99cd6c7f61e321d81e44c96305dfd1859cce6ff100d987a544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_5a8f0214b3854bcaf70091ccfec27287b46f1dad13058909c49fa675692fb217->leave($__internal_5a8f0214b3854bcaf70091ccfec27287b46f1dad13058909c49fa675692fb217_prof);

        
        $__internal_2e04a93357e8ba99cd6c7f61e321d81e44c96305dfd1859cce6ff100d987a544->leave($__internal_2e04a93357e8ba99cd6c7f61e321d81e44c96305dfd1859cce6ff100d987a544_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
