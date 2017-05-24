<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ff91a568cd45297ad6ddeca97ebca6d3330951cbc4769f18119be76f4df36f5c extends Twig_Template
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
        $__internal_82d4cd1ac4e55974e66e90a6d8619169562804a7509deb7f520af00829b4d695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d4cd1ac4e55974e66e90a6d8619169562804a7509deb7f520af00829b4d695->enter($__internal_82d4cd1ac4e55974e66e90a6d8619169562804a7509deb7f520af00829b4d695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7fb97b8c232c5a43fbf13717f770e3286d6950a1990d61aa36ceed69e29c4bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb97b8c232c5a43fbf13717f770e3286d6950a1990d61aa36ceed69e29c4bca->enter($__internal_7fb97b8c232c5a43fbf13717f770e3286d6950a1990d61aa36ceed69e29c4bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_82d4cd1ac4e55974e66e90a6d8619169562804a7509deb7f520af00829b4d695->leave($__internal_82d4cd1ac4e55974e66e90a6d8619169562804a7509deb7f520af00829b4d695_prof);

        
        $__internal_7fb97b8c232c5a43fbf13717f770e3286d6950a1990d61aa36ceed69e29c4bca->leave($__internal_7fb97b8c232c5a43fbf13717f770e3286d6950a1990d61aa36ceed69e29c4bca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
