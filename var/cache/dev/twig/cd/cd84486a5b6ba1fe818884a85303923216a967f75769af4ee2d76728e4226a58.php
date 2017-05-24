<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_831d6045f5f7e57b672f77b45a30282bdbdc2f4d734edd3fbfaeb309409bb625 extends Twig_Template
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
        $__internal_4350f8c4424c544bd46beebf4cc9aad076c3fde041252a5afd65bfa6c96fceea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4350f8c4424c544bd46beebf4cc9aad076c3fde041252a5afd65bfa6c96fceea->enter($__internal_4350f8c4424c544bd46beebf4cc9aad076c3fde041252a5afd65bfa6c96fceea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_1dec84788c83a33c23d424522d4ed95b903f8b715e161737289105bcf3396673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dec84788c83a33c23d424522d4ed95b903f8b715e161737289105bcf3396673->enter($__internal_1dec84788c83a33c23d424522d4ed95b903f8b715e161737289105bcf3396673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4350f8c4424c544bd46beebf4cc9aad076c3fde041252a5afd65bfa6c96fceea->leave($__internal_4350f8c4424c544bd46beebf4cc9aad076c3fde041252a5afd65bfa6c96fceea_prof);

        
        $__internal_1dec84788c83a33c23d424522d4ed95b903f8b715e161737289105bcf3396673->leave($__internal_1dec84788c83a33c23d424522d4ed95b903f8b715e161737289105bcf3396673_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
