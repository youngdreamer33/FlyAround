<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9b7e91467a98ec3bfd0c0a15bf5a691f95618817514bacd939803090eeb923df extends Twig_Template
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
        $__internal_b982d2472acd8d13d877bd864a194803c05111f514d2b42e08ba209b567b3236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b982d2472acd8d13d877bd864a194803c05111f514d2b42e08ba209b567b3236->enter($__internal_b982d2472acd8d13d877bd864a194803c05111f514d2b42e08ba209b567b3236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_306724893055a06dd4d39ed28aa0509d56c57eaf31716a063ba7027a0b9ac194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306724893055a06dd4d39ed28aa0509d56c57eaf31716a063ba7027a0b9ac194->enter($__internal_306724893055a06dd4d39ed28aa0509d56c57eaf31716a063ba7027a0b9ac194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b982d2472acd8d13d877bd864a194803c05111f514d2b42e08ba209b567b3236->leave($__internal_b982d2472acd8d13d877bd864a194803c05111f514d2b42e08ba209b567b3236_prof);

        
        $__internal_306724893055a06dd4d39ed28aa0509d56c57eaf31716a063ba7027a0b9ac194->leave($__internal_306724893055a06dd4d39ed28aa0509d56c57eaf31716a063ba7027a0b9ac194_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
