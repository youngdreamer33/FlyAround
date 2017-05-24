<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_af0d7ffca172acc8290551e8da69fd63cb787d448b705003130cc80d19d83054 extends Twig_Template
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
        $__internal_c71c518e79aaa9aed201d6ac4833d1f477e63bdf6874393131ada7cf929b1add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71c518e79aaa9aed201d6ac4833d1f477e63bdf6874393131ada7cf929b1add->enter($__internal_c71c518e79aaa9aed201d6ac4833d1f477e63bdf6874393131ada7cf929b1add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f449f97d3744f620d44a4413fbb2c032f9b43a24f5d6cef765a78a76616c8fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f449f97d3744f620d44a4413fbb2c032f9b43a24f5d6cef765a78a76616c8fca->enter($__internal_f449f97d3744f620d44a4413fbb2c032f9b43a24f5d6cef765a78a76616c8fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c71c518e79aaa9aed201d6ac4833d1f477e63bdf6874393131ada7cf929b1add->leave($__internal_c71c518e79aaa9aed201d6ac4833d1f477e63bdf6874393131ada7cf929b1add_prof);

        
        $__internal_f449f97d3744f620d44a4413fbb2c032f9b43a24f5d6cef765a78a76616c8fca->leave($__internal_f449f97d3744f620d44a4413fbb2c032f9b43a24f5d6cef765a78a76616c8fca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
