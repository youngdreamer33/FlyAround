<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8bbc625140afc72c8b19f38f0f24da0557ba3863bbb77bb63a619b97bc881b85 extends Twig_Template
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
        $__internal_1aec6efc624f0d002758e5be9281016f7f15919d0a0bae02e75bd6cf10d47b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aec6efc624f0d002758e5be9281016f7f15919d0a0bae02e75bd6cf10d47b0e->enter($__internal_1aec6efc624f0d002758e5be9281016f7f15919d0a0bae02e75bd6cf10d47b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2bb4691a9cc89f9ac2b2ee0a93e8f109b30a0a242b5e948c42ed75998ef9d798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb4691a9cc89f9ac2b2ee0a93e8f109b30a0a242b5e948c42ed75998ef9d798->enter($__internal_2bb4691a9cc89f9ac2b2ee0a93e8f109b30a0a242b5e948c42ed75998ef9d798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1aec6efc624f0d002758e5be9281016f7f15919d0a0bae02e75bd6cf10d47b0e->leave($__internal_1aec6efc624f0d002758e5be9281016f7f15919d0a0bae02e75bd6cf10d47b0e_prof);

        
        $__internal_2bb4691a9cc89f9ac2b2ee0a93e8f109b30a0a242b5e948c42ed75998ef9d798->leave($__internal_2bb4691a9cc89f9ac2b2ee0a93e8f109b30a0a242b5e948c42ed75998ef9d798_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
