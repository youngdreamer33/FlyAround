<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8379bf755200ba199f8eb9a135bc2640ad66bbe1df70a5c176ed8cec89bf1992 extends Twig_Template
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
        $__internal_37d8cb7fde2fe1e7d1d8c3c17e2ebd188c478f390d49b47bf391527c9660eb19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d8cb7fde2fe1e7d1d8c3c17e2ebd188c478f390d49b47bf391527c9660eb19->enter($__internal_37d8cb7fde2fe1e7d1d8c3c17e2ebd188c478f390d49b47bf391527c9660eb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e8315b599bd7ad5248ebba5c07cab2ecc3f9c623cdc775065f23add073716d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8315b599bd7ad5248ebba5c07cab2ecc3f9c623cdc775065f23add073716d6b->enter($__internal_e8315b599bd7ad5248ebba5c07cab2ecc3f9c623cdc775065f23add073716d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_37d8cb7fde2fe1e7d1d8c3c17e2ebd188c478f390d49b47bf391527c9660eb19->leave($__internal_37d8cb7fde2fe1e7d1d8c3c17e2ebd188c478f390d49b47bf391527c9660eb19_prof);

        
        $__internal_e8315b599bd7ad5248ebba5c07cab2ecc3f9c623cdc775065f23add073716d6b->leave($__internal_e8315b599bd7ad5248ebba5c07cab2ecc3f9c623cdc775065f23add073716d6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
