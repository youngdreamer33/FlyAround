<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3a850b9d28cdb48dc986b07263c05526f4999b31edacc9ce6e365ca366872178 extends Twig_Template
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
        $__internal_c85c694c3f90f7fed9a35c91afd94398cd8c9601789e160491f408112b83de5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c85c694c3f90f7fed9a35c91afd94398cd8c9601789e160491f408112b83de5d->enter($__internal_c85c694c3f90f7fed9a35c91afd94398cd8c9601789e160491f408112b83de5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_10e33faba0c4f3504677db7d812e5fc2772f97a42779ba971b7e7ecc8157bc33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e33faba0c4f3504677db7d812e5fc2772f97a42779ba971b7e7ecc8157bc33->enter($__internal_10e33faba0c4f3504677db7d812e5fc2772f97a42779ba971b7e7ecc8157bc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c85c694c3f90f7fed9a35c91afd94398cd8c9601789e160491f408112b83de5d->leave($__internal_c85c694c3f90f7fed9a35c91afd94398cd8c9601789e160491f408112b83de5d_prof);

        
        $__internal_10e33faba0c4f3504677db7d812e5fc2772f97a42779ba971b7e7ecc8157bc33->leave($__internal_10e33faba0c4f3504677db7d812e5fc2772f97a42779ba971b7e7ecc8157bc33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
