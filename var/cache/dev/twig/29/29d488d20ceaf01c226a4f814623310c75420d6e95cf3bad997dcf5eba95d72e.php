<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_76bf0ac26a99047ff29b3263e88c04869e0cc34ac959f274dce6eaae3620a324 extends Twig_Template
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
        $__internal_a3dcc22a46260fb4654c6b7e370cb89f885422619ba2308ab6ceab9b2a927fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3dcc22a46260fb4654c6b7e370cb89f885422619ba2308ab6ceab9b2a927fd4->enter($__internal_a3dcc22a46260fb4654c6b7e370cb89f885422619ba2308ab6ceab9b2a927fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_baa22fe63704fda484bb14dc4d2b509c47d88867a338fc3900e529f400342da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa22fe63704fda484bb14dc4d2b509c47d88867a338fc3900e529f400342da5->enter($__internal_baa22fe63704fda484bb14dc4d2b509c47d88867a338fc3900e529f400342da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a3dcc22a46260fb4654c6b7e370cb89f885422619ba2308ab6ceab9b2a927fd4->leave($__internal_a3dcc22a46260fb4654c6b7e370cb89f885422619ba2308ab6ceab9b2a927fd4_prof);

        
        $__internal_baa22fe63704fda484bb14dc4d2b509c47d88867a338fc3900e529f400342da5->leave($__internal_baa22fe63704fda484bb14dc4d2b509c47d88867a338fc3900e529f400342da5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
