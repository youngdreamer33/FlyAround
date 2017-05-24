<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_cdbb904837e962a19dfec90805919a0d29ba78968ddf9c258e4cd106724570ae extends Twig_Template
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
        $__internal_9297574c8e15e249769dce43046efcf9209dc6d747fed833ad95ecbf8c986f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9297574c8e15e249769dce43046efcf9209dc6d747fed833ad95ecbf8c986f2e->enter($__internal_9297574c8e15e249769dce43046efcf9209dc6d747fed833ad95ecbf8c986f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c35b84bd409b7882827c53dfb8c250c2af3bf43e0b0ae394671d7a15aa4f4b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35b84bd409b7882827c53dfb8c250c2af3bf43e0b0ae394671d7a15aa4f4b6b->enter($__internal_c35b84bd409b7882827c53dfb8c250c2af3bf43e0b0ae394671d7a15aa4f4b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9297574c8e15e249769dce43046efcf9209dc6d747fed833ad95ecbf8c986f2e->leave($__internal_9297574c8e15e249769dce43046efcf9209dc6d747fed833ad95ecbf8c986f2e_prof);

        
        $__internal_c35b84bd409b7882827c53dfb8c250c2af3bf43e0b0ae394671d7a15aa4f4b6b->leave($__internal_c35b84bd409b7882827c53dfb8c250c2af3bf43e0b0ae394671d7a15aa4f4b6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
