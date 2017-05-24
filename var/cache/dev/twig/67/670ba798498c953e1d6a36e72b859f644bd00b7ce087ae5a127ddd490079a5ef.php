<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_740a1e675171eae31fdc33a6b2ec07b9a03970286eb59464e27fc1f696422796 extends Twig_Template
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
        $__internal_36f8412ea746d0eff1f71d44783ff0a3777b844b13845c5d5333ad7da21c5300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f8412ea746d0eff1f71d44783ff0a3777b844b13845c5d5333ad7da21c5300->enter($__internal_36f8412ea746d0eff1f71d44783ff0a3777b844b13845c5d5333ad7da21c5300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6903ec8ddbeb3e84b2866eebb106a5eb533bf8c9ae8aa1857db53ed6dd594eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6903ec8ddbeb3e84b2866eebb106a5eb533bf8c9ae8aa1857db53ed6dd594eb5->enter($__internal_6903ec8ddbeb3e84b2866eebb106a5eb533bf8c9ae8aa1857db53ed6dd594eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_36f8412ea746d0eff1f71d44783ff0a3777b844b13845c5d5333ad7da21c5300->leave($__internal_36f8412ea746d0eff1f71d44783ff0a3777b844b13845c5d5333ad7da21c5300_prof);

        
        $__internal_6903ec8ddbeb3e84b2866eebb106a5eb533bf8c9ae8aa1857db53ed6dd594eb5->leave($__internal_6903ec8ddbeb3e84b2866eebb106a5eb533bf8c9ae8aa1857db53ed6dd594eb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
