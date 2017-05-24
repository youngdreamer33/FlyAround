<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_67641477698b6eea2e6bbfd3a74b45911356d91d77869b652912de882954c17f extends Twig_Template
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
        $__internal_a1e5688679929b09bc8d61eb30e2b797188f3ca90dc794269d54bf6140d1c57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e5688679929b09bc8d61eb30e2b797188f3ca90dc794269d54bf6140d1c57e->enter($__internal_a1e5688679929b09bc8d61eb30e2b797188f3ca90dc794269d54bf6140d1c57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_0f4214d6f5270f9b71b71fb5654a8bd04f58d2b0dedc2d36708a3a1701cce41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4214d6f5270f9b71b71fb5654a8bd04f58d2b0dedc2d36708a3a1701cce41b->enter($__internal_0f4214d6f5270f9b71b71fb5654a8bd04f58d2b0dedc2d36708a3a1701cce41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a1e5688679929b09bc8d61eb30e2b797188f3ca90dc794269d54bf6140d1c57e->leave($__internal_a1e5688679929b09bc8d61eb30e2b797188f3ca90dc794269d54bf6140d1c57e_prof);

        
        $__internal_0f4214d6f5270f9b71b71fb5654a8bd04f58d2b0dedc2d36708a3a1701cce41b->leave($__internal_0f4214d6f5270f9b71b71fb5654a8bd04f58d2b0dedc2d36708a3a1701cce41b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
