<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_aa31ab996e47fda23ad49151f6136e043e59dca3f38aa76de5207f69d5ac57fa extends Twig_Template
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
        $__internal_96ab37a0ba58486bb4883d466bd0d4b0cf1bc71b0b4a8a86c4d4025c7bcca5da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ab37a0ba58486bb4883d466bd0d4b0cf1bc71b0b4a8a86c4d4025c7bcca5da->enter($__internal_96ab37a0ba58486bb4883d466bd0d4b0cf1bc71b0b4a8a86c4d4025c7bcca5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c8c2c98f2622f1259246c56831b06dd40f51a7ba13d64c03714ecd9c45025c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c2c98f2622f1259246c56831b06dd40f51a7ba13d64c03714ecd9c45025c87->enter($__internal_c8c2c98f2622f1259246c56831b06dd40f51a7ba13d64c03714ecd9c45025c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_96ab37a0ba58486bb4883d466bd0d4b0cf1bc71b0b4a8a86c4d4025c7bcca5da->leave($__internal_96ab37a0ba58486bb4883d466bd0d4b0cf1bc71b0b4a8a86c4d4025c7bcca5da_prof);

        
        $__internal_c8c2c98f2622f1259246c56831b06dd40f51a7ba13d64c03714ecd9c45025c87->leave($__internal_c8c2c98f2622f1259246c56831b06dd40f51a7ba13d64c03714ecd9c45025c87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
