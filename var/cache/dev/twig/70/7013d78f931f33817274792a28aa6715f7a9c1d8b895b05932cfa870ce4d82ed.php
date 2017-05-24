<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_3f4c9cade32f53675f5d1507ee1007bd799aa5f57b44c2fc2f6931c09424bd7f extends Twig_Template
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
        $__internal_db611ffb07ba4154795ce3851d3f15d5ffdf4feb057fabeda49e6d9c37dce5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db611ffb07ba4154795ce3851d3f15d5ffdf4feb057fabeda49e6d9c37dce5c4->enter($__internal_db611ffb07ba4154795ce3851d3f15d5ffdf4feb057fabeda49e6d9c37dce5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_8d51a2947433955163de02ca64c754d35d4557b1e9f9e8f27fe539895f00b03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d51a2947433955163de02ca64c754d35d4557b1e9f9e8f27fe539895f00b03c->enter($__internal_8d51a2947433955163de02ca64c754d35d4557b1e9f9e8f27fe539895f00b03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_db611ffb07ba4154795ce3851d3f15d5ffdf4feb057fabeda49e6d9c37dce5c4->leave($__internal_db611ffb07ba4154795ce3851d3f15d5ffdf4feb057fabeda49e6d9c37dce5c4_prof);

        
        $__internal_8d51a2947433955163de02ca64c754d35d4557b1e9f9e8f27fe539895f00b03c->leave($__internal_8d51a2947433955163de02ca64c754d35d4557b1e9f9e8f27fe539895f00b03c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
