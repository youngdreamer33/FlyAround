<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3f95cc52884f1e1fc3f59cf29d804ae00326e9c7855e29cd2cb9bf7f2b0bd4ed extends Twig_Template
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
        $__internal_ebedc3d370076fb4a745d567901d1ae7dcaa23559d55f96855170666c342a0f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebedc3d370076fb4a745d567901d1ae7dcaa23559d55f96855170666c342a0f1->enter($__internal_ebedc3d370076fb4a745d567901d1ae7dcaa23559d55f96855170666c342a0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_11c4ad529bb62c724eff964c920db64946390d4269981da0fbe7e42d0df6eed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c4ad529bb62c724eff964c920db64946390d4269981da0fbe7e42d0df6eed4->enter($__internal_11c4ad529bb62c724eff964c920db64946390d4269981da0fbe7e42d0df6eed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ebedc3d370076fb4a745d567901d1ae7dcaa23559d55f96855170666c342a0f1->leave($__internal_ebedc3d370076fb4a745d567901d1ae7dcaa23559d55f96855170666c342a0f1_prof);

        
        $__internal_11c4ad529bb62c724eff964c920db64946390d4269981da0fbe7e42d0df6eed4->leave($__internal_11c4ad529bb62c724eff964c920db64946390d4269981da0fbe7e42d0df6eed4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
