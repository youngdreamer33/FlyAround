<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b62c5a534f913c2e7bdf389d8c2467f29272453f660d2c60a71d102a1f9c547b extends Twig_Template
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
        $__internal_265f0bf97fb29a7103dab3eac58211818df67bfb31ab4cf0a53b8d704b6008fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265f0bf97fb29a7103dab3eac58211818df67bfb31ab4cf0a53b8d704b6008fc->enter($__internal_265f0bf97fb29a7103dab3eac58211818df67bfb31ab4cf0a53b8d704b6008fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_943da0a9db7821bd09f13b33378ed7f132d860175a0b6838e575123f9a4677bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943da0a9db7821bd09f13b33378ed7f132d860175a0b6838e575123f9a4677bf->enter($__internal_943da0a9db7821bd09f13b33378ed7f132d860175a0b6838e575123f9a4677bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_265f0bf97fb29a7103dab3eac58211818df67bfb31ab4cf0a53b8d704b6008fc->leave($__internal_265f0bf97fb29a7103dab3eac58211818df67bfb31ab4cf0a53b8d704b6008fc_prof);

        
        $__internal_943da0a9db7821bd09f13b33378ed7f132d860175a0b6838e575123f9a4677bf->leave($__internal_943da0a9db7821bd09f13b33378ed7f132d860175a0b6838e575123f9a4677bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
