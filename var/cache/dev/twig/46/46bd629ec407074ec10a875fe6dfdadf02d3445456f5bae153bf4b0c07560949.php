<?php

/* base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a38c8a590df51b7babe25b8f47e77b29ce53e5e0071cf89545927cddc13ede08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38c8a590df51b7babe25b8f47e77b29ce53e5e0071cf89545927cddc13ede08->enter($__internal_a38c8a590df51b7babe25b8f47e77b29ce53e5e0071cf89545927cddc13ede08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_808dc0f07b780874b0b134adb3ced8ea6c4fc2b8bd86825b02da26201f0f61d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808dc0f07b780874b0b134adb3ced8ea6c4fc2b8bd86825b02da26201f0f61d7->enter($__internal_808dc0f07b780874b0b134adb3ced8ea6c4fc2b8bd86825b02da26201f0f61d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a38c8a590df51b7babe25b8f47e77b29ce53e5e0071cf89545927cddc13ede08->leave($__internal_a38c8a590df51b7babe25b8f47e77b29ce53e5e0071cf89545927cddc13ede08_prof);

        
        $__internal_808dc0f07b780874b0b134adb3ced8ea6c4fc2b8bd86825b02da26201f0f61d7->leave($__internal_808dc0f07b780874b0b134adb3ced8ea6c4fc2b8bd86825b02da26201f0f61d7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_65372a0676f04cb198209a7a54e8b4a086bf605b8d610398aa1d0542a61f395e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65372a0676f04cb198209a7a54e8b4a086bf605b8d610398aa1d0542a61f395e->enter($__internal_65372a0676f04cb198209a7a54e8b4a086bf605b8d610398aa1d0542a61f395e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc97e02cbbbe521694d5997ca8d80bb476b4376136965bb68181a68dad39af9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc97e02cbbbe521694d5997ca8d80bb476b4376136965bb68181a68dad39af9c->enter($__internal_bc97e02cbbbe521694d5997ca8d80bb476b4376136965bb68181a68dad39af9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bc97e02cbbbe521694d5997ca8d80bb476b4376136965bb68181a68dad39af9c->leave($__internal_bc97e02cbbbe521694d5997ca8d80bb476b4376136965bb68181a68dad39af9c_prof);

        
        $__internal_65372a0676f04cb198209a7a54e8b4a086bf605b8d610398aa1d0542a61f395e->leave($__internal_65372a0676f04cb198209a7a54e8b4a086bf605b8d610398aa1d0542a61f395e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_53d9ebbff45f0fbeda490e7179447a211535e2418675d49131426d68758751c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d9ebbff45f0fbeda490e7179447a211535e2418675d49131426d68758751c1->enter($__internal_53d9ebbff45f0fbeda490e7179447a211535e2418675d49131426d68758751c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9232ceb37dbe8b384168b042460730670d5581a388c3cef03ca2e3a484765bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9232ceb37dbe8b384168b042460730670d5581a388c3cef03ca2e3a484765bec->enter($__internal_9232ceb37dbe8b384168b042460730670d5581a388c3cef03ca2e3a484765bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9232ceb37dbe8b384168b042460730670d5581a388c3cef03ca2e3a484765bec->leave($__internal_9232ceb37dbe8b384168b042460730670d5581a388c3cef03ca2e3a484765bec_prof);

        
        $__internal_53d9ebbff45f0fbeda490e7179447a211535e2418675d49131426d68758751c1->leave($__internal_53d9ebbff45f0fbeda490e7179447a211535e2418675d49131426d68758751c1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e59024dc0c70a9444b89de687db6b51433cba0e1a062cfae66e68302cfc10634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59024dc0c70a9444b89de687db6b51433cba0e1a062cfae66e68302cfc10634->enter($__internal_e59024dc0c70a9444b89de687db6b51433cba0e1a062cfae66e68302cfc10634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6296ef9ba6881c70e18909dd7fe10f91d25c2427ef0265c9e9158c45ed5355b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6296ef9ba6881c70e18909dd7fe10f91d25c2427ef0265c9e9158c45ed5355b9->enter($__internal_6296ef9ba6881c70e18909dd7fe10f91d25c2427ef0265c9e9158c45ed5355b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6296ef9ba6881c70e18909dd7fe10f91d25c2427ef0265c9e9158c45ed5355b9->leave($__internal_6296ef9ba6881c70e18909dd7fe10f91d25c2427ef0265c9e9158c45ed5355b9_prof);

        
        $__internal_e59024dc0c70a9444b89de687db6b51433cba0e1a062cfae66e68302cfc10634->leave($__internal_e59024dc0c70a9444b89de687db6b51433cba0e1a062cfae66e68302cfc10634_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a3b2c7baaf90d8932dbbcfcdfb5e3d88e0db8d2d26cf739927559a3cb7e6b28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b2c7baaf90d8932dbbcfcdfb5e3d88e0db8d2d26cf739927559a3cb7e6b28b->enter($__internal_a3b2c7baaf90d8932dbbcfcdfb5e3d88e0db8d2d26cf739927559a3cb7e6b28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_89eed34e0628aa348b8b7fc29e11ba47c3a199b5bf161db0dab357f83a2ff181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89eed34e0628aa348b8b7fc29e11ba47c3a199b5bf161db0dab357f83a2ff181->enter($__internal_89eed34e0628aa348b8b7fc29e11ba47c3a199b5bf161db0dab357f83a2ff181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_89eed34e0628aa348b8b7fc29e11ba47c3a199b5bf161db0dab357f83a2ff181->leave($__internal_89eed34e0628aa348b8b7fc29e11ba47c3a199b5bf161db0dab357f83a2ff181_prof);

        
        $__internal_a3b2c7baaf90d8932dbbcfcdfb5e3d88e0db8d2d26cf739927559a3cb7e6b28b->leave($__internal_a3b2c7baaf90d8932dbbcfcdfb5e3d88e0db8d2d26cf739927559a3cb7e6b28b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/PHP/Symfony/FlyAround/app/Resources/views/base.html.twig");
    }
}
