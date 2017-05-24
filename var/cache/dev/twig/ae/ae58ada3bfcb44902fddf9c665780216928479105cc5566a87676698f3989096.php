<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2b010cb35fb9a71259ebd5f4d9945690d6bc2df7d5bb357e7184efe2193ab1b2 extends Twig_Template
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
        $__internal_ed30ac180fe7247fa403a620432f872032d26688333c7cb49449f4aa343b4516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed30ac180fe7247fa403a620432f872032d26688333c7cb49449f4aa343b4516->enter($__internal_ed30ac180fe7247fa403a620432f872032d26688333c7cb49449f4aa343b4516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_cf580c4fc87b27a95702f9dbdc358a9f478f576f6ed239a3f998e98bd782a1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf580c4fc87b27a95702f9dbdc358a9f478f576f6ed239a3f998e98bd782a1e1->enter($__internal_cf580c4fc87b27a95702f9dbdc358a9f478f576f6ed239a3f998e98bd782a1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ed30ac180fe7247fa403a620432f872032d26688333c7cb49449f4aa343b4516->leave($__internal_ed30ac180fe7247fa403a620432f872032d26688333c7cb49449f4aa343b4516_prof);

        
        $__internal_cf580c4fc87b27a95702f9dbdc358a9f478f576f6ed239a3f998e98bd782a1e1->leave($__internal_cf580c4fc87b27a95702f9dbdc358a9f478f576f6ed239a3f998e98bd782a1e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
