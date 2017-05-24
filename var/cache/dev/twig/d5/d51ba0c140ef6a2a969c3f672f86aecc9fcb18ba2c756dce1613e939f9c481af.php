<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f5a0aa3844d9600030e9ac735f4890a4de59c0b76ee05fadb7af494b20f0708d extends Twig_Template
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
        $__internal_481993fcd6cd211baa315f51cd44b267c7956d5098a86b7a19519a394e269d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481993fcd6cd211baa315f51cd44b267c7956d5098a86b7a19519a394e269d09->enter($__internal_481993fcd6cd211baa315f51cd44b267c7956d5098a86b7a19519a394e269d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_0cff6604e605678874327018ddabf5a112a8d459e6f40d2d8407590ab03f8829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cff6604e605678874327018ddabf5a112a8d459e6f40d2d8407590ab03f8829->enter($__internal_0cff6604e605678874327018ddabf5a112a8d459e6f40d2d8407590ab03f8829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_481993fcd6cd211baa315f51cd44b267c7956d5098a86b7a19519a394e269d09->leave($__internal_481993fcd6cd211baa315f51cd44b267c7956d5098a86b7a19519a394e269d09_prof);

        
        $__internal_0cff6604e605678874327018ddabf5a112a8d459e6f40d2d8407590ab03f8829->leave($__internal_0cff6604e605678874327018ddabf5a112a8d459e6f40d2d8407590ab03f8829_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
