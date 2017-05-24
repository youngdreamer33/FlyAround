<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_91a8934b45f9944e6ad04de6aaf89fffee96696656f72c4601847bdc8ca26d04 extends Twig_Template
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
        $__internal_05386cbda3043ebe784fc206a81ab2c838b7f03f3798acb3ce68065db7ba97a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05386cbda3043ebe784fc206a81ab2c838b7f03f3798acb3ce68065db7ba97a3->enter($__internal_05386cbda3043ebe784fc206a81ab2c838b7f03f3798acb3ce68065db7ba97a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_bac6bcd72ca52c9208f9fa895fc214ef7d399d0ab7b834a58045e3d2ca37116d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac6bcd72ca52c9208f9fa895fc214ef7d399d0ab7b834a58045e3d2ca37116d->enter($__internal_bac6bcd72ca52c9208f9fa895fc214ef7d399d0ab7b834a58045e3d2ca37116d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_05386cbda3043ebe784fc206a81ab2c838b7f03f3798acb3ce68065db7ba97a3->leave($__internal_05386cbda3043ebe784fc206a81ab2c838b7f03f3798acb3ce68065db7ba97a3_prof);

        
        $__internal_bac6bcd72ca52c9208f9fa895fc214ef7d399d0ab7b834a58045e3d2ca37116d->leave($__internal_bac6bcd72ca52c9208f9fa895fc214ef7d399d0ab7b834a58045e3d2ca37116d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
