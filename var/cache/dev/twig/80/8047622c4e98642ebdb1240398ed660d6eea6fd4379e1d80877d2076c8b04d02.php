<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a2047749632772e78fc479fb789b20bfbae028baf86d5e829db4bd4947a1e2e3 extends Twig_Template
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
        $__internal_d22480e72ec95bfb2cb41a0849d2a3be68fe4dd98bc0f688a7065d48459867da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d22480e72ec95bfb2cb41a0849d2a3be68fe4dd98bc0f688a7065d48459867da->enter($__internal_d22480e72ec95bfb2cb41a0849d2a3be68fe4dd98bc0f688a7065d48459867da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d10755215a9164ca6d7f1517615ed9b4d655cbe78bcd9aa0ece7bb630c3d0c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10755215a9164ca6d7f1517615ed9b4d655cbe78bcd9aa0ece7bb630c3d0c5f->enter($__internal_d10755215a9164ca6d7f1517615ed9b4d655cbe78bcd9aa0ece7bb630c3d0c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d22480e72ec95bfb2cb41a0849d2a3be68fe4dd98bc0f688a7065d48459867da->leave($__internal_d22480e72ec95bfb2cb41a0849d2a3be68fe4dd98bc0f688a7065d48459867da_prof);

        
        $__internal_d10755215a9164ca6d7f1517615ed9b4d655cbe78bcd9aa0ece7bb630c3d0c5f->leave($__internal_d10755215a9164ca6d7f1517615ed9b4d655cbe78bcd9aa0ece7bb630c3d0c5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
