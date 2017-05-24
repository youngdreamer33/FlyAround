<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9da4296c33e4a2507a8266e721232d10f3a1b58beaa68b6875203d4e982a6302 extends Twig_Template
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
        $__internal_855375af3ce94b7c9bb5b2e97989c9edbb365f256ec57a7b15713e7102269f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855375af3ce94b7c9bb5b2e97989c9edbb365f256ec57a7b15713e7102269f1c->enter($__internal_855375af3ce94b7c9bb5b2e97989c9edbb365f256ec57a7b15713e7102269f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f7be2a711a10d87a43263345d75a6010bb472abdc881a45267df482b25eb81e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7be2a711a10d87a43263345d75a6010bb472abdc881a45267df482b25eb81e5->enter($__internal_f7be2a711a10d87a43263345d75a6010bb472abdc881a45267df482b25eb81e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_855375af3ce94b7c9bb5b2e97989c9edbb365f256ec57a7b15713e7102269f1c->leave($__internal_855375af3ce94b7c9bb5b2e97989c9edbb365f256ec57a7b15713e7102269f1c_prof);

        
        $__internal_f7be2a711a10d87a43263345d75a6010bb472abdc881a45267df482b25eb81e5->leave($__internal_f7be2a711a10d87a43263345d75a6010bb472abdc881a45267df482b25eb81e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
