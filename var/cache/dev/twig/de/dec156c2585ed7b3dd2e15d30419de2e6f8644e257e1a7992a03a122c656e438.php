<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_8cffbb1fe8b1699a05e879eb7aef88e3bd574f3762956b7656e4af077bb583d3 extends Twig_Template
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
        $__internal_8e04af896e567eb6880c97cf5e24ff3584788f0c3858a5cf8cd4b06703670fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e04af896e567eb6880c97cf5e24ff3584788f0c3858a5cf8cd4b06703670fa4->enter($__internal_8e04af896e567eb6880c97cf5e24ff3584788f0c3858a5cf8cd4b06703670fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_f7b60c7c812cea08adb69fdd76485182db3f220accc15322034c5e4226ce94bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b60c7c812cea08adb69fdd76485182db3f220accc15322034c5e4226ce94bc->enter($__internal_f7b60c7c812cea08adb69fdd76485182db3f220accc15322034c5e4226ce94bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8e04af896e567eb6880c97cf5e24ff3584788f0c3858a5cf8cd4b06703670fa4->leave($__internal_8e04af896e567eb6880c97cf5e24ff3584788f0c3858a5cf8cd4b06703670fa4_prof);

        
        $__internal_f7b60c7c812cea08adb69fdd76485182db3f220accc15322034c5e4226ce94bc->leave($__internal_f7b60c7c812cea08adb69fdd76485182db3f220accc15322034c5e4226ce94bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
