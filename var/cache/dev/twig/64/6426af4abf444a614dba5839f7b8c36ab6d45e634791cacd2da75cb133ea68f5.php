<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d53658b15e56fd14b303884d834c3407f4d01ff2e637535840b08a37fb3d1798 extends Twig_Template
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
        $__internal_5be26049c0b774f6ae65b2f31ba7b2077311cec19b0efb7e43783495aba9dbbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be26049c0b774f6ae65b2f31ba7b2077311cec19b0efb7e43783495aba9dbbe->enter($__internal_5be26049c0b774f6ae65b2f31ba7b2077311cec19b0efb7e43783495aba9dbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_534319765d982ed9e1bbc6ce051290f0c669295f0d0678dc5177fa58fbfe465c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534319765d982ed9e1bbc6ce051290f0c669295f0d0678dc5177fa58fbfe465c->enter($__internal_534319765d982ed9e1bbc6ce051290f0c669295f0d0678dc5177fa58fbfe465c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5be26049c0b774f6ae65b2f31ba7b2077311cec19b0efb7e43783495aba9dbbe->leave($__internal_5be26049c0b774f6ae65b2f31ba7b2077311cec19b0efb7e43783495aba9dbbe_prof);

        
        $__internal_534319765d982ed9e1bbc6ce051290f0c669295f0d0678dc5177fa58fbfe465c->leave($__internal_534319765d982ed9e1bbc6ce051290f0c669295f0d0678dc5177fa58fbfe465c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
