<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_71135c85904bf810169f521ea4d0867221d786b90dd265c188d9d9c524cb0214 extends Twig_Template
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
        $__internal_ac7e3bd69e9b4ee3576eea5ca89ad1cab4a7ccf4253a2ab54265a5625f4e8f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac7e3bd69e9b4ee3576eea5ca89ad1cab4a7ccf4253a2ab54265a5625f4e8f11->enter($__internal_ac7e3bd69e9b4ee3576eea5ca89ad1cab4a7ccf4253a2ab54265a5625f4e8f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2b6623a7907c3687de7d724cb0bb3516c20102e1f8ef76be6144502c4a1be9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6623a7907c3687de7d724cb0bb3516c20102e1f8ef76be6144502c4a1be9a0->enter($__internal_2b6623a7907c3687de7d724cb0bb3516c20102e1f8ef76be6144502c4a1be9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ac7e3bd69e9b4ee3576eea5ca89ad1cab4a7ccf4253a2ab54265a5625f4e8f11->leave($__internal_ac7e3bd69e9b4ee3576eea5ca89ad1cab4a7ccf4253a2ab54265a5625f4e8f11_prof);

        
        $__internal_2b6623a7907c3687de7d724cb0bb3516c20102e1f8ef76be6144502c4a1be9a0->leave($__internal_2b6623a7907c3687de7d724cb0bb3516c20102e1f8ef76be6144502c4a1be9a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
