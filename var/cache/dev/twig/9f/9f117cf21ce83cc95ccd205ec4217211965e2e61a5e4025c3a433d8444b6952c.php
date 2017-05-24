<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_db3716d3f708ad48587c9859687a871f43214f665f4ba4c9523cefb01dc0c217 extends Twig_Template
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
        $__internal_b793c9a7e79e33cddfad7ded0f788c944610b0f999638b5f749b0130e7119af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b793c9a7e79e33cddfad7ded0f788c944610b0f999638b5f749b0130e7119af7->enter($__internal_b793c9a7e79e33cddfad7ded0f788c944610b0f999638b5f749b0130e7119af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_310caed0446ee55d93bdbbaaef5a2ef2ba1946060c4b11a6ced02429365a2fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310caed0446ee55d93bdbbaaef5a2ef2ba1946060c4b11a6ced02429365a2fe9->enter($__internal_310caed0446ee55d93bdbbaaef5a2ef2ba1946060c4b11a6ced02429365a2fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b793c9a7e79e33cddfad7ded0f788c944610b0f999638b5f749b0130e7119af7->leave($__internal_b793c9a7e79e33cddfad7ded0f788c944610b0f999638b5f749b0130e7119af7_prof);

        
        $__internal_310caed0446ee55d93bdbbaaef5a2ef2ba1946060c4b11a6ced02429365a2fe9->leave($__internal_310caed0446ee55d93bdbbaaef5a2ef2ba1946060c4b11a6ced02429365a2fe9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
