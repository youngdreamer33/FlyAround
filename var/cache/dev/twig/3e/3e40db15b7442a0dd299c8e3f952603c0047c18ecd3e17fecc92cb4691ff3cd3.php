<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e8da47c82bdbf50e78aef30bcc8d459ea0b2d9469dfc5aab66ef267e1403fcc8 extends Twig_Template
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
        $__internal_21f35465f2cd2dfbfee2a63ebf705dc83a75f701944eccc251bd16fffaf5e37f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f35465f2cd2dfbfee2a63ebf705dc83a75f701944eccc251bd16fffaf5e37f->enter($__internal_21f35465f2cd2dfbfee2a63ebf705dc83a75f701944eccc251bd16fffaf5e37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0ed8e0f497f54a5a32f69363ee4332884b6d8da61ee60b23a0f41d4408c0b0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed8e0f497f54a5a32f69363ee4332884b6d8da61ee60b23a0f41d4408c0b0f0->enter($__internal_0ed8e0f497f54a5a32f69363ee4332884b6d8da61ee60b23a0f41d4408c0b0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_21f35465f2cd2dfbfee2a63ebf705dc83a75f701944eccc251bd16fffaf5e37f->leave($__internal_21f35465f2cd2dfbfee2a63ebf705dc83a75f701944eccc251bd16fffaf5e37f_prof);

        
        $__internal_0ed8e0f497f54a5a32f69363ee4332884b6d8da61ee60b23a0f41d4408c0b0f0->leave($__internal_0ed8e0f497f54a5a32f69363ee4332884b6d8da61ee60b23a0f41d4408c0b0f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
