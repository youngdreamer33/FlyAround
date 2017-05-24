<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_85b2ccb6e82e3a87665006b7528b56159c640c36cd53ed73c26fdcf33a8718d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90e8c0cad27d71a9603626b56d37083816942adc073fecf138e8319893e9d48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e8c0cad27d71a9603626b56d37083816942adc073fecf138e8319893e9d48b->enter($__internal_90e8c0cad27d71a9603626b56d37083816942adc073fecf138e8319893e9d48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_0516beef3b13121ee7f7e27018c1df4b74aa2996dad496f4b9d91bc21f29a9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0516beef3b13121ee7f7e27018c1df4b74aa2996dad496f4b9d91bc21f29a9fb->enter($__internal_0516beef3b13121ee7f7e27018c1df4b74aa2996dad496f4b9d91bc21f29a9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90e8c0cad27d71a9603626b56d37083816942adc073fecf138e8319893e9d48b->leave($__internal_90e8c0cad27d71a9603626b56d37083816942adc073fecf138e8319893e9d48b_prof);

        
        $__internal_0516beef3b13121ee7f7e27018c1df4b74aa2996dad496f4b9d91bc21f29a9fb->leave($__internal_0516beef3b13121ee7f7e27018c1df4b74aa2996dad496f4b9d91bc21f29a9fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_856566ffbd07450234063eafafe41e81a3271f144048ef41244f75efd9c0113b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_856566ffbd07450234063eafafe41e81a3271f144048ef41244f75efd9c0113b->enter($__internal_856566ffbd07450234063eafafe41e81a3271f144048ef41244f75efd9c0113b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_160f1fc2b2dd0766b8a386c63efeed6025780e19d83272e2e14284058aa4d267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160f1fc2b2dd0766b8a386c63efeed6025780e19d83272e2e14284058aa4d267->enter($__internal_160f1fc2b2dd0766b8a386c63efeed6025780e19d83272e2e14284058aa4d267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_160f1fc2b2dd0766b8a386c63efeed6025780e19d83272e2e14284058aa4d267->leave($__internal_160f1fc2b2dd0766b8a386c63efeed6025780e19d83272e2e14284058aa4d267_prof);

        
        $__internal_856566ffbd07450234063eafafe41e81a3271f144048ef41244f75efd9c0113b->leave($__internal_856566ffbd07450234063eafafe41e81a3271f144048ef41244f75efd9c0113b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d291512e5dbde9e01ac195d5aec97a889ca5002782763f20b551e30415ccd27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d291512e5dbde9e01ac195d5aec97a889ca5002782763f20b551e30415ccd27->enter($__internal_0d291512e5dbde9e01ac195d5aec97a889ca5002782763f20b551e30415ccd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6573433ed58fbb22f6424e881c4d3327d141c06170198725779b7bbbb17131c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6573433ed58fbb22f6424e881c4d3327d141c06170198725779b7bbbb17131c->enter($__internal_c6573433ed58fbb22f6424e881c4d3327d141c06170198725779b7bbbb17131c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c6573433ed58fbb22f6424e881c4d3327d141c06170198725779b7bbbb17131c->leave($__internal_c6573433ed58fbb22f6424e881c4d3327d141c06170198725779b7bbbb17131c_prof);

        
        $__internal_0d291512e5dbde9e01ac195d5aec97a889ca5002782763f20b551e30415ccd27->leave($__internal_0d291512e5dbde9e01ac195d5aec97a889ca5002782763f20b551e30415ccd27_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ab43d9755e107040132da28e4fcfcf690604053e99cc8fb3bd5218a57392ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab43d9755e107040132da28e4fcfcf690604053e99cc8fb3bd5218a57392ff3->enter($__internal_3ab43d9755e107040132da28e4fcfcf690604053e99cc8fb3bd5218a57392ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb7fd10e4c3f3a0846e4202af1f635e1f2322c393e5577b8b840d2ef7b67ff85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7fd10e4c3f3a0846e4202af1f635e1f2322c393e5577b8b840d2ef7b67ff85->enter($__internal_bb7fd10e4c3f3a0846e4202af1f635e1f2322c393e5577b8b840d2ef7b67ff85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_bb7fd10e4c3f3a0846e4202af1f635e1f2322c393e5577b8b840d2ef7b67ff85->leave($__internal_bb7fd10e4c3f3a0846e4202af1f635e1f2322c393e5577b8b840d2ef7b67ff85_prof);

        
        $__internal_3ab43d9755e107040132da28e4fcfcf690604053e99cc8fb3bd5218a57392ff3->leave($__internal_3ab43d9755e107040132da28e4fcfcf690604053e99cc8fb3bd5218a57392ff3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/PHP/Symfony/FlyAround/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
