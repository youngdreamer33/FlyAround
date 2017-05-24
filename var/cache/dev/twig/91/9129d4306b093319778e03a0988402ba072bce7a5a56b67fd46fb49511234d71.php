<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4474f74cada0a5e75a6dd5b3cdda12cf897c90f75a32f1281201f0c9fa22ecb9 extends Twig_Template
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
        $__internal_f643b28700f9ad50433325d2797c08b951ddb244ddd1c9b169307a487a401297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f643b28700f9ad50433325d2797c08b951ddb244ddd1c9b169307a487a401297->enter($__internal_f643b28700f9ad50433325d2797c08b951ddb244ddd1c9b169307a487a401297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_71e125655405633a2c4d36e2dde97ed10077f58f809779b8884f5130158361dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e125655405633a2c4d36e2dde97ed10077f58f809779b8884f5130158361dc->enter($__internal_71e125655405633a2c4d36e2dde97ed10077f58f809779b8884f5130158361dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f643b28700f9ad50433325d2797c08b951ddb244ddd1c9b169307a487a401297->leave($__internal_f643b28700f9ad50433325d2797c08b951ddb244ddd1c9b169307a487a401297_prof);

        
        $__internal_71e125655405633a2c4d36e2dde97ed10077f58f809779b8884f5130158361dc->leave($__internal_71e125655405633a2c4d36e2dde97ed10077f58f809779b8884f5130158361dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
