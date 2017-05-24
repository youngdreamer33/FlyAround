<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ec14cc3b2c8168b74a9a870dce4471c37542a8af95d1c3deda5e8bf67f7d3c6d extends Twig_Template
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
        $__internal_9deb9134ad67abe906ae62b927712a1f66e4e6b0acde260f86f501199bf2e892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9deb9134ad67abe906ae62b927712a1f66e4e6b0acde260f86f501199bf2e892->enter($__internal_9deb9134ad67abe906ae62b927712a1f66e4e6b0acde260f86f501199bf2e892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_86fab20ff8f3095e6f96b5709dbd737335c97901a9caa38a87faf7398dad1ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fab20ff8f3095e6f96b5709dbd737335c97901a9caa38a87faf7398dad1ac2->enter($__internal_86fab20ff8f3095e6f96b5709dbd737335c97901a9caa38a87faf7398dad1ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9deb9134ad67abe906ae62b927712a1f66e4e6b0acde260f86f501199bf2e892->leave($__internal_9deb9134ad67abe906ae62b927712a1f66e4e6b0acde260f86f501199bf2e892_prof);

        
        $__internal_86fab20ff8f3095e6f96b5709dbd737335c97901a9caa38a87faf7398dad1ac2->leave($__internal_86fab20ff8f3095e6f96b5709dbd737335c97901a9caa38a87faf7398dad1ac2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
