<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b899594e1a4af6ec732f205dc84f98eb52b7baa8fd2d88f5bc1115b4936d23ad extends Twig_Template
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
        $__internal_44dc1c6d9a4393334753248c73eb9e042bf0c836ea25bc6d66634da851ae9f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44dc1c6d9a4393334753248c73eb9e042bf0c836ea25bc6d66634da851ae9f68->enter($__internal_44dc1c6d9a4393334753248c73eb9e042bf0c836ea25bc6d66634da851ae9f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b1a5c40e214b17353db8deacb5204640ddc6f1b8f8d1f95a475078dee49528d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a5c40e214b17353db8deacb5204640ddc6f1b8f8d1f95a475078dee49528d2->enter($__internal_b1a5c40e214b17353db8deacb5204640ddc6f1b8f8d1f95a475078dee49528d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_44dc1c6d9a4393334753248c73eb9e042bf0c836ea25bc6d66634da851ae9f68->leave($__internal_44dc1c6d9a4393334753248c73eb9e042bf0c836ea25bc6d66634da851ae9f68_prof);

        
        $__internal_b1a5c40e214b17353db8deacb5204640ddc6f1b8f8d1f95a475078dee49528d2->leave($__internal_b1a5c40e214b17353db8deacb5204640ddc6f1b8f8d1f95a475078dee49528d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
